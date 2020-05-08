<?
function searchUserData()
{ 
    $email = getPOSTParameter('email');
    if ($email)
    {                                                                                                            
        $fileAddres = "../src/user_data/". $email . ".txt";
        if (file_exists($fileAddres))                           
        {
            $fileContent = getDataFromFile($fileAddres); 
            renderTemplate('feedback.tpl.php', $fileContent);                                            
        }
        else
        {  
            $caution = ['Анкета пользователя не найдена'];    
            renderTemplate('feedback.tpl.php', $caution);
        }
    }
    else
    {
        $caution = ['Введите Email пользователя'];
        renderTemplate('feedback.tpl.php', $caution);
    }
}  