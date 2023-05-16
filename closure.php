<?php

$double = function($value) {
	return $value * 2;
};


$numbers = range(1,500);

$new_numbers = array_map($double, $numbers);

print implode(" ",$new_numbers);
print "\n";
?>
