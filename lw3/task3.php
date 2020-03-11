<?php                                                      	

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['password'] != null)                            // проверить наличие параметра в строке
{
    $parol = getGETParameter('password');
    $onlyNumLetters = 0;
    $repeats = 0;
    $parolLength = strlen($parol);
    $countNumbers = preg_match_all('/\\d/', $parol);       // поиск в строке цифры 
    $countBigLetters = preg_match_all('/[A-Z]/', $parol);  // кол-во букв в верхнем регистре
    $countSmallLetters = preg_match_all('/[a-z]/', $parol);// кол-во букв в нижнем регистре
    $onlyLetters = preg_match_all('/^[a-zA-Z]+$/', $parol);// если все буквы, то возвращает 1
    $onlyNumbers = preg_match_all('/^[0-9]+$/', $parol);   // если все цифры, то возвращает 1
    if (($onlyLetters = 1) or ($onlyNumbers = 1))
    {
        $onlyNumLetters = $parolLength;                    // либо все цифры, либо буквы
    }  
    $repeats = valueRepeatSymbols($parol);                 // длинна строки повт-ся символов
    $rel = 0 + 4*$parolLength + 4*$countNumbers + 2*$countBigLetters + 2*$countSmallLetters - $onlyNumLetters - $repeats;
    header("Content-Type: text/plain");
    print 'reliability of parol = '. $rel;
}
