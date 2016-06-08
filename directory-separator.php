<?php
PHP_OS == "Windows" || PHP_OS == "WINNT" ? define("SEPARATOR", "\\") : define("SEPARATOR", "/");
echo SEPARATOR;
echo DIRECTORY_SEPARATOR;