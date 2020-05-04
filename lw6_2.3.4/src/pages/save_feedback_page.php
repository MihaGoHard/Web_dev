<?
function updateUserData() 
{      
    $email = getPOSTParameter('email');
    $first_name = getPOSTParameter('first_name');
    $country = getPOSTParameter('country');
    $gender = getPOSTParameter('gender');
    $messege = getPOSTParameter('messege');
    $form_valid_arr = [                     //массив для отображения ошибки в форме
              'first_name' => ['', 'red'], 
              'email' => ['', 'red'], 
              'gender' => '' , 
              'country' => '',
              'messege' => ['', 'red'],
              'sent' => ''
              ];
    $to_file_arr = [                        //массив для записи в файл, массивы не зависят друг от друга                                            
              'first_name' => '',
              'email' => '',
              'gender' => '' ,
              'country' => '',
              'messege' => ''
              ];

    if (validateEmail($email) === 'empty' || validateEmail($email) === 'wrong input')
    {
        $form_valid_arr['email'] = [$email, 'red'];
    }
    if (validateEmail($email) === 'succes')
    {
        $form_valid_arr['email'] = [$email, ''];
        $to_file_arr['email'] = $email;
    }
                 
    if (validateFirstName($first_name) === 'empty' || validateFirstName($first_name) === 'wrong input')
    {
        $form_valid_arr['first_name'] = [$first_name, 'red'];
    }        
    if (validateFirstName($first_name) === 'succes')
    {
        $form_valid_arr['first_name'] = [$first_name, ''];
        $to_file_arr['first_name'] = $first_name;
    }

    if (validateSimpleField($messege) === 'succes')
    {
        $form_valid_arr['messege'] = [$messege, ''];
        $to_file_arr['messege'] = $messege;
    }

    if (validateSimpleField($gender) === 'succes')
    {
        $form_valid_arr['gender'] = [$gender, ''];
        $to_file_arr['gender'] = $gender; 
    }

    if (validateSimpleField($country) === 'succes')
    {
        $form_valid_arr['country'] = [$country => ''];
        $to_file_arr['country'] = $country; 
    }

    if ($to_file_arr['email'] != '' && $to_file_arr['first_name'] != '' && $to_file_arr['messege'] != '')
    {
        saveUserData($email, $to_file_arr);
        $form_valid_arr = ['sent' => 'succes'];
    }
    renderTemplate('form.tpl.php', $form_valid_arr);
}    








