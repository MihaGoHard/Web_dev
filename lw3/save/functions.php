<?PHP
// задания 1,2,3,5
// getGETParameter - получить параметр GetString
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// задание 3
// valueRepeatSymbols - получить кол-во повторяющихся символов в строке
function valueRepeatSymbols(string $str): string
{
    $arrStr = str_split($str);                  // перевод в массив
    sort($arrStr);                              // сортировка
    $sortStr = implode($arrStr);                // перевод в строку
    preg_match_all('/(.)\1+/', $sortStr, $num); // запись в массив повторяющихся символов
    $num = implode($num[0]);                    // перевод в строку
    return strlen($num);                        // длинна строки повт-ся символов  
}


//  задания 4,5
//  arraysCompare - добавляет к массиву из файла непустые элементы массива из GETstring
//  addDATAtoFILE - добавление в файл массива
//  dataFromFILE - извлечение из файла массива
//  ifKEYinSTRINGcheckVALUE - формат-ие 'First Name' > 'first_name'; поиск ключа в querystring;
//  если он найден и его значение не пустое, то возврат новго значения, иначе старого
function arraysCompare(array $fromGETstring, array $fromFILE): array
{
    $deletNullGETstring = array_diff($fromGETstring, array(''));       // удаление пустых элементов массива
    return $arrayResult = array_merge($fromFILE, $deletNullGETstring);        
}
 
function addDATAtoFILE(array $userData, string $fileAddres)
{
    $convertDATA = serialize($userData);    //  сериализация массива
    $fileFORdata = fopen($fileAddres, 'w');          
    fwrite($fileFORdata, $convertDATA);           
    fclose($fileFORdata);                       
}
                                                        
function dataFromFILE(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализация                      
    return $fileContent;
}

function ifKEYinSTRINGcheckVALUE(string $key, string $oldValue): string       
{    
     $formatKey = str_replace(' ', '_', str_replace(':', '', strtolower($key))); // 'First Name:' => 'first_name'  
     $searchKey = $_GET[$formatKey];                                                        
     if ($searchKey != null)                                                          
     {
         $newValue = isset($searchKey) ? (string)$searchKey: null;                   
         if ($newValue != $oldValue)                                       
         {
               return $newValue; 
         }
         else
         {
               return $oldValue; 
         }
     }
     else
     {
         return $oldValue;
     }
}
//7
// formatKEYS
function formatKEYS(&$data)
{
  foreach ($data as $key => $value)
  {
    $newKey = ucwords(str_replace('_', ' ', $key.':')); // заменить черту на пробел, добавить :, поднять 1-е буквы в верх регистр
    if ($newKey != $key)
    {
      unset($data[$key]);
      $data[$newKey] = $value;
    }
   // if (is_array($value))
   // {
   //   ucfirstKeys($data[$key]);
   // }
  }
}
