<?php

include 'D:\aStudy\PHP\lw3\functions.php';

if ($_GET['text'] != null)                    // ��������� ������� ��������� � ������
{
    $text = getGETParameter('text');          // �������� ��������
    $reS = str_replace("%20", ' ', $text);    // �������� �� �������
    $reS = trim($reS);                        // ������� ������� � ������ � � �����
    $reS = preg_replace("/ +/", " ", $reS);   // ������� ������� ������
    header("Content-Type: text/plain");
    echo $reS;
}
