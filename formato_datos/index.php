<?php

//Dar formato a los datos ingresados....

// Alterar
$text = "<h1>PHP es UN LENGUAJE</h1>";
echo strtolower($text); //Convertir en minuscula;
echo "<br>";

echo strtoupper($text); //Convertir en mayusculas;
echo "<br>";

echo lcfirst($text); //Convierte el primer caracter en minuscula;
echo "<br>";

echo ucfirst($text); //Convierte el primer caracter en mayuscula;
echo "<br>";

//Reemplazar
$slog = str_replace(' ', '-', $text); //Reemplaza los espacion por un -
echo strtolower($slog);
echo "<br>";

// Modificación
$code = 39;
echo str_pad($code, 20, '#'); //Añade el caracter indicado las veces colocadas a la derecha
echo "<br>";

echo str_pad($code, 20, '#', STR_PAD_LEFT); //Añade el caracter indicado las veces colocadas a la izquierda
echo "<br>";

echo str_pad($code, 20, '#', STR_PAD_BOTH); //Añade el caracter indicado las veces colocadas a ambos lados
echo "<br>";

echo strip_tags($text); //Elimina etiqueta de html
echo "<br>";

$text2 = 'PHP es UN LENGUAje, año 2022, programación';
echo strtoupper($text2); // monobyte (Existe caracteres como el '`' y 'ñ' que no los reconocen)
echo "<br>";

echo mb_strtoupper($text2); // multibyte (Con este comando lograremos evitarlo)
echo "<br>";
?>