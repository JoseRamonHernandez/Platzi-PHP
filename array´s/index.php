<?php
/*
sort: Ordena un array.

rsort: Ordena un array en orden inverso.

ksort: Ordena un array por clave.

krsort: Ordena un array por clave en orden inverso.

array_slice: Extrae una parte de un array.

array_chunk: Divide un array en fragmentos.

array_shift: Quita un elemento del principio del array.

array_pop: Extrae el último elemento del final del array.

array_unshift: Añadir al inicio de un array uno a más elementos.

array_push: Inserta uno o más elementos al final de un array.

array_flip: Intercambia todas las claves de un array con sus valores asociados.
*/




/*-------------------------------Array Simple---------------------------------*/
$courses = [
    'JavaScript', 
    'Laravel',
    'PHP', 
    'Python'];

echo "<pre>";
var_dump($courses);


/*-------------------------------Array Complejos----------------------------------*/
$courses2 = [
    'frontend'=>'JavaScript', 
    'framework'=>'Laravel',
    'backend'=>'PHP', 
    ];

    echo "<pre>";
    var_dump($courses2);

    foreach($courses2 as $key => $value)
    {
        echo "$key: $value <br>";
    }

    echo "<br>";

    function upper($course)
    {
        echo strtoupper("Curso $course <br>");
    }
    array_walk($courses2, 'upper');
    
    echo "<br>";

 //  var_dump(array_key_exists('frontend', $courses2));
 //    var_dump(in_array('php', $courses2));


/*
* array_key_exists('frontend', $courses); condicion para saber si dentro del array existe una key llamada 'frontend'
* in_array('PHP', $courses2); condicion para saber si dentro del array colocado existe el dato mencionado
* array_keys($courses2);
* array_values($courses2);
*/


/*---------------------------------- -Funciones para Array--------------------------*/

$lang = ['python', 'java', 'php', 'c#', 'c++', 'Ruby'];
sort($lang); //ordena z-a () rsort en orden de a-z 

echo "<pre>";
var_dump($lang);

echo "<br>------------------------------------------------------";

$lang = [
    10=>'python', 
    100=>'java', 
    1000=>'php', 
    10000=>'c#', 
    100000=>'c++', 
    1000000=>'Ruby'];
ksort($lang); //ordena en orden a través de su key () krsort contrario

echo "<pre>";
var_dump($lang);

echo "<br>------------------------------------------------------";

$number = ['12', '40', '3', '24#', '1', '14'];
sort($number); //ordena 1-40 () rsort ordena 40-1 

echo "<pre>";
var_dump($number);

echo "<br>------------------------------------------------------";

var_dump(array_slice($number, 1));

echo "<br>------------------------------------------------------";

var_dump(array_chunk($number, 2));
?>