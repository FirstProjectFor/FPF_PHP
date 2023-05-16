<?php
class MagicClass {
	function __invoke($x){
		var_dump($x);
	}
}

$m = new MagicClass;
$m(100);
var_dump(is_callable($m));
?>
