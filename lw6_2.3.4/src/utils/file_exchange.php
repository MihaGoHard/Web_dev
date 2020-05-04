<?
function joinArrays(array $fromFile, array $fromGetString): array
{
    $deletNullGetString = array_diff($fromGetString, array(''));       // удаляет элемент с пустыми значениями из массива
    return $arrayResult = array_merge($fromFile, $deletNullGetString);      
}

function addDataToFile(array $userData, string $fileAddres)
{
    $convertData = serialize($userData);                             // сериализация
    file_put_contents($fileAddres, $convertData);                                             
}

function getDataFromFile(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализация                     
    return $fileContent;
}

function saveUserData(string $email, array $toFileData): void
{
    $fileAddres = "../src/user_data/" . strtolower($email) . ".txt";  
    if (file_exists($fileAddres))                                             // проверка существования такого файла
    {
        $fileUserData = getDataFromFile($fileAddres);
        $toFileData = joinArrays($fileUserData, $toFileData);                // обновление файла данными из query string       
    }
    addDataToFile($toFileData, $fileAddres);
}