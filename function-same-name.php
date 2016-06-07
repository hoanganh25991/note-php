<?php
/**
 * PHP NOT allow same function name
 * multiple paramter
 * > __call, overloading function
 * > default value
 */
class B{
	public function get(){
		return "hello, i'm an instance of B";
	}

}

class C{
	public function get(){
		return "hello, i'm an instance of C";
	}
}
class A{
	public function getName(C $names){
		foreach ($names as $name) {
			var_dump($name);
		}
	}

	public function getName(B $name){
		var_dump($name->get());
	}
}

$a = new A();
$a->getName(new B());
$a->getName(array("anh", "minh", "khoa"));
