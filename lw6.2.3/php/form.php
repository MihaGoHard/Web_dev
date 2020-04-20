<?php
$place = '<div class="form-window form-window_country">
            <span class="form-name">Откуда вы?</span>
            <select class="form-feel form-feel_select"  type="text" name="country" value="" autocomplete="off">';
$countries = ['Россия', 'Урюпинск', 'Кукуево', 'Спрингфилд', 'Чупакабра', 'Киргизия'];
foreach($countries as $key)
{
    $place = $place . "<option>" . $key . "</option><br>"; 
}
$place = $place . '<select>
                   </div>';

$gend = '<div class="gender">
            <span class="gender-name">Ваш пол</span>';
$radioPoint = ["men" => "Мужской" , "women" => "Женский"];
foreach($radioPoint as $key => $value)
{
    $checked = '';
    if($key === "men")
    {
        $checked = "checked";
    }
    $gend = $gend  . '<div class="gender-choice">
                      <input type="radio" name="gender" id=" ' . $key . ' " value=" ' . $value . ' " ' . $checked . '/>
                      <label for=" ' . $key .  ' ">
                        <span> ' . $value . ' </span>
                      </label>
                    </div>';                     
}
$gend = $gend . '</div>';

$button = '<div>
             <button class="button button_sent" type="submit">
               Отправить
             </button>  
           </div>';
            
$fields = [
    "first_name" => [
        "div-class" => "form-window",     
        "placeholder" => "Ваше имя",
        "teg" => "input",
        "input-class" => "form-feel",
        "value" => "",
        "close-teg" => "/>" 
    ],
    "email" => [
        "div-class" => "form-window form-window_email",     
        "placeholder" => "Ваш email",
        "teg" => "input",
        "input-class" => "form-feel",
        "value" => "",
        "close-teg" => "/>"
    ],
    "country" => [
        "choice" => $place
    ],
    "gender" => [
        "gend" => $gend
    ],
    "messege" => [
        "div-class" => "text-area",     
        "placeholder" => "Ваше сообщение",
        "teg" => "textarea",
        "input-class" => "form-feel form-feel_textarea",
        "value" => "",
        "close-teg" => "></textarea>"
    ],
    "send" => [
        "button" => $button
    ]
]; 
?>    
