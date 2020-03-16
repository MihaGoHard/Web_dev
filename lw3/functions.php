<?php
// задания 1,2,3,5
// getGETParameter - получить параметр QueryString
function getGETParameter(string $ident): ?string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// задание 3
// getRepeatsCount - получить кол-во повторяющихся символов
function getRepeatsCount(string $str): string
{
    $arrStr = str_split($str);                  // перевод в массив
    sort($arrStr);                              // сортировка
    $sortStr = implode($arrStr);                // перевод в строку
    preg_match_all('/(.)\1+/', $sortStr, $num); // добавление в массив повторяющихся символов
    $num = implode($num[0]);                    // перевод в строку
    return strlen($num);                        // длинна строки  
}


//  задания 4,5
//  arraysMerge - добавляет к массиву из файла непустые элементы массива из querystring
//  addDATAtoFILE - сериализует массив, добавляет в файл
//  dataFromFILE - достаёт массив из файла, ансериализует
//  ifKEYinSTRINGcheckVALUE - формат. ключ 'First Name' > 'first_name'; ищет ключ querystring;
//  если найден, то возвращает значение
function joinArrays(array $fromFile, array $fromGetString): array
{
    $deletNullGetString = array_diff($fromGetString, array(''));       // удаляет элемент с пустыми значениями из массива
    return $arrayResult = array_merge($fromFile, $deletNullGetString); 
     
}
 
function addDataToFile(array $userData, string $fileAddres)
{
    $convertData = serialize($userData);    // сериализация 
    $fileForData = fopen($fileAddres, 'w');          
    fwrite($fileForData, $convertData);           
    fclose($fileForData);                       
}
                                                        
function getDataFromFile(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализация                     
    return $fileContent;
}

function giveKeyGetValue(string $key): string       
{    
     $formatedKey = str_replace(' ', '_', strtolower($key)); // 'First Name' => 'first_name' 
     $searchKey = $_GET[$formatedKey];                                                        
     if ($searchKey != null)                                                          
     {
         return isset($searchKey) ? (string)$searchKey: null;                   
     }
     return $emptyValue = '';

}

// задание 7
// formatKEYS - форматирует все ключи массива 'first_name' > 'First Name:'
function formatedKeys(&$data)
{
    foreach ($data as $key => $value)
    {
        $newKey = ucwords(str_replace('_', ' ', $key.':')); // 'first_name' > 'First Name:'
        if ($newKey != $key)
        {
            unset($data[$key]);
            $data[$newKey] = $value;
        }
    }
}