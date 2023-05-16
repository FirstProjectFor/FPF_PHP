<?php

function say_hello_1(){
	echo "Hello 1\n";
}

call_user_func("say_hello_1");

class CallBack {
	static function say_hello_2(){
		echo "Hello 2\n";
	}
	
	function say_hello_3(){
		echo "Hello 3\n";
	}

}

call_user_func(array("CallBack", "say_hello_2"));

$obj = new CallBack();

call_user_func(array($obj, "say_hello_2"));
call_user_func(array($obj, "say_hello_3"));

call_user_func("CallBack::say_hello_2");


class C {
	public function __invoke($name){
		echo "Hello $name \n";
	}
}

$c = new C();
call_user_func($c,"PHP");


?>
