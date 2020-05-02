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
        <? require_once('../src/common.inc.php'); ?>
        <? $_POST ? searchUserData() : formPage('feedback.tpl.php');?>
    </div>
  </body>    
</html>