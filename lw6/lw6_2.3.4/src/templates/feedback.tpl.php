<!DOCTYPE html>
<html lang="ru">
  <meta http-equiv="Cache-Control" content="no-cache">
  <head>
    <meta charset="UTF-8">
    <title>AnDzanDzan</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/buttons_fb.css">
    <link rel="stylesheet" href="css/main_fb.css">
    <link rel="stylesheet" href="css/forms-block_fb.css">
  </head>
  <body style="margin: 0">
    <div class="main"> 

      <div class="forms-block">
        <div class="forms-head">
          <img alt="netu"src="img/line-left.png" class="forms-img">
          <h1 class="forms-head-text">ПОИСК АНКЕТЫ</h1>
          <img alt="netu"src="img/line-right.png" class="forms-img">
        </div>

        <form method="POST">
          <div class="zapros">
            <div class="form-window form-window_email">
              <span class="form-name">
                email пользователя
                <span class="form-name form-name_marker">*</span>
              </span> 
              <input class="form-feel" type="text" name="email" value="" autocomplete="off" /> <br />
            </div>
            <div>
              <button class="button" type="submit">
                Найти анкету
              </button> 
              <a class="button button_search" href="../web/index.php">Вернуться на главную</a>
            </div> 
          </div>   
        </form>

        <? if ($args['email'] != null): ?>
          <div class="user-data">
            <span class="form-name">Данные пользователя</span>
            <ul class="list">
              <? foreach($args as $key => $value): ?>
                <li class="list-element">
                  <? if ($key === 'first_name')
                     {
                        echo 'Имя пользователя: ' . $value; 
                     }
                     if ($key === 'email')
                     {
                        echo 'Email: ' . $value; 
                     }
                     if ($key === 'gender')
                     {
                        echo 'Пол: ' . $value; 
                     }
                     if ($key === 'country')
                     {
                        echo 'Страна: ' . $value; 
                     }
                     if ($key === 'messege')
                     {
                        echo 'Сообщение: ' . $value; 
                     } ?>  
                </li>
              <? endforeach; ?>
            </ul> 
          </div>
        <? endif; ?>

        <? if ($args['email'] === null): ?>
          <span class="form-name form-name_mistace">
            <? ($args[0] === null) ? $args[0] = 'Введите Email пользователя' : null; ?>
            <? print_r($args[0]); ?>
            <span class="form-name form-name_marker">*</span>
          </span>
        <? endif; ?>
    </div>
  </body>    
</html>






