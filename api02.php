<?php

//大家都可以來  *->all
header('Access-Control-Allow-Origin: *');
//初始化 curl
$curl = curl_init('https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=100');
//https要取得
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//回傳結果 不會輸出在畫面上 傳給前端記得加這一行 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");

$output = curl_exec ($curl);

curl_close($curl);

echo $output;
?>