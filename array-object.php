<?php
function fx($name){
	if(strlen($name) > 3){
		return true;
	}
	return false;
}
$users = array(array("minhasdfasdf", "status"), array("anh", "status"), array("khoa", "status"));

/**
 * new variable not referencet to $users
 * updata on $user, not updated back to $users
 */
foreach($users as $user){
	if(fx($user[0])){
		$user[1] = "updated";
		echo sprintf("%s has name length > 3", $user[0]);
	}
}
var_dump($users);

//the problem is that
//ANY CHANGE on $user NOT ASSOCIATED to $users

/**
 * ArrayObject
 */
$aoUsers = new ArrayObject($users);

foreach($aoUsers as $aoUser){
	if(fx($aoUser[0])){
		$aoUser[1] = "updated";
	}
}
var_dump($aoUsers);
