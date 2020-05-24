CREATE DATABASE university;
USE university;
 
CREATE TABLE student      
(                                                   
    student_id               INT AUTO_INCREMENT NOT NULL,
    last_name                VARCHAR(255)       NOT NULL,
    name                     VARCHAR(255)       NOT NULL,
    middle_name              VARCHAR(255)       NOT NULL,
    date_of_birth            DATE               NOT NULL,
    group_id                 INT                NOT NULL,
    PRIMARY KEY (student_id)                                
) DEFAULT CHARACTER SET utf8mb4                     
  COLLATE `utf8mb4_unicode_ci`                      
  ENGINE = InnoDB                                   
;

CREATE TABLE groups
(                                                   
    group_id               INT AUTO_INCREMENT NOT NULL,
    group_name             VARCHAR(255)       NOT NULL,
    faculty_id             INT                NOT NULL,
    PRIMARY KEY (group_id)                                
) DEFAULT CHARACTER SET utf8mb4                     
  COLLATE `utf8mb4_unicode_ci`                      
  ENGINE = InnoDB                                   
;

CREATE TABLE faculty
(                                                   
    faculty_id               INT AUTO_INCREMENT NOT NULL,
    faculty_name             VARCHAR(255)       NOT NULL,
    PRIMARY KEY (faculty_id)                                
) DEFAULT CHARACTER SET utf8mb4                     
  COLLATE `utf8mb4_unicode_ci`                      
  ENGINE = InnoDB                                   
;

INSERT INTO student(last_name, name, middle_name, date_of_birth, group_id)
    VALUES 
        ('КАМЕНСКИХ', 'АННА', 'ДИМОНОВНА', '1998-03-20', 1),
        ('ЧЕРЕПАНОВА', 'МАРИНА', 'АНДРЕЕВНА', '1997-01-08', 2),
        ('СИВКОВА', 'ПОЛИНА', 'ВЛАДИМИРОВНА', '1997-04-22', 3),
        ('СУРОВА', 'ЕВГЕНИЯ', 'ОЛЕГОВНА', '1997-07-14', 4),
        ('КИСЕЛЕВА', 'ЮЛИЯ', 'НИКОЛАЕВНА', '1997-07-28', 5),
        ('ГУЛНАЗАРОВ', 'АКМУРАТ', 'АЛЛАБЕРДИЕВИЧ', '1998-01-19', 6),
        ('ВОЛКОВА', 'ДАРЬЯ', 'АНДРЕЕВНА', '1998-04-07', 7),
        ('КАРНАУХОВА', 'ВЕРОНИКА', 'МАКСИМОВНА', '1998-06-23', 8),
        ('ФОМИНЫХ', 'ЕЛИЗАВЕТА', 'АНДРЕЕВНА', '1998-07-07', 9),
        ('КОСТЕРОВ', 'ИВАН', 'АНДРЕЕВИЧ', '1998-11-18', 9),
        ('ФОФОНОВ', 'ЕГОР', 'АЛЕКСЕЕВИЧ', '1998-12-24', 8),
        ('ИВАНОВА', 'ДИАНА', 'АЛЕКСЕЕВНА', '1999-01-22', 7),
        ('НИКОЛАЕВА', 'АННА', 'АЛЕКСАНДРОВНА', '1999-02-10', 6),
        ('ПРЫТКОВ', 'ДАНИИЛ', 'ВАЛЕРЬЕВИЧ', '1999-03-31', 5),
        ('ИСАЕВ', 'АНДРЕЙ', 'ЕВГЕНЬЕВИЧ', '1999-05-11', 4),
        ('ЛАТФУЛИН', 'АРТЕМ', 'ЕВГЕНЬЕВИЧ', '1999-07-05', 3),
        ('КОРЯКОВЦЕВА', 'АННА', 'АЛЕКСЕЕВНА', '1999-07-30', 2),
        ('КИЧКИН', 'АНДРЕЙ', 'АЛЕКСАНДРОВИЧ', '1999-08-02', 1),
        ('ИВАНОВА', 'ПОЛИНА', 'ЛЕОНИДОВНА', '1999-11-10', 1),
        ('КУЗНЕЦОВА', 'ДИАНА', 'АЛЕКСЕЕВНА', '1999-12-06', 2),
        ('ВАСЮК', 'МАРИЯ', 'ЕВГЕНЬЕВНА', '2000-05-05', 3),
        ('ПОРОХИНА', 'ТАТЬЯНА', 'ИГОРЕВНА', '2000-06-07', 4),
        ('ОХОТНИКОВА', 'МАРИНА', 'ВЛАДИМИРОВНА', '2000-06-12', 5),
        ('СЕЙТМЕТОВ', 'ДОВРАН', 'КАДАМБАЕВИЧ', '2001-01-15', 6),
        ('МИХАЙЛОВА', 'АННА', 'АЛЕКСАНДРОВНА', '2001-02-07', 7),
        ('ДМИТРИЕВА', 'АНАСТАСИЯ', 'ВЛАДИМИРОВНА', '2001-04-09', 8),
        ('ЯКУНИНА', 'КСЕНИЯ', 'АЛЕКСАНДРОВНА', '2001-04-16', 9),
        ('КУЗЬМИНЫХ', 'КИРИЛЛ', 'СЕРГЕЕВИЧ', '2001-05-09', 1),
        ('МОШКИН', 'КИРИЛЛ', 'ДМИТРИЕВИЧ', '2001-07-26', 2),
        ('СЕМИНА', 'ЕЛЕНА', 'МАРКОВНА', '2001-08-22', 3),
        ('ЗЕЛЕНСКАЯ', 'ЛЮБОВЬ', 'АЛЕКСЕЕВНА', '2001-08-29', 4),
        ('МИХАЙЛОВ', 'АНДРЕЙ', 'ЮРЬЕВИЧ', '2002-02-04', 5),
        ('ПЕГУШИНА', 'ЕКАТЕРИНА', 'НИКОЛАЕВНА', '2002-02-14', 6),
        ('БУДРИН', 'КИРИЛЛ', 'АЛЕКСЕЕВИЧ', '2002-04-23', 7),
        ('ЕМЕЛЬЯНОВ', 'ДАНИИЛ', 'ГРИГОРЬЕВИЧ', '2002-08-23', 8),
        ('СВИЩЁВА', 'ЕВГЕНИЯ', 'СЕРГЕЕВНА', '2002-10-01', 9),
        ('КОНОВАЛОВ', 'ЛЕОНИД', 'СЕРГЕЕВИЧ', '2002-10-09', 9),
        ('ВЕРШИНИН', 'ИВАН', 'СЕРГЕЕВИЧ', '2002-10-23', 8),
        ('МИЛКОВА', 'ОЛЬГА', 'ДМИТРИЕВНА', '2002-12-17', 7),
        ('БОРИСОВА', 'АЛЕКСАНДРА', 'ВАСИЛЬЕВНА', '2003-04-10', 6),
        ('ИЛЬИНА', 'ИРИНА', 'РОДИОНОВНА', '2003-05-12', 5),
        ('САПАРОВА', 'СЕЛЬБИ', 'ТОЙЛИБАЕВНА', '2003-05-14', 4),
        ('ИВАНОВ', 'ДМИТРИЙ', 'СТЕПАНОВИЧ', '2003-06-26', 3),
        ('БИЛАН', 'ДМИТРИЙ', 'АНАТОЛЬЕВИЧ', '2003-10-09,', 2),
        ('КИРКОРОВ', 'ФИЛИПП', 'БЕДРОСОВИЧ', '2003-12-08', 1);

INSERT INTO groups(group_name, faculty_id)
    VALUES
        ('ПС-11', 1),
        ('ПС-12', 1),
        ('ИПС', 1),
        ('ЭиП-11', 2),
        ('ЭиП-12', 2),
        ('ЭиПC-11', 2),
        ('АО-11', 3),
        ('АО-12', 3),
        ('АОиС-11', 3);

INSERT INTO faculty(faculty_name)
    VALUES 
        ('ПРОГРАММНЫХ СИСТЕМ'),
        ('ЭКОНОМИКИ'),
        ('СТРОИТЕЛЬНЫЙ');

-- получение всех студентов в возрасте 19 лет относительно актуальной даты
SELECT 
    last_name AS "Фамилия",
    name AS "Имя",
    middle_name AS "Отчество",
    date_of_birth AS "Возраст: 19 лет"
FROM 
    student
WHERE 
    (date_of_birth > DATE_SUB(CURDATE(), INTERVAL 20 YEAR)) && (date_of_birth < DATE_SUB(CURDATE(), INTERVAL 19 YEAR));

-- получение всех студентов из конкретной группы.
SELECT
    last_name AS "Фамилия",
    name AS "Имя",
    middle_name AS "Отчество",
    group_name AS "Группа"
FROM
    student
INNER JOIN
    groups ON groups.group_id = student.group_id
WHERE
    group_name = 'АО-11';

-- получение всех студентов из конкретного факультета
SELECT
    last_name AS "Фамилия",
    name AS "Имя",
    middle_name AS "Отчество",
    faculty_name AS "Факультет"
FROM
    student
INNER JOIN
    groups ON groups.group_id = student.group_id
INNER JOIN
    faculty ON faculty.faculty_id = groups.faculty_id    
WHERE
    faculty_name = 'Экономики'; 

-- получение факультета и группы конкретного студента
SELECT
    last_name AS "Фамилия",
    name AS "Имя",
    middle_name AS "Отчество",
    faculty_name AS "Факультет",
    group_name AS "Группа"
FROM
    student
INNER JOIN
    groups ON groups.group_id = student.group_id
INNER JOIN
    faculty ON faculty.faculty_id = groups.faculty_id    
WHERE
    last_name = 'КИСЕЛЁВА' && name = 'ЮЛИЯ';