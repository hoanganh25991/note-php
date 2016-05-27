<?php

$a = new ArrayObject(["name" => "anh"]);
$b = $a;

//change on $a, not change on $b
$a["name"] = "minh";
var_dump($b);

//turn $a into object
$a->setFlags(ArrayObject::ARRAY_AS_PROPS);
$c = $a;

//change on $a, what happen on $c
$a->name = "khoa";
var_dump($c);