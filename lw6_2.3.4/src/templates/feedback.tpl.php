<form method="POST">
  <div class="zapros">
    <div class="form-window form-window_email">
      <span class="form-name">
        email пользователя
        <span class="form-name form-name_marker">*</span>
      </span> 
      <input class="form-feel" type="text" name="email" value="<? ($args['Email: '] != null) ? print $args['Email: '] : print_r($args[1]); ?>" autocomplete="off" /> <br />
    </div>
    <div>
      <button class="button button_email" type="submit">
        Найти анкету
      </button> 
      <a class="button_search" href="../web/index.php">Вернуться на главную</a>
    </div> 
  </div>   
</form>

<? if ($args['Email: '] != null): ?>
  <div class="user-data">
    <span class="form-name">Данные пользователя</span>
    <ul class="list">
      <? foreach($args as $key => $value): ?>
        <li class="list-element">
          <? echo $key . $value; ?>
        </li>
      <? endforeach; ?>
    </ul> 
  </div>
<? endif; ?>

<? if ($args['Email: '] === null): ?>
  <span class="form-name form-name_mistace">
    <? ($args[0] === null) ? $args[0] = 'Введите Email пользователя' : null; ?>
    <? print_r($args[0]); ?>
    <span class="form-name form-name_marker">*</span>
  </span>
<? endif; ?>






