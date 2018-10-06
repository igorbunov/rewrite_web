<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportMessage extends Controller
{
    public function index() {
        return view('support');
    }

    public function send(Request $req) {
        $message = "from: {$req->post('email')}\nmessage: {$req->post('message')}";
        $result = mail(env('CREATOR_EMAIL'), "Сообщение с сайта рерайт", $message);

        $resultMessage = ($result) ? 'Сообщение успешно отправлено!' : 'Ошибка отправки сообщения';
        return view('support_sended', ['message' => $resultMessage]);
    }
}
