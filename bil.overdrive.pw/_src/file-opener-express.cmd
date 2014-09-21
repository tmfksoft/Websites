@echo off
if not "%1"=="" goto start
echo Usage: file-opener-express.cmd [filename] [arguments]
echo.
pause

:start
%1 %*
