@ECHO OFF
SETLOCAL

SET sourcefile=screen

sass -r susy %sourcefile%.scss:../css/%sourcefile%.css --style compressed --unix-newlines -E UTF-8 --cache-location %TEMP%\sass


ENDLOCAL
