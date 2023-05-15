<?php

// print "Hello PHP"
echo "Hello PHP\n";

// a string variable
$a_string = "Hello";
// a int variable
$a_int = 23;

//print new line
echo "\n";

// print varible definition
var_dump($a_string);
var_dump($a_int);
var_dump("a$a_int");

//a null variable
$a_null = null;


var_dump($a_null);

//an array
$names = array("zhangsan",11=>"lisi","aa"=>"wangwu");

echo $names[0];
echo $names[11];
echo $names["aa"];
var_dump($names);

//array set next value
$names[]="mazi";
var_dump($names);

//delete all elements
foreach($names as $index => $name){
    unset($names[$index]);
}

var_dump($names);

//set 13 => "13"
$names[] = "13";

var_dump($names);

//reindex
$names = array_values($names);

var_dump($names);

//
$names = ["name","zahngsan"];

[$name,$zhangsan] = $names;

echo $name,": ",$zhangsan,"\n";

// swap two variable
$a = 1;
$b = 2;
echo "a: ",$a," b: ",$b,"\n";

[$a,$b] = [$b,$a];

echo "a: ",$a," b: ",$b,"\n";
?>
