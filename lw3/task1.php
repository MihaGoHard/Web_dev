<?php

header("Content-Type: text/plain");
include 'functions.php';
$text = getGETParameter('text');    
if ($text)                    
{        
    $reS = str_replace("%20", ' ', $text);    // меняет %20 на пробел
    $reS = trim($reS);                        // 
    $reS = preg_replace("/ +/", " ", $reS);   // меняет пробелы на один  
    echo $reS;
}
