<?php 
include 'D:\aStudy\PHP\lw3\functions.php';
if (ifKEYinSTRINGcheckVALUE('email', '') != null)                                         
{   
    $key1 = 'First Name:';                           // $key - параметр данных пользователя               
    $key2 = 'Last Name:';
    $key3 = 'Year:';                   
    $keyMail = 'Email:';
    $valueMail = ifKEYinSTRINGcheckVALUE('email', '');                                            
    $value1 = '';                                    // $value - значение параметра $key
    $value2 = '';    
    $value3 = '';

    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';              
    if (file_exists($fileAddres))                                 // проверка существования такого  файла
    {
        $value1 = ifKEYinFILEcheckVALUE($key1, $fileAddres, $value1);
        $value2 = ifKEYinFILEcheckVALUE($key2, $fileAddres, $value2);
        $value3 = ifKEYinFILEcheckVALUE($key3, $fileAddres, $value3);
    }

    $newValue1 = ifKEYinSTRINGcheckVALUE($key1, $value1);            
    $newValue2 = ifKEYinSTRINGcheckVALUE($key2, $value2);
    $newValue3 = ifKEYinSTRINGcheckVALUE($key3, $value3);

    $newUserData = [$key1 => $newValue1, $key2 => $newValue2, $keyMail => $valueMail, $key3 => $newValue3];
    addDATAtoFILE($newUserData, $fileAddres);
    print_r($newUserData);
}
