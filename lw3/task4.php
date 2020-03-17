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

$valueMail = getGETParameter('email');
if ($valueMail)                                         
{                          
    $keys = ['First Name', 'Last Name', 'Email', 'Age'];               // параметры
    $keysNumber = count($keys);
    $stringUserData = [];
    $value = '';

    for ($i = 0; $i < $keysNumber; $i++)
    {
        $formatKey = str_replace(' ', '_', strtolower($keys[$i]));
        $value = getGETParameter($formatKey);                
        $stringUserData += [$keys[$i] . ':' => $value];                 // составить массив ключ => значение из query string
    }        

    $toFileData = $stringUserData;
    $fileAddres = "data/" . $valueMail . ".txt";   
           
    if (file_exists($fileAddres))                                      // проверка существования такого файла
    {
        $fileUserData = getDataFromFile($fileAddres);
        $toFileData = joinArrays($fileUserData, $stringUserData);      // обновление файла данными из query string       
    }

    addDataToFile($toFileData, $fileAddres);
    print_r($toFileData);
}