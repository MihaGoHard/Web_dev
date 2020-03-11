<?php
$Y = 'par';
$i = 0;
while ($i !== 2)
{
$i = $i + 1;
}
$Y = $Y.$i;
print $Y;

    $key1 = 'First Name:';                           // $key - параметр данных пользователя               
    $key2 = 'Last Name:';
    $key3 = 'Year:';                   
    $keyMail = 'Email:';
    $valueMail = '100500';                                            
    $value1 = '';                                    // $value - значение параметра $key
    $value2 = '7';    
    $value3 = '4';

    $stringUserData = [$key1 => $value1, $key2 => $value2, $keyMail => $valueMail, $key3 => $value3];
          
    foreach ($stringUserData as $key => $value)
    {
        if ($stringUserData[$key] != null)
        {
            print $key.' '.$value.PHP_EOL;
        }
    }        
