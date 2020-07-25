<?php
function getInfoByCodeFromApi(string $resourceCode): string
{
    $apiJson = file_get_contents(FINANCE_URL_WITHOUT_PARAMS . $resourceCode . FINANCE_URL_MODULE);
    if ($apiJson != null)
    {
        $apiArr = json_decode(($apiJson), 1);
        $info = $apiArr['quoteSummary']['result'][0]['price']['regularMarketPrice']['raw'];
    }
    else
    {
        $info = JSON_MISTAKE;
    }
    return $info;
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
     date_default_timezone_set('Etc/GMT-3');
     $hour = (int)date('H') ;
     $minutes = (int)date('i');
     if (in_array($minutes, MINUTES_FOR_HOUR_INC))
     {
         $hour === HOUR_FOR_HOUR_RESET ? $hour = 0 : ++$hour;
     }
     return $hour;
}