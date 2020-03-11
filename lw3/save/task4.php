<?php
FUNCTION getGETParameter(string $ident): string
{    
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

if ($_GET['email'] != null)
{
    $mailPar = getGETParameter('email');                       // проверка наличия mail
    if($mailPar != null)
    { 
        $addres = 'D:\aStudy\PHP\lw3\data/'.$mailPar.'.txt';  // создать путь к файлу, имя папки
        if (file_exists($addres))                              // проверить наличие такой анкеты
        {
            $f = file_get_contents($addres);                   // прочитать
            $f = unserialize($f);                              //ансериализация массива
            $fnValue = $f['First Name:'];                      //запись в переменную старого значения           
            $lnValue = $f['Last Name:'];    
            $ageValue = $f['Age:'];
        }       
            
        $fnKey = 'First Name:';                                // присвоение ключей массива
        $lnKey = 'Last Name:';                                 
        $emKey = 'Email:';
        $ageKey = 'Age:';
        $emValue = $mailPar;                                   // значение мэйл

        if ($_GET['first_name'] != null)                       // проверка наличия параметра
        {
            $fnPar = getGETParameter('first_name');            // вызов функции получения значения параметра 
            if (($fnPar != null) and ($fnPar != $fnValue))     // условия присвоения нового значения параметра
            {
                $fnValue = $fnPar;                             // присвоение нового значения параметра
            }
        }   
 
        if ($_GET['last_name'] != null)
        {
            $lnPar = getGETParameter('last_name');
            if (($lnPar != null) and ($lnPar != $lnValue))
            {
                $lnValue = $lnPar;
            }
        }

        if ($_GET['age'] != null)
        {
            $agePar = getGETParameter('age');
            if (($agePar != null) and ($agePar != $ageValue))
            {
                $ageValue = $agePar;
            }
        }

        $search = [$fnKey => $fnValue, $lnKey => $lnValue, $emKey => $emValue, $ageKey => $ageValue]; //  задать массив
        print_r($search);
        $searchSer = serialize($search);    //  сериализация массива
        $f = fopen($addres, 'w');           //  открыть файл для записи
        fwrite($f, $searchSer);             //  запись в файл сериализованного массива
        fclose($f);                         //  закрыть файл
        
    }
    else
    {
        print 'no mail';
    }
}   
