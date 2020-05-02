<form action="" method="POST">
  <div class="form-window">
    <span class="form-name-marked">Ваше имя</span>
    <input class="form-feel" type="text" name="first_name" value="" autocomplete="off" /> <br />
  </div>

  <div class="form-window form-window_email">
    <span class="form-name-marked">Ваш email</span> 
    <input class="form-feel" type="text" name="email" value="" autocomplete="off" /> <br />
  </div>

  <div class="form-window form-window_country">
    <span class="form-name">Откуда вы?</span> 
    <select class="form-feel form-feel_select" type="text" name="country" autocomplete="off">
      <option>Россия</option>
      <option>Урюпинск</option>
    </select>
  </div>
    
  <div class="gender">
    <span class="gender-name">Ваш пол</span>
    <div class="gender-choice">
      <input type="radio" name="gender" id="men" value="МУЖСКОЙ" checked />
      <label for="men">
        <span>Мужской</span>
      </label>
    </div>
    <div class="gender-choice">
      <input type="radio" name="gender" id="women" value="ЖЕНСКИЙ" />
      <label for="women">
        <span>Женский</span>
      </label>
    </div> 
  </div>
  
  <div class="text-area">
    <span class="form-name-marked">Ваше сообщение</span> 
    <textarea class="form-feel form-feel_textarea" type="text" name="messege" value="" autocomplete="off"></textarea>
  </div>

  <div>
    <button class="button button_sent" type="submit"  >
      Отправить
    </button>  
  </div>

  <div>
    <a class="button_search" href="../web/feedbacks.php">Поиск анкеты</a>
  </div>
</form> 