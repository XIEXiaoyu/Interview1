<?php

// 4. $a = new DateTime(); $b = $a; $c = $b->add(new DateInterval("P1D")); what is the output of $a->format('Y-m-d'), $b->format('Y-m-d') and $c->format('Y-m-d')?
date_default_timezone_set('Singapore');

$a = new DateTime();
$b = $a;  // $b = clone $a;
$c = $b->add(new DateInterval("P1D"));

echo $a->format('Y-m-d'). "\n";
echo $b->format('Y-m-d'). "\n";
echo $c->format('Y-m-d'). "\n"; 

// A: Today is 2015.12.27. The output will be 2015-12-28. 2015-12-28. 2015-12-28. Why is it like this. This is the 语言特性 of PHP. Line 7 means that $a has another name of $b, but not copy the value of $a to $b, like in C language. Line 8, according to return value of the add(), it returns $b, and now $b has another name of $c, so $a is $b and is $c. If we want to copy $a to $b, we need to use $b = clone $a, then the result will be 2015-12-27, 2015-12-28, 2015-12-28. Good!!!

?>