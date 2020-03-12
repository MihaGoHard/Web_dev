<?PHP
// задания 1,2,3,4,5
// getGETParameter - получить параметр QueryString
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// задание 3
// valueRepeatSymbols - получить кол-во повторяющихся символов
function valueRepeatSymbols(string $str): string
{
    $arrStr = str_split($str);                  // перевод в массив
    sort($arrStr);                              // сортировка
    $sortStr = implode($arrStr);                // перевод в строку
    preg_match_all('/(.)\1+/', $sortStr, $num); // добавление в массив повторяющихся символов
    $num = implode($num[0]);                    // перевод в строку
    return strlen($num);                        // длинна строки  
}


//  задания 4,5
//  arraysMerge - добавляет к массиву из файла непустые элементы массива из querystring
//  addDATAtoFILE - сериализует массив, добавляет в файл
//  dataFromFILE - достаёт массив из файла, ансериализует
//  ifKEYinSTRINGcheckVALUE - формат. ключ 'First Name' > 'first_name'; ищет ключ querystring;
//  если найден, то возвращает значение
function arraysMerge(array $fromFILE, array $fromGETstring): array
{
    $deletNullGETstring = array_diff($fromGETstring, array(''));       // удаляет элемент с пустыми значениями из массива
    return $arrayResult = array_merge($fromFILE, $deletNullGETstring); 
     
}
 
function addDATAtoFILE(array $userData, string $fileAddres)
{
    $convertDATA = serialize($userData);    // сериализация 
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

// formatKEYS - форматирует все ключи массива 'first_name' > 'First Name:'
function formatKEYS(&$data)
        {
            unset($data[$key]);
            $data[$newKey] = $value;
        }
    }
}
