<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['identifire'] != null)                  
{
    $ident = getGETParameter('identifire');       
    if (preg_match('/^[a-zA-Z]/u', $ident) != 0)  // первый символ буква
    {
        $result = 'YES';       
    }
    else
    { 
        $result = 'NO. SR3 identifire := letter not comlited';
    }

    if (preg_match_all('/[a-zA-Z0-9]/', $ident) != strlen($ident)) // состоит только из букв
    { 
        $result = 'NO. UNKNOWN SYMBOLS IN INPUT, SR3 not comlited';  
    }

    if (preg_match_all('/\d+\D/', $ident) != 0)                    // за цифрой только цифра
    {
        $result = 'NO. SR3 identifire := identifire-letter  not comlitied ';
    }
    header("Content-Type: text/plain"); 
    print $result; 
}

