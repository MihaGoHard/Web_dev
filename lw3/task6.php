<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if (ifKEYinSTRINGreturnVALUE('email') != null)                                         
{                          
    $keys = ['First Name:', 'Last Name:', 'Email:', 'Age:', 'Birthday:', 'Town:', 'Best Result:', 'Kind Of Sport:'];          // ������ ����������
    $keysNumber = count($keys);
    $valueMail = ifKEYinSTRINGreturnVALUE('email');

    $stringUserData = [];
    $value = '';

    for  ($i = 0; $i < $keysNumber; $i++)
    {
         $value = ifKEYinSTRINGreturnVALUE($keys[$i]);                
         $stringUserData += [$keys[$i] => $value];                    // ��������� ������ ����������� � ���������� �� querystring
    }        

    $toFileData = $stringUserData;
    $fileAddres = 'D:\aStudy\PHP\lw3\data/'.$valueMail.'.txt';   
           
    if (file_exists($fileAddres))                                     // �������� ������������� ������  �����
    {
        $fileUserData = dataFromFILE($fileAddres);
        $toFileData = arraysMerge($fileUserData, $stringUserData);  // �������� � ������ �� ����� �������� �������� �� ������� query string       
    }

    addDATAtoFILE($toFileData, $fileAddres);
    print_r($toFileData);
}