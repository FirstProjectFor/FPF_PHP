<?php
namespace NN;

class Person {}


$cName= 'NN\Person';
$o = new $cName();
var_dump($o);

echo __NAMESPACE__. "\n";

$cName = __NAMESPACE__ . "\\Person";

var_dump($cName);

?>
