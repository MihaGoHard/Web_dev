<?
function updateUserData() 
{                  
    $keys = ['First Name', 'Email', 'Country', 'Messege', 'Gender']; // параметры
    $data = [];
    $status = ['email' => 'mistace', 'name' => 'mistace', 'messege' => 'mistace'];

    foreach ($keys as $key)
    {
        $formatedKey = str_replace(' ', '_', strtolower($key));
        $data[$key . ':'] = getPOSTParameter($formatedKey);
    }
    
    if ((filter_var($data['Email:'], FILTER_VALIDATE_EMAIL) == '') || ($data['Email:'] === ''))
    {
        $status['email'] = 'mistace'; 
    }
    else
    {
        $status['email'] = 'ok';
        $email = $email = getPOSTParameter('email');
    }     

    if ((($data['First Name:'] != '') && (!preg_match_all('/^[a-zA-Z]+$/', $data['First Name:'])) || ($data['First Name:'] === '')))
    {
        $status['First Name:'] = 'mistace';
    }     
    else
    {
        $status['name'] = 'ok';
    }

    ($data['Messege:'] === '') ? $status['messege'] = 'mistace' : $status['messege'] = 'ok';
    
    if (($status['email'] === 'ok') && ($status['name'] === 'ok') && ($status['messege'] === 'ok'))
    { 
        $toFileData = $data;
        $fileAddres = "../src/user_data/" . strtolower($email) . ".txt";   
        
        if (file_exists($fileAddres))                                      // проверка существования такого файла
        {
            $fileUserData = getDataFromFile($fileAddres);
            $toFileData = joinArrays($fileUserData, $data);                // обновление файла данными из query string       
        }
        addDataToFile($toFileData, $fileAddres);
        $status = 'Отправлено';
    }  
    renderTemplate('form.tpl.php', [$status, $data]);
}
