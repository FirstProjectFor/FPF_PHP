<?php
$a = 10;

function print_a_1(){
	echo "a: $a\n";
}

function print_a_2(){
	global $a;
	echo "a: $a\n";
}


print_a_1();
print_a_2();
?>
