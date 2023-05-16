<?php
class Overloading {
	//给不可访问或者不存在的字段设置值时调用
	//有__set __get __isset __unset 等
	public function __set($name, $args){
		echo "name: $name, args:". $args ."\n";
	}

	public function __call($name, $args){
		echo "name: $name, args: ". implode(', ', $args) . "\n";
	}	

	public static function __callStatic($name, $args){
		echo "name: $name, args: ". implode(', ', $args) . "\n";
	}
}

$o = new Overloading();

//__set
echo $o->name=18;
//__call
echo $o->getName("A");
//__callStatic
echo $o::getAge("B");

?>
