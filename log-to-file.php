<?php
fclose(STDIN);
fclose(STDOUT);
fclose(STDERR);
// $STDIN = fopen(__DIR__.'stdin.log', 'r');
$STDIN = fopen('stdin.log', 'r');
$STDOUT = fopen('stdout.log', 'wb');
$STDERR = fopen('error.log', 'wb');

//code sth
echo "hi, you can keep track these thing into file?";
echo "hi, you can keep track these thing into file?";
echo "hi, you can keep track these thing into file?";

//try put it to err
fwrite($STDERR, "OOpps, look like sth went wrong");