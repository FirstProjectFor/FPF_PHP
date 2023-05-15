<?php

class A {
	private $B;
	protected $C;
	public $D;

	function __construct(){
		$this->{1} = 1;
	}
	
	function sayHello(){
		echo "Hello \n";
	}
}

$a = new A();
$a->sayHello();

var_export($a);
var_dump($a);

//convert to array
var_export((array)$a);
var_dump((array)$a);
?>
