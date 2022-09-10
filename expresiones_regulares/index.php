<?php
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/

$password = '123456';

// (/^)indica el principio de la instruccion
// ([])indica el tipo de caracter que queremos obtener 'patron'
// ({})indica la 'condicion', en este caso necesitamos tener de 6 a 9 digitos
// ($/)indica el fin de la instruccion
echo preg_match('/^[0-9]{6,9}$/', $password); // si se cumple todo nos arroja un '1' en caso contrario '0'
echo "<br>";

var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password)); // nos arroja en valores boleanos si se cumple o no la instruccion


?>