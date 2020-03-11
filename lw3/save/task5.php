<?php
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

if ($_GET['email'] != null)
{
    $mailPar = getGETParameter('email');                  // проверить наличие mail в строке запроса
    if($mailPar != null)
    {
        $addres = 'D:\aStudy\PHP\lw3\data/'.$mailPar.'.txt';
        if (file_exists($addres))                          // проверить наличие анкеты
        {
            $f = file_get_contents($addres);   // прочитать содержимое папки
            $f = unserialize($f);             // ансериализация содержимого
            $keys = array_keys($f);            // получение ключей массива
            $value1 = $f['First Name:'];       // получение значений массива
            $value2 = $f['Last Name:'];
            $value3 = $f['Email:'];
            $value4 = $f['Age:'];
            $out = $keys[0].$value1.PHP_EOL.$keys[1].$value2.PHP_EOL.$keys[2].$value3.PHP_EOL.$keys[3].$value4.PHP_EOL;//формирование строки
            header("Content-Type: text/plain");
            echo $out; 
        }
    }
    else
    {
        print 'no mail';
    }
}