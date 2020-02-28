UNIT StrWork;
INTERFACE
  FUNCTION GetQueryStringParameter(VAR Key: STRING): STRING;
IMPLEMENTATION
USES
  DOS;

  FUNCTION GetQueryStringParameter(VAR Key: STRING): STRING;
  VAR
    LenQs, LenQw, PosW, LenUnS, i: INTEGER;
    ReS, Qs: STRING;{çíà÷åíèå ôóíêöèè}
  BEGIN
    IF LENGTH(Key) <> 0
    THEN
      BEGIN
        Key := Key + '=';
        Qs := GetEnv('QUERY_STRING');
        i := 0;
        LenQs := LENGTH(Qs);   
        LenQw := LENGTH(Key);   
        PosW := POS(Key, Qs); 
        IF (PosW <> 0) AND ((Qs[PosW - 1] = '&') OR (Qs[1] = Key[1]))
        THEN
          IF ((Qs[LenQs] = '=') AND ((PosW + LenQw - 1) = LenQs)) OR (Qs[PosW + LenQw] = '&')
          THEN                                     
            ReS := ''  
          ELSE     
            BEGIN
              PosW := (POS (Key, Qs) + LenQw); 
              ReS := '';
              i := PosW - 1;  
              WHILE (Qs[i] <> '&') AND (i < LENGTH(Qs))   
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
    GetQueryStringParameter := ReS   
  END;

BEGIN
END.


                         

