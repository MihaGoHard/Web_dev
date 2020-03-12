PROGRAM KeyPar(INPUT, OUTPUT);
USES
  StrWork;
VAR
  First, Second, Third: STRING;    
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  First := 'first';
  Second := 'second';
  Third := 'third';
  WRITELN(First, GetQueryStringParameter(First));
  WRITELN(Second, GetQueryStringParameter(Second));
  WRITELN(Third, GetQueryStringParameter(Third))
END.





