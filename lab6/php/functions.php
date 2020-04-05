<?php
// задания 1,2,3,5
// getGETParameter - получить параметр QueryString
function getPOSTParameter(string $ident): ?string
{
    return isset($_POST[$ident]) ? (string)$_POST[$ident] : null;
}

//  задания 4,5
//  getDataFromFile - достаёт массив из файла, ансериализует                                         
function getDataFromFile(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализация                     
    return $fileContent;
}

