<?php

$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
var_dump(array_diff($wishes, $courses));

echo "<br>";

$arrayA = [1,2,3,4,5];
$arrayB = [3,4,5,6,7];

echo "<pre>";
var_dump(array_diff($arrayB, $arrayA)); //Diferencias respecto al orden que coloquemos.

echo "<br>";

//array_diff_key usa las key en vez de los valores;
?>