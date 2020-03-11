<?PHP
// çàäàíèÿ 1,2,3,5
// getGETParameter - ïîëó÷èòü ïàðàìåòð GetString
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// çàäàíèå 3
// valueRepeatSymbols - ïîëó÷èòü êîë-âî ïîâòîðÿþùèõñÿ ñèìâîëîâ â ñòðîêå
function valueRepeatSymbols(string $str): string
{
    $arrStr = str_split($str);                  // ïåðåâîä â ìàññèâ
    sort($arrStr);                              // ñîðòèðîâêà
    $sortStr = implode($arrStr);                // ïåðåâîä â ñòðîêó
    preg_match_all('/(.)\1+/', $sortStr, $num); // çàïèñü â ìàññèâ ïîâòîðÿþùèõñÿ ñèìâîëîâ
    $num = implode($num[0]);                    // ïåðåâîä â ñòðîêó
    return strlen($num);                        // äëèííà ñòðîêè ïîâò-ñÿ ñèìâîëîâ  
}


//  çàäàíèÿ 4,5
//  arraysMerge - äîáàâëÿåò ê ìàññèâó èç ôàéëà íåïóñòûå ýëåìåíòû ìàññèâà èç querystring
//  addDATAtoFILE - äîáàâëåíèå â ôàéë ìàññèâà
//  dataFromFILE - èçâëå÷åíèå èç ôàéëà ìàññèâà
//  ifKEYinSTRINGcheckVALUE - ôîðìàò-èå 'First Name' > 'first_name'; ïîèñê êëþ÷à â querystringa;
//  åñëè îí íàéäåí è åãî çíà÷åíèå íå ïóñòîå, òî âîçâðàò íîâoãî çíà÷åíèÿ, èíà÷å ïóñòîãî
function arraysMerge(array $fromFILE, array $fromGETstring): array
{
    $deletNullGETstring = array_diff($fromGETstring, array(''));       // óäàëåíèå èç ìàññèâà ýëåìåíòîâ ñ ïóñòûì çíà÷åíèåì 
    return $arrayResult = array_merge($fromFILE, $deletNullGETstring); 
     
}
 
function addDATAtoFILE(array $userData, string $fileAddres)
{
    $convertDATA = serialize($userData);    //  ñåðèàëèçàöèÿ ìàññèâà
    $fileFORdata = fopen($fileAddres, 'w');          
    fwrite($fileFORdata, $convertDATA);           
    fclose($fileFORdata);                       
}
                                                        
function dataFromFILE(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // àíñåðèàëèçàöèÿ                      
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
// formatKEYS - ôîðìàòèðóåò êëþ÷è ìàññèâà, çàòåì ïåðåçàïèñûâàåò èõ â ìàññèâ
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
