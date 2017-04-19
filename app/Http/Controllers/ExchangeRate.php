<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 21.03.2017
 * Time: 18:55
 */


class ExchangeRate {

    // URL, за яким лежить курс валют НБУ (у форматі XML)
    public $exchange_url =
        'http://bank-ua.com/export/currrate.xml';
    public $xml;

    function __construct(){
        // інтерпретуємо XML-файл в об'єкт
        return $this->xml =
            simplexml_load_file($this->exchange_url);
    }

    function getExchangeRateByChar3($char3){

        if ($this->xml!==FALSE) {
            // в XML-даних нема помилки

            foreach($this->xml->children() as $item){
                $row = simplexml_load_string($item->asXML());
                // виконуємо XPath-запит до XML-даних
                // (в SimpleXML включена підтримка запитів XPath)
                $v = $row->xpath('//char3[. ="' . $char3 . '"]');

                if($v[0]){
                    $result = $item;
                    break;
                }
            }
        }
        return $result;
    }

    function getXMLTree (){ // для тестування
        // показуємо дерево XML
        print "<pre>";
        print_r ($this->xml);
        print "</pre>";
    }

}