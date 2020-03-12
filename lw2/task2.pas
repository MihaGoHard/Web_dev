PROGRAM Qftest2(INPUT, OUTPUT);
USES
  StrWork;
VAR
  Lt, Qr: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Lt := 'lanterns';
  Qr :=  GetQueryStringParameter(Lt);
  IF Qr = '1'
  THEN
    WRITELN('BY SEA');
  IF Qr = '2'
  THEN
    WRITELN('BY LAND');
  IF (Qr <> '1') AND (Qr <> '2')
  THEN
    WRITELN('GO HARD, SARAH')
END.
      