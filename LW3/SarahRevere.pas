PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  QS: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QS := GetEnv('QUERY_STRING');
  WRITELN(QS);
  IF QS = 'Lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF QS = 'Lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END.
