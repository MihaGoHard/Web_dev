<?php

function getPOSTParameter(string $ident): ?string
{
    return isset($_POST[$ident]) ? (string)$_POST[$ident] : null;
}
                                       
function getDataFromFile(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализация                     
    return $fileContent;
}

