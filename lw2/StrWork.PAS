UNIT StrWork;
INTERFACE
  FUNCTION GetQueryStringParameter(VAR Key: STRING): STRING;
IMPLEMENTATION
USES
  DOS;

  FUNCTION GetQueryStringParameter(VAR Key: STRING): STRING;
  VAR
    LenQs, LenQw, PosW, LenUnS, i: INTEGER;
    ReS, Qs: STRING;{значение функции}
  BEGIN
    IF length(Key) <> 0
    THEN
      BEGIN
        Key := Key + '=';
        Qs := GetEnv('QUERY_STRING');
        i := 0;
        LenQs := length(Qs); {ДЛИНА ВХ СТРОКИ}  
        LenQw := length(Key); {ДЛИНА КЛЮЧА}  
        PosW := POS(Key, Qs); {ПОЗИЦИЯ первого символа ключа во вх. строке}  
        {позиция ключа}   {маркер перед ключом}    {если ключ стоит в начале строки}
        IF (PosW <> 0) AND ((Qs[PosW - 1] = '&') OR (Qs[1] = Key[1]))
        THEN
          IF ((Qs[LenQs] = '=') AND ((PosW + LenQw - 1) = LenQs)) OR (Qs[PosW + LenQw] = '&') {проверка наличия значение после "="}
          THEN                                     
            ReS := ''  
          ELSE     
            BEGIN
              PosW := (POS (Key, Qs) + LenQw); { НОМЕР ПОЗИЦИИ ЭЛЕМЕНТА ПОСЛЕ ЗНАКА РАВНО}
              ReS := '';
              i := PosW - 1;  
              WHILE (Qs[i] <> '&') AND (i < length(Qs))   {ПОКА (i <> & или не конец вх строки) ДОБАВЛЯЕМ К ReS ПО ОДНОМУ СИМВОЛУ ИЗ Qs}
              DO
                BEGIN
                  inc(i);
                  IF Qs[i] <> '&'
                  THEN
                    ReS := ReS + Qs[i]
                END    
            END           
        ELSE
          ReS := ''
      END
    ELSE
      ReS := '';
    GetQueryStringParameter := ReS    {вывод результата в значение функции}
  END;

BEGIN
END.


                         

