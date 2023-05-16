<?php
abstract class Person{
	abstract function sayHello();
}


class ZhangSan extends Person {
	public function sayHello(){
		echo "Hello I'am Zhang San.\n";
		return;
	}
}


$zhangsan = new ZhangSan();
$zhangsan->sayHello();
?>
