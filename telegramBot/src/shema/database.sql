USE heroku_;
CREATE TABLE chat_info
(
    main_id               INT AUTO_INCREMENT  NOT NULL,
    chat_id               INT                 NOT NULL,
    start_time            INT                 NOT NULL,
    subscribe_button      INT                 NOT NULL,
    describe_button       INT                 NOT NULL,
    time_button           INT                 NOT NULL,
    update_button         INT                 NOT NULL,
    PRIMARY KEY (main_id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE `utf8mb4_unicode_ci`
  ENGINE = InnoDB
;

mysql 
TRUNCATE TABLE ;