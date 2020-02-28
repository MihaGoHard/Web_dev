PROGRAM Qftest3(INPUT, OUTPUT);
USES
  StrWork;
VAR
  Nm, Qp: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Nm := 'name';
  Qp := GetQueryStringParameter(Nm);
  IF Qp <> ''
  THEN
    WRITE('HELLO DEAR, ', Qp)
  ELSE
    WRITE('HELLO DEAR ANONIMUS')      
END.
