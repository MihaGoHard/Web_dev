<?php
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

if ($_GET['email'] != null)
{
    $mailPar = getGETParameter('email');                  // ��������� ������� mail � ������ �������
    if($mailPar != null)
    {
        $addres = 'D:\aStudy\PHP\lw3\data/'.$mailPar.'.txt';
        if (file_exists($addres))                          // ��������� ������� ������
        {
            $fileContent = file_get_contents($addres);   // ��������� ���������� �����
            $fileContent = unserialize($fileContent);              // �������������� �����������
            $keys = array_keys($fileContent);            // ��������� ������ �������
            $value1 = $f[$keys[0]];            // ��������� �������� ������� ������������ ������
            $value2 = $f[$keys[1]];
            $value3 = $f[$keys[2]];
            $value4 = $f[$keys[3]];
            $out = $keys[0].$value1.PHP_EOL.$keys[1].$value2.PHP_EOL.$keys[2].$value3.PHP_EOL.$keys[3].$value4.PHP_EOL;//������������ ������
            header("Content-Type: text/plain");
            echo $out; 
        }
    }
    else
    {
        print 'no mail';
    }
}