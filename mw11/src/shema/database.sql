CREATE DATABASE users_database;
USE users_database;
 
CREATE TABLE user_info      
(                                                   
    user_id                  INT AUTO_INCREMENT NOT NULL,
    email                    VARCHAR(255)       NOT NULL,
    first_name               VARCHAR(255)       NOT NULL,
    country                  VARCHAR(255)       NOT NULL,
    gender                   VARCHAR(255)       NOT NULL,
    messege                  VARCHAR(255)       NOT NULL,
    PRIMARY KEY (user_id)                                
) DEFAULT CHARACTER SET utf8mb4                     
  COLLATE `utf8mb4_unicode_ci`                      
  ENGINE = InnoDB                                   
;

CREATE USER 
    'user'@'localhost' IDENTIFIED BY '210483';
GRANT 
    SELECT, INDEX, UPDATE, INSERT  ON users_database.user_info TO 'user'@'localhost';
FLUSH PRIVILEGES;
