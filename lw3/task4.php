<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if (ifKEYinSTRINGreturnVALUE('email') != null)                                         
{   
    $key1 = 'First Name:';                           // $key - параметр данных пользователя               
    $key2 = 'Last Name:';
    $key3 = 'Age:';                   
    $keyMail = 'Email:';

    $valueMail = ifKEYinSTRINGreturnVALUE('email');                                                
    $value1 = ifKEYinSTRINGreturnVALUE($key1);
    $value2 = ifKEYinSTRINGreturnVALUE($key2);
    $value3 = ifKEYinSTRINGreturnVALUE($key3);

    $stringUserData = [$key1 => $value1, $key2 => $value2, $keyMail => $valueMail, $key3 => $value3];
    $toFileData = $stringUserData;

    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';              
    if (file_exists($fileAddres))                                 // проверка существования такого  файла
    {
        $fileUserData = dataFromFILE($fileAddres);
        $toFileData = arraysMerge($fileUserData, $stringUserData);  // добавить в массив из файла непустые значения из querystring      
    }

    addDATAtoFILE($toFileData, $fileAddres);
    print_r($toFileData);
}
