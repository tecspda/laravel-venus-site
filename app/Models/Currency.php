<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Currency extends Model
{
    use HasFactory;
    protected $RUB_USD;
    protected $RUB_EUR;
    protected $RUB_TRY;
    protected $USD_RUB;
    protected $EUR_RUB;
    protected $TRY_RUB;

    protected $loadType = 'url';
    protected $urlForLoad = 'https://www.cbr-xml-daily.ru/latest.js';


    public function __construct($digit = 2)
    {
        $curr = json_decode($this->initCurrency());
        $this->USD_RUB = round($curr->rates->USD, $digit);
        $this->EUR_RUB = round($curr->rates->EUR, $digit);
        $this->TRY_RUB = round($curr->rates->TRY, $digit);

        $this->RUB_USD = round(1 / $curr->rates->USD, $digit);
        $this->RUB_EUR = round(1 / $curr->rates->EUR, $digit);
        $this->RUB_TRY = round(1 / $curr->rates->TRY, $digit);

    }

    public function __get($name){
        if (isset($this->$name)) {
            return $this->$name;
        } else {
            return null;
        }
    }

    /**
    * function only reading from API www.cbr-xml-daily.ru
    *
    * @param no need
    * @return Array({... "rates": { "USD": 0.013988, "EUR": 0.012076, "TRY": 0.134678 ...}})
    */
    private function getCurrencyRateFromCbrAPI()
    {
        $ret = file_get_contents($this->urlForLoad);
        $this->loadType = 'local';
        return $ret;
    }

    /**
    * READING CURRENCY FROM API OR LOCAL JSON
    * read json with currency rate from API https://www.cbr-xml-daily.ru/
    * write to local path: /var/www/html/storage/app/files//currency/currency_today.json
    *
    * @param no need
    * @return Array({... "rates": { "USD": 0.013988, "EUR": 0.012076, "TRY": 0.134678 ...}})
    */
    private function isCurrencyRateFromLocalJsonValidTime()
    {
        $filename = public_path('app/files').'/currency/currency_today.json';

        $ret = false;
        if (file_exists($this->filename)) {
            $filemtime = date('Y-m-d H:i:s', filemtime($this->filename)); // int to date

            $now = new DateTime(); // current time
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $filemtime);
            $date->date = $this->filename;

            $diff = $now->diff($date); //get age of local json in days

            if ($diff->h < 12) $ret = true;
        }
        return $ret;
    }

    /**
    * function only reading json from local path: /var/www/html/storage/app/files//currency/currency_today.json
    *
    * @param no need
    * @return Array({... "rates": { "USD": 0.013988, "EUR": 0.012076, "TRY": 0.134678 ...}})
    */
    private function getCurrencyRateFromLocalJson()
    {
        $ret = file_get_contents($this->urlForLoad);
        return $ret;
    }

    /**
    * function only write json to local path: /var/www/html/storage/app/files//currency/currency_today.json
    *
    * @param no need
    * @return no
    */
    private function setCurrencyRateToLocalJson($jsonText)
    {
        $filename = public_path('app/files').'/currency/currency_today.json';
        file_put_contents($filename, $jsonText);
        $this->loadType = 'local';
    }

    /**
    * function only write json to local path: /var/www/html/storage/app/files//currency/currency_today.json
    *
    * @param no need
    * @return no
    */
    private function initCurrency()
    {
        // check valid age of local json (12 hours)
        $validAge = $this->isCurrencyRateFromLocalJsonValidTime();

        if (!$validAge)
        {
            $response = $this->getCurrencyRateFromCbrAPI();
            $this->setCurrencyRateToLocalJson($response);
        }
        else
        {
            $response = $this->getCurrencyRateFromLocalJson();
        }
        return $response;
    }
}





