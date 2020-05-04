Расположение файлов
main/

  src/
    pages/
        form_page.php                   проверка типа запроса, подключение common.inc.php
        save_feedback_page.php          сохранение данных в файл, валидация
        feedbacks_list_page.php         поиск файла с именем, извлечение информации

    templates/
        main.tpl.php                    шаблон главной страницы
        feedbacks.tpl.php               шаблон страницы поиска

    utils/
        request.php                     обработка запроса
        template.php                    рендеринг шаблона
        file_exchange.php               операции с файлом
        validstion.php                  валидация полей 

    user_data/                          файл с сохранёнными данными

    common.inc.php                      подкючение файлов с функциями 
  web/
		css/
		images/
		Index.php                         
		feedbacks.php
README.md

