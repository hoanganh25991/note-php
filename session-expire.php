<?php
session_start();
if(!isset($_SESSION["expried"])){
	$_SESSION["expried"] = time();
}
if(time() - $_SESSION["expried"] > 15){
	echo time();
	session_destroy();
    session_unset();
}