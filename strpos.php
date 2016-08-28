<?php

$url = "/var/www/html/fishco/api";
$lastSplash = substr($url, 0, strrpos($url, '/'));
// 
var_dump($lastSplash);

$path = "localhost:8000/products/2";

$nd  = "2";

echo strpos($path, $nd);

echo substr($path, 0, strpos($path, $nd)) . $nd;

$nd = "products";

echo strpos($path, $nd);

echo substr($path, 0, strpos($path, $nd)) . $nd;