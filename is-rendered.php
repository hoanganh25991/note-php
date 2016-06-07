<?php

class Item{
	//for demo on inherit, let it public
	public $rendered;

	public function __construct(){
		$this->rendered = false;
	}

	public function render(){
		if($this->rendered){
			return;
		}
	}

	public function wrapRender(){
		if($this->rendered){
			return;
		}
		$this->render();
	}
}

class ItemX extends Item{
	public function render(){
		parent::render();
		echo "render runs\n";
	}
}

$itemX = new ItemX();

$itemX->rendered = true;
// $itemX->render();
$itemX->wrapRender();

$itemX->rendered = false;
// $itemX->render();
$itemX->wrapRender();

