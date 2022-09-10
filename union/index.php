<?php

//Unir diferentes Array
$frontend = ['javascript'];
$backend = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontend, $backend));

/*---------------------------*/
$frontend = [
    'a'=>'javascript'
];

$backend = [
    'a'=>'php', 
    'b'=>'laravel'
];

echo "<br>----------------------------------------------";

echo "<pre>";
var_dump(array_merge_recursive($frontend, $backend));

$courses = ['javascript', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];

echo "<br>----------------------------------------------";

echo "<pre>";
var_dump(array_combine($categories, $courses));
?>