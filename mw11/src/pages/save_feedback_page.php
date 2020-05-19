<?php
function udateUsertData(array $userData)
{
    $pdo = database();

    $email = $pdo->quote($userData['email']);
    $first_name = $pdo->quote($userData['first_name']);
    $country = $pdo->quote($userData['country']);
    $gender = $pdo->quote($userData['gender']);
    $messege = $pdo->quote($userData['messege']);

    $response = $pdo->query("SELECT 
                                 email 
                             FROM
                                 user_info
                             WHERE 
                                 email = ${email}      
                            ");                     
    $response = $response->fetchAll();

    if ($response != null)
    {
        $pdo->query("UPDATE 
                         user_info
                     SET
                         first_name = ${first_name}, country = ${country}, gender = ${gender}, messege = ${messege} 
                     WHERE 
                         email = ${email}
                    ");                  
    }
    if ($response == null)
    {
        $pdo->query("INSERT INTO user_info(email, first_name, country, gender, messege)
                         VALUES
                             (${email}, ${first_name}, ${country}, ${gender}, ${messege});
                    ");                  
    }                            
    $pdo = null;                                                       
  }