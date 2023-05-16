<?php

namespace FPF_PHP;

class Person {
    
    const MONTH = 5;

	public $age;

	public function __construct(int $age = 0){
		$this->age = $age;
	}


	public function sayHello(string $name){
		echo $name . "\n";
	}
}

class Children extends Person {

    public static $address = "beijing";

    const YEAR = 2023;

	public function __construct(){
		parent::__construct(1);
	}

    public function __destruct(){
    	echo "__destruct \n";
    }

    public static function newChildren(int $age){
            $new = new static();
    	return $new;
    }


	public function sayHello(string $name, string $name2 = "name2"){
		echo "Hello " . $name . " " . $name2 . "\n";
    	echo $this->age. "\n";
    	echo self::$address."\n";
    	echo $this::$address."\n";
	}
}

// paramter will be ignore
$child = new Children();
$child->sayHello("Zhang san");
$child->sayHello("Zhang san", "LiSi");

//class path
echo Person::class."\n";
echo Children::class."\n";

//const 
echo Children::YEAR . "\n";
echo Children::MONTH . "\n";

$child2 = Children::newChildren(2);
$child2->sayHello("Zhang san");
$child2->sayHello("Zhang san", "LiSi");

var_dump($child2);

foreach($child2 as $key => $value){
        echo "$key $value \n";
}


?>
