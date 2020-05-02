<?
function searchUserData()
{ 
    $email = getPOSTParameter('email');
    if ($email)
    {                                                                                                            
        $fileAddres = "../src/user_data/". $email . ".txt";
        if (file_exists($fileAddres))                           
        {
            $fileContent = getDataFromFile($fileAddres);                                                    //достаёт массив из файла
            $user_data = [];
            foreach ($fileContent as $key => $value)       
            {
                if ($key === 'Email:' || $key === 'First Name:' || $key === 'Country:' || $key === 'Gender:' || $key === 'Messege:')
                {      
                    ($key === 'First Name:') ? $key = 'Имя: ' : $key;
                    ($key === 'Email:') ? $key = 'Email: ' : $key;
                    ($key === 'Country:') ? $key = 'Страна: ' : $key;
                    ($key === 'Gender:') ? $key = 'Пол: ' : $key;
                    ($key === 'Messege:') ? $key = 'Сообщение: ' : $key;                        
                    $user_data[$key] = $value;  
                }  
            } 
            renderTemplate('feedback.tpl.php', $user_data);
        }
        else
        {  
            $user_data = ['Анкета пользователя не найдена', $email];    
            renderTemplate('feedback.tpl.php', $user_data);
        }
    }
    else
    {
        $user_data = ['Введите Email пользователя'];
        renderTemplate('feedback.tpl.php', $user_data);
    }
}  