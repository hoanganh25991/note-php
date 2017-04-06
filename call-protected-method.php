<?php
class A {
	protected function sayHello($friend_name = '', $my_name = ''){
		$msg = "Hello $friend_name. ";
		$msg .= !empty($my_name) ? "I'm $my_name. " : '';
		
		echo $msg;
		
		return $this;
	}
	
	public static function __callStatic($method, $parameters){
        return (new static)->$method(...$parameters);
    }
}

A::sayHello('Minh', 'Anh')::sayHello();

$a = new A();
//$a->sayHello();