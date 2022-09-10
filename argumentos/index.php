<?php

// valores
function greet($name)
{
    return "hola, $name";
};

echo greet('Ramon');

// Referencias
$course = 'PHP';

function path(&$course) // Afectando a la varible de afuera
{
    $course = 'Laravel';
    echo $course; // Laravel
}

path($course);
echo "<br>";
echo $course; // Laravel

// Predeterminado
function greet2($name = 'JOSE RAMON')
{
    return "Hola, $name";
}

echo "<br>";
echo greet2();
echo "<br>";
echo greet2('Abel');

?>