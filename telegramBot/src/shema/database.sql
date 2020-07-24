USE heroku_eac8c10b5a4f27b;
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

mysql -u b762538bfdc7ec -p90516cda -h us-cdbr-east-02.cleardb.com
TRUNCATE TABLE chat_info;