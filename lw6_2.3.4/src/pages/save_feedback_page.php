<?
function updateUserData() 
{
    $email = getPOSTParameter('email');
    if ($email)                                         
    {                          
        $keys = ['First Name', 'Email', 'Country', 'Messege', 'Gender']; // параметры
        $data = [];

        foreach ($keys as $key)
        {
            $formatedKey = str_replace(' ', '_', strtolower($key));
            $data[$key . ':'] = getPOSTParameter($formatedKey);
        }

        $toFileData = $data;
        $fileAddres = "../src/user_data/" . strtolower($email) . ".txt";   
            
        if (file_exists($fileAddres))                                      // проверка существования такого файла
        {
            $fileUserData = getDataFromFile($fileAddres);
            $toFileData = joinArrays($fileUserData, $data);                // обновление файла данными из query string       
        }
        addDataToFile($toFileData, $fileAddres);
    }   
    renderTemplate('form.tpl.php', []);
}
