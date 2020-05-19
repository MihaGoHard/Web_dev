<?php
function database(): PDO
{
    static $connection = null;
    if ($connection === null)
    {
      $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    }
    
    return $connection;
}

