<?php
function searchUserData()
{
    $email = getPOSTParameter('email');
    if ($email) 
    {
        $pdo = database();
        $email = $pdo->quote($email);
        $response = $pdo->query("SELECT 
                                     1 
                                 FROM
                                     user_info
                                 WHERE 
                                     email = ${email}      
                               ");                     
        $response = $response->fetchAll();
         
        if ($response != null)
        { 
            $response = $pdo->query("SELECT 
                                        email,
                                        first_name,
                                        country,
                                        gender,
                                        messege
                                    FROM 
                                        user_info
                                    WHERE
                                        email = ${email}; 
                                    "); 
            $response = $response->fetch(PDO::FETCH_ASSOC);
            renderTemplate('feedback.tpl.php', $response);                                         
        }
        $pdo = null;
            
        if ($response == null)
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
