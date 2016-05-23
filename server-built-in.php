<?php
/**
 * PHP version > 5.6 come with built-in server
 * right at project folder, run cmd
 */
/*
 * simple run, when in root has index.php/index.html
 */
echo "php -S 0.0.0.0:80080"
/*
 * simple run on file
 */
echo "php -S 0.0.0.0:8080 server-built-in.php"
/*
 * run in side a folder "public"
 * usually for framework
 */
echo "php -S 0.0.0.0:8080 -t public public/index.php"