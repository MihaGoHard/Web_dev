<?php
include 'functions.php';
if (giveKeyGetValue('email') != null)                                         
{                          
    $keys = ['First Name', 'Last Name', 'Email', 'Age'];          // параметры
    $keysNumber = count($keys);
    $valueMail = giveKeyGetValue('email');

    $stringUserData = [];
    $value = '';

    for ($i = 0; $i < $keysNumber; $i++)
    {
         $value = giveKeyGetValue($keys[$i]);                
         $stringUserData += [$keys[$i] . ':' => $value];                    // составить массив ключ => значение из query string
    }        

    $toFileData = $stringUserData;
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';   
           
    if (file_exists($fileAddres))                                     // проверка существования такого файла
    {
        $fileUserData = getDataFromFile($fileAddres);
        $toFileData = joinArrays($fileUserData, $stringUserData);  // обновление файла данными из query string       
    }

    addDataToFile($toFileData, $fileAddres);
    print_r($toFileData);
}