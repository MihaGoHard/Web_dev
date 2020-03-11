<?php                                                      	

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['password'] != null)                            // ��������� ������� ��������� � ������
{
    $parol = getGETParameter('password');
    $onlyNumLetters = 0;
    $repeats = 0;
    $parolLength = strlen($parol);
    $countNumbers = preg_match_all('/\\d/', $parol);       // ����� � ������ ����� 
    $countBigLetters = preg_match_all('/[A-Z]/', $parol);  // ���-�� ���� � ������� ��������
    $countSmallLetters = preg_match_all('/[a-z]/', $parol);// ���-�� ���� � ������ ��������
    $onlyLetters = preg_match_all('/^[a-zA-Z]+$/', $parol);// ���� ��� �����, �� ���������� 1
    $onlyNumbers = preg_match_all('/^[0-9]+$/', $parol);   // ���� ��� �����, �� ���������� 1
    if (($onlyLetters = 1) or ($onlyNumbers = 1))
    {
        $onlyNumLetters = $parolLength;                    // ���� ��� �����, ���� �����
    }  
    $repeats = valueRepeatSymbols($parol);                 // ������ ������ ����-�� ��������
    $rel = 0 + 4*$parolLength + 4*$countNumbers + 2*$countBigLetters + 2*$countSmallLetters - $onlyNumLetters - $repeats;
    header("Content-Type: text/plain");
    print 'reliability of parol = '. $rel;
}
