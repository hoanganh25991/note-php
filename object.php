<?php
/**
 * in PHP, $a is array, $b = $a
 * >>> deep-clone on $a to create $b
 */
$a = new ArrayObject(["name" => "origin"]);
$b = $a;

//change on $a, change on $b
$a["name"] = "changed";
var_dump($b);

//turn $a into ACT LIKE object
$a->setFlags(ArrayObject::ARRAY_AS_PROPS);

var_dump("\$a->name", $a->name);
var_dump("\$a['name']", $a["name"]);