<?php
$items = array(
	array("id"=>1, "name" => "a"),
	array("id"=>2, "name" => "b"),
	array("id"=>3, "name" => "c"),
	array("id"=>4, "name" => "d"),
	array("id"=>5, "name" => "e"),
);

$checkedIds = array(1, 4, 5);

foreach ($items as &$item) {
	foreach ($checkedIds as $key => $id) {
		if($item["id"] == $id){
			//them thuoc tinh checked
			$item["checked"] = true;
			unset($checkedIds[$key]);
		}

	}
}

var_dump($items);