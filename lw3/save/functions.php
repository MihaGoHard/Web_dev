<?PHP
// ������� 1,2,3,5
// getGETParameter - �������� �������� GetString
function getGETParameter(string $ident): string
{
    return isset($_GET[$ident]) ? (string)$_GET[$ident] : null;
}

// ������� 3
// valueRepeatSymbols - �������� ���-�� ������������� �������� � ������
function valueRepeatSymbols(string $str): string
{
    $arrStr = str_split($str);                  // ������� � ������
    sort($arrStr);                              // ����������
    $sortStr = implode($arrStr);                // ������� � ������
    preg_match_all('/(.)\1+/', $sortStr, $num); // ������ � ������ ������������� ��������
    $num = implode($num[0]);                    // ������� � ������
    return strlen($num);                        // ������ ������ ����-�� ��������  
}


//  ������� 4,5
//  arraysCompare - ��������� � ������� �� ����� �������� �������� ������� �� GETstring
//  addDATAtoFILE - ���������� � ���� �������
//  dataFromFILE - ���������� �� ����� �������
//  ifKEYinSTRINGcheckVALUE - ������-�� 'First Name' > 'first_name'; ����� ����� � querystring;
//  ���� �� ������ � ��� �������� �� ������, �� ������� ����� ��������, ����� �������
function arraysCompare(array $fromGETstring, array $fromFILE): array
{
    $deletNullGETstring = array_diff($fromGETstring, array(''));       // �������� ������ ��������� �������
    return $arrayResult = array_merge($fromFILE, $deletNullGETstring);        
}
 
function addDATAtoFILE(array $userData, string $fileAddres)
{
    $convertDATA = serialize($userData);    //  ������������ �������
    $fileFORdata = fopen($fileAddres, 'w');          
    fwrite($fileFORdata, $convertDATA);           
    fclose($fileFORdata);                       
}
                                                        
function dataFromFILE(string $fileUserData): array
{
    $fileContent = file_get_contents($fileUserData);                      
    $fileContent = unserialize($fileContent);         // ��������������                      
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
    $newKey = ucwords(str_replace('_', ' ', $key.':')); // �������� ����� �� ������, �������� :, ������� 1-� ����� � ���� �������
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
