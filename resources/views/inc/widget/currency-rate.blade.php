@php
use App\Models\Currency;
$curr = new Currency(4);

@endphp

<div class="p-2 mx-auto " style="width: 150px;">
    <h5 class="mb-3 text-left"><b>Currency today</b></h5>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">USD</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_USD }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">EUR</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_EUR }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">TRY</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_TRY }}</div>
    </div>
</div>





@php

/*
// $response = Http::get('https://s.tradingview.com/embed-widget/single-quote/?locale=en#%7B%22symbol%22%3A%22OANDA%3AUSDTRY%22%2C%22width%22%3A350%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A126%2C%22');

// $response = file_get_contents('');
// echo $response;

{{-- <iframe src='https://s.tradingview.com/embed-widget/single-quote/?locale=en#%7B%22symbol%22%3A%22OANDA%3AUSDTRY%22%2C%22width%22%3A350%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A126%2C%22'></iframe> --}}

{{-- Working --}}
{{-- <iframe style="width:100%;border:0;overflow:hidden;background-color:transparent;height:241px" scrolling="no" src="https://fortrader.org/informers/getInformer?st=1&cat=13&title=Raw%20material%20prices&texts=%7B%22toolTitle%22%3A%22Material%22%2C%22bid%22%3A%22Price%22%2C%22time%22%3A%22Time%22%7D&mult=1&showGetBtn=0&w=0&disableRealTime=1&colors=false&items=47%2C25461&columns=bid%2Ctime"></iframe> --}}


// $response = Http::get('https://metallicheckiy-portal.ru/servis/mp_inform_lme2.php?tp=1&p1=2&p2=2&p3=1&p4=1&p5=1&p6=1&p7=1&p8=1&p9=1&p10=1&p11=1&p12=1&p13=1&p14=1&p15=1&p16=1&p17=1&p18=1&p19=1&wi=218&he=56&fi=B8E0FF&fz=020C80&fc=F3FCFD&rls=2&rlc=020C80&zl=&tt=020C80&tz=FFFFFF&pg=');

// $response = file_get_contents('https://metallicheckiy-portal.ru/servis/mp_inform_lme2.php?tp=1&p1=2&p2=2&p3=1&p4=1&p5=1&p6=1&p7=1&p8=1&p9=1&p10=1&p11=1&p12=1&p13=1&p14=1&p15=1&p16=1&p17=1&p18=1&p19=1&wi=218&he=56&fi=B8E0FF&fz=020C80&fc=F3FCFD&rls=2&rlc=020C80&zl=&tt=020C80&tz=FFFFFF&pg=');
//$response = Http::get('https://free.currconv.com/api/v7/convert?apiKey=cd2ff852330c08894153&q=USD_RUB&compact=ultra');
// echo $response;




// use App\Models\Currency;
//
//     READING CURRENCY FROM API
//     read json with currency rate from API https://www.cbr-xml-daily.ru/
//     write to local path: /var/www/html/storage/app/files//currency/currency_today.json
//
//
// // MARK: - *****************************************
// function getCurrencyRateFromCbrAPI()
// {
//     $ret = file_get_contents('https://www.cbr-xml-daily.ru/latest.js');
//     return $ret;
// }
//
//
//
//
// // MARK: - *****************************************
// function isCurrencyRateFromLocalJsonValidTime()
// {
//     $ret = false;
//     $filename = public_path('app/files').'/currency/currency_today.json';
//
//     if (file_exists($filename)) {
//         $filemtime = date('Y-m-d H:i:s', filemtime($filename)); // int to date
//
//         $now = new DateTime(); // current time
//         $date = DateTime::createFromFormat('Y-m-d H:i:s', $filemtime);
//         $date->date = $filename;
//
//         $diff = $now->diff($date); //get age of local json in days
//
//         if ($diff->h < 12) $ret = true;
//     }
//     return $ret;
// }
//
// // MARK: - *****************************************
// function getCurrencyRateFromLocalJson()
// {
//     $ret = file_get_contents('https://www.cbr-xml-daily.ru/latest.js');
//     return $ret;
// }
//
// // MARK: - *****************************************
// function setCurrencyRateFromLocalJson($jsonText)
// {
//     $filename = public_path('app/files').'/currency/currency_today.json';
//     file_put_contents($filename, $jsonText);
// }
//
// // MARK: - *****************************************
// function updateCurrencyData()
// {
//     // check valid age of local json (12 hours)
//     $validAge = isCurrencyRateFromLocalJsonValidTime();
//
//     if (!$validAge)
//     {
//         $response = getCurrencyRateFromCbrAPI();
//         setCurrencyRateFromLocalJson($response);
//     }
//     else
//     {
//         $response = getCurrencyRateFromLocalJson();
//     }
//     return $response;
// }
//
// function getUsdTryRate(){
//
// }
//
//
//     // $filename = public_path('app/files').'/currency/currency_today.json';
//     // echo $filename;
//
//     $jsonData = updateCurrencyData();
//     $data = json_decode($jsonData);
//
//     echo "Обменный курс USD по ЦБ РФ на сегодня: ".$data->rates->USD;
//
//     // $aaa = new Currency('usd', 123);
//     // $bbb = new WindgetAvaliable();
//     // $ccc = new Currency::WindgetAvaliable();
//     // echo $ccc->TRY_USD;
//
// // echo '<br>'.dd($aaa);
// // echo '<br>'.dd($bbb);
//
//     // echo '<br><b>'.$aaa->get_name.'</b>: '.$aaa->get_value;
//     // echo '<br><b>'.$bbb->get_name.'</b>: '.$bbb->get_value;
//
//     // print_r($aaa);
//

//

*/

@endphp
