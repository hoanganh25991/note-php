<?php
/**
 * array(
 * 	"name" => array(
 * 		"0" => "hoanganh",
 * 		"1" => "minh",
 * 		"2" => "khoa",
 * 	),
 * 	"age" => array(
 * 		"0" => "25",
 * 		"1" => "24",
 * 		"2" => "26",
 * 	),
 * 	"job" => array(
 * 		"0" => "android",
 * 		"1" => "web-app,
 * 		"2" => "web",
 * 	),
 * )
 *
 * MAP INTO
 * array(
 * 	array("name" => "hoanganh,"age" => "25, "job" => "web-app"),
 * )
 */
 $data = array(
 	"name" => array(
 		"0" => "hoanganh",
 		"1" => "minh",
 		"2" => "khoa",
 	),
 	"age" => array(
 		"0" => "25",
 		"1" => "24",
 		"2" => "26",
 	),
 	"job" => array(
 		"0" => "android",
 		"1" => "web-app",
 		"2" => "web",
 	),
 );

 $map = array();
 foreach ($data as $key => $values) {
 	foreach ($values as $i => $value) {
 		$map[$i][$key] = $value;
 	}
 }

 var_dump($map);

 /**
  * note:
  * 1. solution not work well with java, other language
  * bcs, $map[$i] (still ref to $i  in $map)
  * then in later foreact, $i ref again to map "age" > "job"
  */