<?php
//check HTTP POST at 2 different types
//1. JSON (please remeber that JSON is a string)
//		{"passengers":[{"name":"Egor", "role":"pilot"},{"name":"DHH", "role":"2pilot"}]}
//2. urlencoded as GET
//		passengers%5B%5D%5Bname%5D=Egor&passengers%5B%5D%5Brole%5D=pilot&passengers%5B%5D%5Bname%5D=DHH&passengers%5B%5D%5Brole%5D=2pilot

$postContent = "no post params";

if(count($_POST) > 0){
	$postContent = var_export($_POST);
}

echo $postContent;


$payloadContent = "no payload from `php://input`";
$payload = @file_get_contents("php://input");
if($payload){
	$payloadContent = var_export($payload);
}

echo $payloadContent;


//x-www-urlencoded
/*
POST /http/post.php HTTP/1.1
Host: 128.199.237.219
Cache-Control: no-cache
Postman-Token: f3dcea24-bdc5-4d5b-d66f-f9549e0a90d5
Content-Type: application/x-www-form-urlencoded

passengers%5B%5D%5Bname%5D=Egor&passengers%5B%5D%5Brole%5D=pilot&passengers%5B%5D%5Bname%5D=DHH&passengers%5B%5D%5Brole%5D=2pilot
*/


//raw
/*
POST /http/post.php HTTP/1.1
Host: 128.199.237.219
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: ce0d0f0b-a567-b12a-9cc3-0590cee56b4b

{"passengers":[{"name":"Egor", "role":"pilot"},{"name":"DHH", "role":"2pilot"}]}
 */


//thuc su moi thu deu nam o phan BODY
//doi voi GET thi no nam o HEADER ^^

//$HTTP_RAW_POST_DATA
/*
we need it bcs in form-data, php://input
can not see the content of post from file
NOT GOOD
*/
var_dump("\$HTTP_RAW_POST_DATA");

var_dump($HTTP_RAW_POST_DATA);

$headers = getallheaders();
var_dump($headers);

var_dump($_SERVER);
























die;
