<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if (ifKEYinSTRINGcheckVALUE('email', '') != null)                                         
{                          
    $keys = ['First Name:', 'Last Name:', 'Email:', 'Age:', 'Birthday:', 'Town:', 'Best Result:'];          // массив параметров
    $keysNumber = count($keys);
    $valueMail = ifKEYinSTRINGcheckVALUE('email', '');

    $stringUserData = [];
    $value = '';

    for  ($i = 0; $i < $keysNumber; $i++)
    {
         $value = ifKEYinSTRINGcheckVALUE($keys[$i], '');                
         $stringUserData += [$keys[$i] => $value];                    // заполнить массив параметрами и значениями из querystring
    }        

    $toFileData = $stringUserData;
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';   
           
    if (file_exists($fileAddres))                                     // проверка существования такого  файла
    {
        $fileUserData = dataFromFILE($fileAddres);
        $toFileData = arraysCompare($stringUserData, $fileUserData); // сравнить массив из querystring и из файла, слить в один       
    }

    addDATAtoFILE($toFileData, $fileAddres);
    print_r($toFileData);
}