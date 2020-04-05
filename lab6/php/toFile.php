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

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = getPOSTParameter('email');
    if ($email)                                         
    {                          
        $keys = ['First Name', 'Email', 'Country', 'Massege', 'Radbut'];               // параметры
        $data = [];

        foreach ($keys as $key)
        {
            $formatedKey = str_replace(' ', '_', strtolower($key));
            $data[$key . ':'] = getPOSTParameter($formatedKey);
        }

        $toFileData = $data;
        $fileAddres = "data/" . strtolower($email) . ".txt";   
            
        if (file_exists($fileAddres))                                      // проверка существования такого файла
        {
            $fileUserData = getDataFromFile($fileAddres);
            $toFileData = joinArrays($fileUserData, $data);      // обновление файла данными из query string       
        }

        addDataToFile($toFileData, $fileAddres);
    }    
}
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>