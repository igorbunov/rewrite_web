<?php

namespace App\Http\Controllers;

use App\Activation;
use App\KodeChecker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivationController extends Controller
{
    public function report($name) {
        if ('pata' == $name) {
            $downloads = DB::table('upload_counters')
                ->select('downloads')->first();

            $keyChecks = DB::table('kode_checkers')
                ->select(['key'
                    , DB::raw('count(1) as cnt')
                    , DB::raw("DATE_FORMAT(MAX(updated_at), '%d.%m.%Y %H:%i') AS dt")
                    , DB::raw("IF(DATE(MAX(updated_at)) = CURDATE(), 1, 0) as is_today")
                    , DB::raw("MAX(updated_at) AS sort_dt")
                ])
                ->groupBy('key')
                ->orderBy('sort_dt', 'DESC')
                ->orderBy('cnt', 'DESC')
                ->get()->toArray();

            $moreThanOne = 0;

            foreach($keyChecks as $i => $row) {
                if ($row->cnt > 1) {
                    $moreThanOne++;
                }

                $keyChecks[$i]->isPayed = $this->checkActivation($row->key, false);
            }

            return view('report', [
                'downloads' => $downloads->downloads,
                'keys' => $keyChecks,
                'keysCount' => count($keyChecks),
                'moreThanOneRun' => $moreThanOne
            ]);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function checkActivation($key, bool $updateStatistics = true) {
        $key = trim($key);

        if ($key != '') {
            if ($updateStatistics) {
                $checker = new KodeChecker();
                $checker->key = $key;
                $checker->save();
            }

            $user = Activation::where(['key' => $key, 'is_payed' => '1'])->take(1)->get();

            return count($user);
        } else {
            return 0;
        }
    }

    public function success(Request $request) {
        $result = array('payType' => 'unknown');
        $message = '';
        $isPayed = 0;
        $payResponse = false;
        $privateKey = env('LIQ_PAY_PRIVATE_KEY');
        $postData = $request->post('data');

        $sign = base64_encode( sha1($privateKey .$postData .$privateKey, 1 ));

        if ($sign == $request->post('signature')) {
            $data = json_decode(base64_decode($postData), true);
            $result['payData'] = base64_decode($postData);
            $payResponse = json_decode($result['payData'], true);

            switch($data['status']) {
                case 'error':
                    $message = 'Неуспешный платеж. Некорректно заполнены данные';
                    break;
                case 'failure':
                    $message = 'Неуспешный платеж';
                    break;
                case 'reversed':
                    $message = 'Платеж возвращен';
                    break;
                case 'sandbox':
                    $message = 'Тестовый платеж';
                    $isPayed = 1;
                    break;
                case 'subscribed':
                    $message = 'Подписка успешно оформлена';
                    $isPayed = 1;
                    break;
                case 'success':
                    $message = 'Успешный платеж';
                    $isPayed = 1;
                    break;
                case 'unsubscribed':
                    $message = 'Подписка успешно деактивирована';
                    $isPayed = 1;
                    break;
            }
        } else {
            return 'Не верная подпись';
        }

        if ($payResponse !== false) {
            $order = json_decode($payResponse['order_id'], true);

            if ($this->checkActivation($order['key']) == 1) {
                return view('activation_success');
            } else {
                $ac = new Activation();
                $ac ->response = $result['payData'];
                $ac ->message = $message;
                $ac ->is_payed = $isPayed;

                $ac ->amount = $payResponse['amount'];
                $ac ->currency = $payResponse['currency'];
                $ac ->payment_id = $payResponse['payment_id'];
                $ac ->order_id = $payResponse['order_id'];

                $ac ->key = $order['key'];

                $ac->save();

                return view('activation_success');
            }
        }

        return 'Что-то пошло не так';
//        {
//            "action":"pay"
//            ,"payment_id":833777845
//            ,"status":"sandbox"
//            ,"version":3
//            ,"type":"buy"
//            ,"paytype":"privat24"
//            ,"public_key":"i85467765655"
//            ,"acq_id":414963
//            ,"order_id":"{key: \"fwt3434\", payNum: \"21\"}"
//            ,"liqpay_order_id":"P4DHT9JA1538773341079567"
//            ,"description":"description text"
//            ,"ip":"109.206.46.254"
//            ,"amount":1.0
//            ,"currency":"UAH"
//            ,"sender_commission":0.0
//            ,"receiver_commission":0.03
//            ,"agent_commission":0.0
//            ,"amount_debit":1.0
//            ,"amount_credit":1.0
//            ,"commission_debit":0.0
//            ,"commission_credit":0.03
//            ,"currency_debit":"UAH"
//            ,"currency_credit":"UAH"
//            ,"sender_bonus":0.0
//            ,"amount_bonus":0.0
//            ,"mpi_eci":"7"
//            ,"is_3ds":false
//            ,"create_date":1538773341079
//            ,"end_date":1538773341103
//            ,"transaction_id":833777845
//        }
    }

    public function preIndex() {
        return view('pre_activate');
    }

    public function showPayButton($key)
    {
        $orderId = '{"key": "'.$key.'", "dt": "'.date("Y.m.d H:i:s").'"}';
        $amount = env('LIQ_PAY_PAY_AMOUNT'); //рублей
        $liqPay = new \LiqPay(env('LIQ_PAY_PUBLIC_KEY'), env('LIQ_PAY_PRIVATE_KEY'));

        $html = $liqPay->cnb_form(array(
            'action'         => 'pay',
            'amount'         => $amount,
            'currency'       => 'RUB', //USD, EUR, RUB, UAH
            'description'    => 'Активация ключа: '.$key,
            'order_id'       => $orderId,
            'version'        => '3',
            'result_url' => env('LIQ_PAY_RESULT_URL'), // передается через редирект
            'server_url' => env('LIQ_PAY_SERVER_URL'), // передается через курл
            'sandbox' => env('LIQ_PAY_SANDBOX')
        ));

        return view('activate', ['button' => $html, 'key' => $key, 'amount' => $amount]);
    }
}
