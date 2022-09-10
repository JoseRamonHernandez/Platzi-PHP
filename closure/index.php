<?php

// Funciones anonimas
/*$greet = function ($name)   // variable que requiere lógica
{
    return "Hola, $name";
};

echo $greet('Ramón');*/

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hi, $name";
};

echo greet($en, 'Lynda');

?>