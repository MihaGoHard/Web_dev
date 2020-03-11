<?php
FUNCTION getGETParameter(string $ident): string
{    
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

if ($_GET['email'] != null)
{
    $mailPar = getGETParameter('email');                       // �������� ������� mail
    if($mailPar != null)
    { 
        $addres = 'D:\aStudy\PHP\lw3\data/'.$mailPar.'.txt';  // ������� ���� � �����, ��� �����
        if (file_exists($addres))                              // ��������� ������� ����� ������
        {
            $f = file_get_contents($addres);                   // ���������
            $f = unserialize($f);                              //�������������� �������
            $fnValue = $f['First Name:'];                      //������ � ���������� ������� ��������           
            $lnValue = $f['Last Name:'];    
            $ageValue = $f['Age:'];
        }       
            
        $fnKey = 'First Name:';                                // ���������� ������ �������
        $lnKey = 'Last Name:';                                 
        $emKey = 'Email:';
        $ageKey = 'Age:';
        $emValue = $mailPar;                                   // �������� ����

        if ($_GET['first_name'] != null)                       // �������� ������� ���������
        {
            $fnPar = getGETParameter('first_name');            // ����� ������� ��������� �������� ��������� 
            if (($fnPar != null) and ($fnPar != $fnValue))     // ������� ���������� ������ �������� ���������
            {
                $fnValue = $fnPar;                             // ���������� ������ �������� ���������
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

        $search = [$fnKey => $fnValue, $lnKey => $lnValue, $emKey => $emValue, $ageKey => $ageValue]; //  ������ ������
        print_r($search);
        $searchSer = serialize($search);    //  ������������ �������
        $f = fopen($addres, 'w');           //  ������� ���� ��� ������
        fwrite($f, $searchSer);             //  ������ � ���� ���������������� �������
        fclose($f);                         //  ������� ����
        
    }
    else
    {
        print 'no mail';
    }
}   
