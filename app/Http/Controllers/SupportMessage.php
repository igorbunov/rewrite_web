<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportMessage extends Controller
{
    public function index() {
        return view('support');
    }

    public function send(Request $req) {
        $catpchaResponse = $req->post("g-recaptcha-response");

        if (empty($catpchaResponse)) {
            return view('main');
        }


        if (!$this->isValidMessage($req->post('message'))) {
            return view('main');
        }

        $data = array(
            'secret' => env('CAPTCHA_SECRET'),
            'response' => $catpchaResponse
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);

        $res = json_decode($response, true);

        if ($res['success']) {
            $message = "from: {$req->post('email')}\nmessage: {$req->post('message')}";
            $result = mail(env('CREATOR_EMAIL'), "Сообщение с сайта рерайт", $message);

            $resultMessage = ($result) ? 'Сообщение успешно отправлено!' : 'Ошибка отправки сообщения';
            return view('support_sended', ['message' => $resultMessage]);
        } else {
            return view('main');
        }
    }

    private function isValidMessage($message): bool
    {
        $isValid = true;

        $wrongWords = [
            'href="',
            'http://',
            'https://'
        ];

        foreach ($wrongWords as $wrongWord) {
            if (strpos($message, $wrongWord) !== false) {
                $isValid = false;
                break;
            }
        }

        return $isValid;
    }
}
