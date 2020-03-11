<?PHP
// задани€ 1,2,3,5
// getGETParameter - получить параметр GetString
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// задание 3
// valueRepeatSymbols - получить кол-во повтор€ющихс€ символов в строке
function valueRepeatSymbols(string $str): string
{
    $arrStr = str_split($str);                  // перевод в массив
    sort($arrStr);                              // сортировка
    $sortStr = implode($arrStr);                // перевод в строку
    preg_match_all('/(.)\1+/', $sortStr, $num); // запись в массив повтор€ющихс€ символов
    $num = implode($num[0]);                    // перевод в строку
    return strlen($num);                        // длинна строки повт-с€ символов  
}


//  задани€ 4,5
//  arraysMerge - добавл€ет к массиву из файла непустые элементы массива из querystring
//  addDATAtoFILE - добавление в файл массива
//  dataFromFILE - извлечение из файла массива
//  ifKEYinSTRINGcheckVALUE - формат-ие 'First Name' > 'first_name'; поиск ключа в querystring;
//  если он найден и его значение не пустое, то возврат новoго значени€, иначе пустого
function arraysMerge(array $fromFILE, array $fromGETstring): array
{
    $deletNullGETstring = array_diff($fromGETstring, array(''));       // удаление из массива элементов с пустым значением 
    return $arrayResult = array_merge($fromFILE, $deletNullGETstring); 
     
}
 
function addDATAtoFILE(array $userData, string $fileAddres)
{
    $convertDATA = serialize($userData);    //  сериализаци€ массива
    $fileFORdata = fopen($fileAddres, 'w');          
    fwrite($fileFORdata, $convertDATA);           
    fclose($fileFORdata);                       
}
                                                        
function dataFromFILE(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ансериализаци€                      
    return $fileContent;
}

function ifKEYinSTRINGreturnVALUE(string $key): string       
{    
     $formatKey = str_replace(' ', '_', str_replace(':', '', strtolower($key))); // 'First Name:' => 'first_name' 
     $searchKey = $_GET[$formatKey];                                                        
     if ($searchKey != null)                                                          
     {
         return isset($searchKey) ? (string)$searchKey: null;                   
     }
     else
     {
         return $emptyVALUE = '';
     }
}


//7
// formatKEYS - форматирует ключи массива, затем перезаписывает их в массив
function formatKEYS(&$data)
{
    foreach ($data as $key => $value)
    {
        $newKey = ucwords(str_replace('_', ' ', $key.':')); // 'first_name' > 'First Name:'
        if ($newKey != $key)
        {
            unset($data[$key]);
            $data[$newKey] = $value;
        }
    }
}