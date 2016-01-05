<?php

// 7. Please write down a simple PHP code to get the date for 1 year later from the current data.

date_default_timezone_set('Singapore');

$a = new DateTime();
$b = $a->add(new DateInterval("P1Y"));

echo $b->format('Y');


?>