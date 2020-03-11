<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if (ifKEYinSTRINGreturnVALUE('email') != null)                                         
{    
    $str = $_SERVER['QUERY_STRING'];
    parse_str($str, $stringUserData);                                 //запарсить querystring в массив
    formatKEYS($stringUserData);
    $toFileData = $stringUserData;

    $valueMail = ifKEYinSTRINGreturnVALUE('email');
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';
                                               
    if (file_exists($fileAddres))                                     // проверка существования такого  файла
    {        
        $fileUserData = dataFromFILE($fileAddres);
        $toFileData = array_merge($fileUserData, $stringUserData);       
    }

    addDATAtoFILE($toFileData, $fileAddres);
    print_r($toFileData);
}