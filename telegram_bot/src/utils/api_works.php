<?php
function getInfoByCodeFromApi(string $code): string
{
    $apiJson = file_get_contents('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $code . '?modules=price');
    $apiArr = json_decode(($apiJson), true);
    return $apiArr['quoteSummary']['result'][0]['price']['regularMarketPrice']['raw'];
}

function getFuturesInfo(): string
{
    $oilPrice = getInfoByCodeFromApi(OIL_CODE);
    $gasPrice = getInfoByCodeFromApi(GAS_CODE);
    $goldPrice = getInfoByCodeFromApi(GOLD_CODE);
    $silverPrice = getInfoByCodeFromApi(SILVER_CODE);
    $platinumPrice = getInfoByCodeFromApi(PLATINUM_CODE);
    return 'НЕФТЬ МАРКИ "BRENT": ' . $oilPrice . '$ за баррель' . PHP_EOL .
           'ПРИРОДНЫЙ ГАЗ: ' . $gasPrice . '$ за кубометр' . PHP_EOL .
           'ЗОЛОТО: ' . $goldPrice . '$ за унцию' . PHP_EOL .
           'ПЛАТИНА: ' . $platinumPrice . '$ за унцию' . PHP_EOL .
           'СЕРЕБРО: ' . $silverPrice . '$ за унцию' . PHP_EOL;
}

function getSyncHour(): int
{
     date_default_timezone_set('UTC');
     $hour = (int)date('H') + 3;
     $minutes = (int)date('i');
     if (($minutes === 57) || ($minutes === 58) || ($minutes === 59))
     {
         $hour = $hour + 1;
     }
     return $hour;
}