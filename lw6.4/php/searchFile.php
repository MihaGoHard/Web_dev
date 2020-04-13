<?PHP
  include 'functions.php';  
  $email = getPOSTParameter('email');
  if ($email)
  {                                                                                                       
      $fileAddres = "../lw6.2.3/php/data/" . $email . ".txt" ;                    //данные берутся из файла(data) предыдущего задания
      if (file_exists($fileAddres))                           
      {
          $fileContent = getDataFromFile($fileAddres);              //достаёт массив из файла
          foreach ($fileContent as $key => $value)       
          {
              if($key === 'Email:')
              {
                  echo '<li class="list-element">';
                  echo 'Email: ' . $value; 
                  echo '</li>'; 
              }
              if($key === 'First Name:')
              { 
                  echo '<li class="list-element">';                     
                  echo 'Имя: ' . $value;             //печать
                  echo '</li>';
              }    
              if($key === 'Country:')
              {
                  echo '<li class="list-element">';                      
                  echo 'Страна: ' . $value;             //печать
                  echo '</li>';
              }    
              if($key === 'Messege:')
              {
                  echo '<li class="list-element">';
                  echo 'Сообщение: ' . $value;             //печать
                  echo '</li>';
              }    
              if($key === 'Gender:')
              {
                  echo '<li class="list-element">';
                  echo 'Пол: ' . $value;             //печать
                  echo '</li>';  
              }    

          }     
      }
      else
      {
          echo '<li class="list-element list-element_ahtung">';
          echo 'file not found';    
          echo '</li>';
      }
  }
  else
  {
      echo '<li class="list-element list-element_ahtung">';
      echo 'Введите Email пользователя';
      echo '</li>';
  }
?>

    




