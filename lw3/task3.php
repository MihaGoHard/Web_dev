<?php                                                      	
header("Content-Type: text/plain");
include 'functions.php';
$password = getGETParameter('password');
if ($password)                           
{
    $onlyNumLetters = 0;
    $repeats = 0;
    $passwordLength = strlen($password);
    $countNumbers = preg_match_all('/\\d/', $password);       // кол-во цифр 
    $countBigLetters = preg_match_all('/[A-Z]/', $password);  // кол-во больших букв
    $countSmallLetters = preg_match_all('/[a-z]/', $password);// колв-во маленьких букв
    $onlyLetters = preg_match_all('/^[a-zA-Z]+$/', $password);// если все буквы - 1
    $onlyNumbers = preg_match_all('/^[0-9]+$/', $password);   // если все цифры - 1
    if (($onlyLetters === 1) || ($onlyNumbers === 1))
    {
        $onlyNumLetters = $passwordLength;                    // если буквы в одном регистре
    }  
    $repeats = getRepeatsCount($password);                    // кол-во повторяющихся символов
    $rel = 0 + (4 * $passwordLength) + (4 * $countNumbers) + (2 * $countBigLetters) + (2 * $countSmallLetters) - $onlyNumLetters - $repeats;
    
    print 'Password Strength: ' . $rel;
}
