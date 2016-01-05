<?php

// 6. $str = "apple, orange, pear, banana"; if(is_string($str)) { $a = explode(",", $str); } what is the value of $a?

$str = "apple, orange, pear, banana";

if (is_string($str)) 
{ 
	$a = explode(",", $str); 
}

var_dump($a);

// A: $a is an array of Strings. $a[0] = "apple", $a[1] = " orange", $a[2] = " pear", $a[3] = " banana"


?>