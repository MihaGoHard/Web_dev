<?PHP
echo'<div class="forms-block">
      <div class="forms-head">
        <img alt="netu"src="img/line-left.png" class="forms-img">
        <h4 class="forms-head-text">НАПИШИ МНЕ</h4>
        <img alt="netu"src="img/line-right.png" class="forms-img">
      </div>
    <FORM action="php/toFile.php" method="POST">
        <div class="form-window">
          <span class="form-name">
            Ваше имя
            <span class="form-name form-name_marker">*</span>
          </span> 
          <INPUT class="form-feel" type="text" name="first_name" value="" autocomplete="off" /> <br />
        </div>
        <div class="form-window form-window_email">
          <span class="form-name">
            Ваш email
            <span class="form-name form-name_marker">*</span>
          </span> 
          <input class="form-feel" type="text" name="email" value="" autocomplete="off" /> <br />
        </div>
        <div class="form-window form-window_country">
          <span class="form-name">
            Откуда вы?
          </span> 
          <select class="form-feel form-feel_select" type="text" name="country" autocomplete="off">
            <option>Россия</option>
            <option>Урюпинск</option>
          </select>
        </div>
        <div class="radio">
            <span class="radio-name">Ваш пол</span>
            <div class="radio-choice">
              <INPUT type="radio" name="radbut" value="МУЖСКОЙ" checked />
              <label>
                <span>Мужской</span>
              </label>
            </div>
            <div class="radio-choice">
              <INPUT type="radio" name="radbut" value="ЖЕНСКИЙ" />
              <label>
                <span>Женский</span>
              </label>
            </div> 
        </div>
        <div class="text-area">
          <span class="form-name">
            Ваше сообщение
            <span class="form-name form-name_marker">*</span>
          </span> 
          <textarea class="form-feel form-feel_textarea" type="text" name="massege" value="" autocomplete="off" ></textarea>
        </div>
        <div>
          <button class="button button_sent" type="submit">
            Отправить
          </button>  
        </div>
      </FORM>
    </div>';
?>
