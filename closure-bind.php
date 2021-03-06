<?php
//public static Closure Closure::bind ( Closure $closure , object $newthis [, mixed $newscope = "static" ] )
//1. function/callback
//2. object
//3. class, static call

class A {
    private static $sfoo = 1;
    private $ifoo = 2;
}
$cl1 = static function() {
    return A::$sfoo;
};
$cl2 = function() {
    return $this->ifoo;
};

$bcl1 = Closure::bind($cl1, null, 'A');
$bcl2 = Closure::bind($cl2, new A(), 'A');
echo $bcl1(), "\n";
echo $bcl2(), "\n";

//result
//1
//2
?>