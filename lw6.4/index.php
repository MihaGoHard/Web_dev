<html lang="ru">
  <meta http-equiv="Cache-Control" content="no-cache">
  <head>
    <meta charset="UTF-8">
    <title>AnDzanDzan</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms-block.css">
  </head>
  <body style="margin: 0">
    <div class="main"> 

      <div class="forms-block">
        <div class="forms-head">
          <img alt="netu"src="img/line-left.png" class="forms-img">
          <h1 class="forms-head-text">ПОИСК АНКЕТЫ</h1>
          <img alt="netu"src="img/line-right.png" class="forms-img">
        </div>
        <FORM action="index.php" method="POST">
          <?php include_once ('php/form.php'); ?>  
        </FORM> 
      </div>  

      <div class="user-data">
        <span class="form-name">Данные пользователя</span>
        <ul class="list">
          <?php include_once ('php/searchFile.php'); ?>
        </ul> 
      </div>

    </div>
  </body>    
</html>