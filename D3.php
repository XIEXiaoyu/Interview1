<?php

// 3. what is the difference between isset($a['a']) and empty($a['a'])?

$a['a'] = 0;

// echo isset($a['a']) ."\n";

echo empty($a['a']). "\n";

// An: only when $a['a'] equals null or not declared, isset($a['a']) is null, or no matter it is 0 or not, isset($a['a']) is 1; while, empty($a['a']), as long as $a['a'] is 0, null or not declared, empty($a['a']) is 1;



?>