<?php
header("Content-Type: text/plain");
include 'functions.php';
$ident = getGETParameter('identifire'); 
if ($ident)                  
{       
    if (ctype_alpha($ident[0]) && ctype_alnum($ident))
    {
        print 'YES';    
    }
    else
    {
        print 'NO';
    }
}

