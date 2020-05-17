<?php
require_once('utils/request.php');
require_once('utils/file_exchange.php');
require_once('utils/validation.php');

if (checkPostMethod())
{
    updateUserData();  
}
else
{ 
    echo json_encode('Wrong request from client');
}     

function updateUserData() 
{      
    $color = 'red';
    $email = getPOSTParameter('email');
    $firstName = getPOSTParameter('first_name');
    $country = getPOSTParameter('country');
    $gender = getPOSTParameter('gender');
    $messege = getPOSTParameter('messege');
    $formValidArr = [                     //массив для отображения ошибки в форме
              'first_name' => '', 
              'email' => '', 
              'gender' => '' , 
              'country' => '',
              'messege' => '',
              'status' => '',
              ];

    if (validateEmail($email) === 'empty' || validateEmail($email) === 'wrong input')
    {
        $formValidArr['email'] = $color;
    }
                 
    if (validateFirstName($firstName) === 'empty' || validateFirstName($firstName) === 'wrong input')
    {
        $formValidArr['first_name'] = $color;
    }        

    if (validateSimpleField($messege) === 'empty')
    {
        $formValidArr['messege'] = $color;
    }

    if ($formValidArr['email'] != $color && $formValidArr['first_name'] != $color && $formValidArr['messege'] != $color)
    {
        $toFileArr = [                                                                   
            'first_name' => $firstName,
            'email' => $email,
            'gender' => $gender,
            'country' => $country,
            'messege' => $messege
            ];
        saveUserData($email, $toFileArr);
        $formValidArr['status'] = 'succes';
    }
    echo json_encode($formValidArr);
}    
