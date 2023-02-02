<?php
const apiUrl = "https://economia.awesomeapi.com.br/json/";

function convertCurrency($from, $to, $amount) {
    $apiContents = file_get_contents(apiUrl.$from."-".$to);
    $apiDecode = json_decode($apiContents);
    $apiArray = (array) $apiDecode[0];
    $convertedAmount = $amount * $apiArray["bid"];
    return $convertedAmount; 
}

$convertedAmount = convertCurrency("USD", "BRL", 100);
echo $convertedAmount;