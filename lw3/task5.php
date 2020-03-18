<?php

header("Content-Type: text/plain");
include 'functions.php';
$email = getGETParameter('email');
if ($email)
{                                                                                                       
    $fileAddres = "data/" . $email . ".txt" ;                    //адрес проверяемого файла
    if (file_exists($fileAddres))                           
    {
        $fileContent = getDataFromFile($fileAddres);              //достаёт массив из файла
        foreach ($fileContent as $key => $value)       
        {
            print $key . ' ' . $value . PHP_EOL ;               //печать
        }        
    }
    else
    {
        print 'file not found';    
    }
}
else
{
    print 'email not found';
}