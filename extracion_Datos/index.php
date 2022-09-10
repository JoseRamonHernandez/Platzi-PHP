<?php
/*
$data = 'Estudio PHP';

echo "$data[0]";

$post = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate necessitatibus veritatis deleniti, commodi atque illo ipsam, libero recusandae voluptatum iure animi illum, molestiae aperiam. Illo veritatis doloremque accusamus repellendus ullam?';
$extract = substr($post, 0, 22);

echo "<br>$extract... [ver más]";*/

/*

$data2 = 'JavaScript, PHP, Laravel'; //campo tags 
$tags = explode(', ', $data2); //se convierte en un array
echo "<pre>";
var_dump($tags);

*/

//$courses = ['JavaScript', 'PHP', 'Laravel'];

//echo implode(', ', $courses);

$course = "         Curso de PHP            ";
$course = trim($course); //Eliminar espacios l (left) r (right) antes de trim
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
?>