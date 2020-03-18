<?php
include 'functions.php';

function joinArrays(array $fromFile, array $fromGetString): array
{
    $deletNullGetString = array_diff($fromGetString, array(''));       // удаляет элемент с пустыми значениями из массива
    return $arrayResult = array_merge($fromFile, $deletNullGetString);      
}

function addDataToFile(array $userData, string $fileAddres)
{
    $convertData = serialize($userData);                              // сериализация 
    $fileForData = fopen($fileAddres, 'w');          
    fwrite($fileForData, $convertData);           
    fclose($fileForData);                       
}

$email = getGETParameter('email');
if ($email)                                         
{                          
    $keys = ['First Name', 'Last Name', 'Email', 'Age'];               // параметры
    $stringUserData = [];

    foreach ($keys as $key => $value)
    {
        $formatKey = str_replace(' ', '_', strtolower($keys[$key]));
        $value = getGETParameter($formatKey);                
        $stringUserData += [$keys[$key] . ':' => $value];                 // составить массив ключ => значение из query string
    }        

    $toFileData = $stringUserData;
    $fileAddres = "data/" . $email . ".txt";   
           
    if (file_exists($fileAddres))                                      // проверка существования такого файла
    {
        $fileUserData = getDataFromFile($fileAddres);
        $toFileData = joinArrays($fileUserData, $stringUserData);      // обновление файла данными из query string       
    }

    addDataToFile($toFileData, $fileAddres);
    print_r($toFileData);
}