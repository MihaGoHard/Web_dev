<?
function updateUserData() 
{      
    $email = getPOSTParameter('email');
    $firstName = getPOSTParameter('first_name');
    $country = getPOSTParameter('country');
    $gender = getPOSTParameter('gender');
    $messege = getPOSTParameter('messege');
    $formValidArr = [                     //массив для отображения ошибки в форме
              'first_name' => ['', 'red'], 
              'email' => ['', 'red'], 
              'gender' => '' , 
              'country' => '',
              'messege' => ['', 'red'],
              'sent' => ''
              ];
    $toFileArr = [                        //массив для записи в файл, массивы не зависят друг от друга                                            
              'first_name' => '',
              'email' => '',
              'gender' => '' ,
              'country' => '',
              'messege' => ''
              ];

    if (validateEmail($email) === 'empty' || validateEmail($email) === 'wrong input')
    {
        $formValidArr['email'] = [$email, 'red'];
    }
    if (validateEmail($email) === 'succes')
    {
        $formValidArr['email'] = [$email, ''];
        $toFileArr['email'] = $email;
    }
                 
    if (validateFirstName($firstName) === 'empty' || validateFirstName($firstName) === 'wrong input')
    {
        $formValidArr['first_name'] = [$firstName, 'red'];
    }        
    if (validateFirstName($firstName) === 'succes')
    {
        $formValidArr['first_name'] = [$firstName, ''];
        $toFileArr['first_name'] = $firstName;
    }

    if (validateSimpleField($messege) === 'succes')
    {
        $formValidArr['messege'] = [$messege, ''];
        $toFileArr['messege'] = $messege;
    }

    if (validateSimpleField($gender) === 'succes')
    {
        $formValidArr['gender'] = [$gender, ''];
        $toFileArr['gender'] = $gender; 
    }

    if (validateSimpleField($country) === 'succes')
    {
        $formValidArr['country'] = [$country => ''];
        $toFileArr['country'] = $country; 
    }

    if ($toFileArr['email'] != '' && $toFileArr['first_name'] != '' && $toFileArr['messege'] != '')
    {
        saveUserData($email, $toFileArr);
        $formValidArr = ['sent' => 'succes'];
    }
    renderTemplate('form.tpl.php', $formValidArr);
}    








