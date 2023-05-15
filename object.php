<?php

class A {
	private $B;
	protected $C;
	public $D;

	function __construct(){
		$this->{1} = 1;
	}
}


var_export((array) new A());
var_dump((array) new A());
?>
