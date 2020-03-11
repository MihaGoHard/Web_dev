<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['identifire'] != null)                  // проверить наличие параметра в строке
{
    $ident = getGETParameter('identifire');       
    if (preg_match('/^[a-zA-Z]/u', $ident) != 0)  //проверить первый символ на принадлежность к массиву букв
    {
        $result = 'YES';       
    }
    else
    { 
        $result = 'NO. SR3 identifire := letter not comlited';
    }

    if (preg_match_all('/[a-zA-Z0-9]/', $ident) != strlen($ident)) //проверить, что идент. состоит только из цифр и букв
    { 
        $result = 'NO. UNKNOWN SYMBOLS IN INPUT, SR3 not comlited';  
    }

    if (preg_match_all('/\d+\D/', $ident) != 0)                    //проверить <идент>:=<идент><буква>
    {
        $result = 'NO. SR3 identifire := identifire-letter  not comlitied ';
    }
    header("Content-Type: text/plain"); 
    print $result; 
}

