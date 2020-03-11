<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['text'] != null)                    // проверить наличие параметра в строке
{
    $text = getGETParameter('text');          // получить значение
    $reS = str_replace("%20", ' ', $text);    // заменить на пробелы
    $reS = trim($reS);                        // удалить пробелы с начала и с конца
    $reS = preg_replace("/ +/", " ", $reS);   // удалить пробелы внутри
    header("Content-Type: text/plain");
    echo $reS;
}
