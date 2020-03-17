<?php

header("Content-Type: text/plain");
include 'functions.php';
$mailValue = getGETParameter('email');
if ($mailValue)
{                                                                                                       
    $fileAddres = "data/" . $mailValue . ".txt";                    //адрес проверяемого файла
    if (file_exists($fileAddres))                           
    {
        $fileContent = getDataFromFile($fileAddres);              //достаёт массив из файла
        foreach ($fileContent as $key => $value)       
        {
            print $key . ' ' . $value . PHP_EOL;               //печать
        }        
    }
}