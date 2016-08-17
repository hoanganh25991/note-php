<?php
/*
≥ 90.0% A
< 90.0% B
< 75.0% C
< 65.0% D
< 50.0% F
*/
//1. if-else
$pointRanges = [
	[0.0, 50.0],
	[50.0, 65.0],
	[65.0, 75.0],
	[75.0, 90.0],
	[90.0, 100.0]
];

$pointTitles = [
	"F",
	"D",
	"C",
	"B",
	"A"
];

$point = readline("your point: ");

$title = "no title";

foreach($pointRanges as $index => &$pointRange){
	if($point >= $pointRange[0] && $point < $pointRange[1]){
		$title = $pointTitles[$index];
		break;
	}
}

echo $title;

function readline($prompt = null){
    if($prompt){
        echo $prompt;
    }
    $fp = fopen("php://stdin","r");
    $line = rtrim(fgets($fp, 1024));
    return $line;
}

//2. stair-table, loop loop util reach the maximum
$pointRanges2 = [50.0, 65.0, 75.0, 90.0, 100.0];
$pointTitles = [	"F",	"D",	"C",	"B",	"A"];
$maxLength = count($pointTitles);

$index = 0;

while($pointRanges2[$index] < $point && $index < $maxLength){
	//loop until
	//$point reach its maximum
	$index++;
}

$title = $pointTitles[$index];

echo $title;

