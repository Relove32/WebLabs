PROGRAM DearName(INPUT, OUTPUT);
USES
  DOS;
VAR
  Name: STRING;
  Position: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  Position := Pos('name=', Name);
  IF Position = 0
  THEN
    WRITELN('Hello, Anonymous!')
  ELSE
    BEGIN
      Delete(Name, 1, Position + Length('name'));
      WRITELN('Hello, dear ', Name, '!')
    END
END.