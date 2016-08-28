<?php
//@see http://php.net/manual/en/function.empty.php

// Returns FALSE if var exists and has a non-empty, non-zero value. Otherwise returns TRUE.

// The following things are considered to be empty:

// "" (an empty string)
// 0 (0 as an integer)
// 0.0 (0 as a float)
// "0" (0 as a string)
// NULL
// FALSE
// array() (an empty array)
// $var; (a variable declared, but without a value)

function _echo($msg){
	echo $msg;

	echo "\n";
}

$a = new \ArrayObject();

if(empty($a)){
	_echo( "empty array object is empty");
}else{
	_echo( "empty array object is NOT empty");
}

$b = [];

if(empty($b)){
	_echo( "empty array is empty");
}else{
	_echo( "empty array is NOT empty");
}

$c;

if(empty($c)){
	_echo( "declare but not assign is empty");
}else{
	_echo( "declare but not assign is NOT empty");
}

$d = null;

if(empty($d)){
	_echo("null is empty");
}else{
	_echo("null is NOT empty");
}

$f = false;

if(empty(false)){
	_echo("false is empty");
}else{
	_echo("false is NOT empty");
}