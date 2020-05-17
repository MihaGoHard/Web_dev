<?php
function validateEmail(string $email):string
{
    if ($email != null)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) != '')
        {
            return 'succes'; 
        }
        else
        {
            return 'wrong input';
        }
    }
    else
    {
        return 'empty';
    }
}

function validateFirstName(string $firstName):string
{
    if ($firstName != null)
    {
        if (preg_match('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/u', $firstName))
        {
            return 'succes'; 
        }
        else
        {
            return 'wrong input';
        }
    }
    else
    {
        return 'empty';
    }
}

function validateSimpleField(string $value): string
{
    if ($value != null)
    {
        return 'succes';
    }
    else
    {
        return 'empty';
    }
}