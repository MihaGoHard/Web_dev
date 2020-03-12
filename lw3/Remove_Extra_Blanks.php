<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['text'] != null)                    // проверка ключа в строке запроса
{
    $text = getGETParameter('text');          
    $reS = str_replace("%20", ' ', $text);    // меняет %20 на пробел
    $reS = trim($reS);                        // 
    $reS = preg_replace("/ +/", " ", $reS);   // меняет пробелы на один
    header("Content-Type: text/plain");
    echo $reS;
}
