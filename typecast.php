<?php
$a = 10;
$b = "users";
$c = false;

$a = (string) $a;
$b = (int) $b; // This will convert the string "users" to 0
$c = (bool) $c; // This will convert true to 1
echo "Typecasted values:<br>";
echo "a: " . $a . " (type: " . gettype($a) . ")<br>";   
echo "b: " . $b . " (type: " . gettype($b) . ")<br>";
echo "c: " . $c . " (type: " . gettype($c) . ")<br>";   
echo "<br>";

?>