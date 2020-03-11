<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['email'] != null)
{
    $mailValue = getGETParameter('email');              
    if($mailValue != null)
    {
        $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$mailValue.'.txt'; //получить адрес файла
        if (file_exists($fileAddres))                           
        {
            $fileContent = dataFromFILE($fileAddres);              //достать массив из файла
            header("Content-Type: text/plain");
            foreach ($fileContent as $key => $value)       
            {
                print $key.' '.$value.PHP_EOL;                     //печать в нужном формате
            }        
        }
    }
}