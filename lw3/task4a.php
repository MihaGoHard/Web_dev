<?php
include 'functions.php';
if (ifKeyInStringReturnValue('email') != null)                                         
{    
    $str = $_SERVER['QUERY_STRING'];
    parse_str($str, $stringUserData);                                 //запарсить querystring в массив
    formatedKeys($stringUserData);
    $toFileData = $stringUserData;

    $valueMail = ifKeyInStringReturnValue('email');
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';
                                               
    if (file_exists($fileAddres))                                     // проверить наличие файла
    {        
        $fileUserData = dataFromFile($fileAddres);
        $toFileData = array_merge($fileUserData, $stringUserData);       
    }

    addDataToFile($toFileData, $fileAddres);
    print_r($toFileData);
}