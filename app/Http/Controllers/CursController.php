<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
class CursController extends Controller
{
    //
    public static function index(){

        $i = 0;
        $curs = 0;




        $url = 'https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5 ';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $xml = curl_exec($ch);

        if(!curl_errno($ch)){
            $myxml = new SimpleXMLElement($xml);
            foreach ($myxml->row as $currency) {
                if ($currency->exchangerate['ccy'] == 'USD') {
                    /*$curs += floatval($currency->exchangerate['buy']);
                    $i++;*/
                    $curs += floatval($currency->exchangerate['sale']);
                    $i++;
                };
            }
        }
        curl_close($ch);
        return $curs;
    }
}
