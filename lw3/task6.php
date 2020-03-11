<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if (ifKEYinSTRINGreturnVALUE('email') != null)                                         
{                          
    $keys = ['First Name:', 'Last Name:', 'Email:', 'Age:', 'Birthday:', 'Town:', 'Best Result:', 'Kind Of Sport:'];          // массив параметров
    $keysNumber = count($keys);
    $valueMail = ifKEYinSTRINGreturnVALUE('email');

    $stringUserData = [];
    $value = '';

    for  ($i = 0; $i < $keysNumber; $i++)
    {
         $value = ifKEYinSTRINGreturnVALUE($keys[$i]);                
         $stringUserData += [$keys[$i] => $value];                    // заполнить массив параметрами и значениями из querystring
    }        

    $toFileData = $stringUserData;
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';   
           
    if (file_exists($fileAddres))                                     // проверка существования такого  файла
    {
        $fileUserData = dataFromFILE($fileAddres);
        $toFileData = arraysMerge($fileUserData, $stringUserData);  // добавить в массив из файла непустые значения из массива query string       
    }

    addDATAtoFILE($toFileData, $fileAddres);
    print_r($toFileData);
}