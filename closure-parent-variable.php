<?php
$name = "anh";
$cbPrintName = function(){
	echo sprintf("chào bạn, %s", $name);
};
//in PHP, cbPrintName not see $name in his scope

//pass into by `use`
$cbPrintName = function() use($name){
	echo sprintf("chào bạn, %s", $name);
};