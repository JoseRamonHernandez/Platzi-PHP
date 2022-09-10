<?php
/*
echo 'Un texto de una línea 
varìas lineas 
comilla simple \' backslash \\ continuar con más texto 
$variable'; */

$name='jose';

echo "<br>mi nombre es $name";

echo '<br>mi nombre es '. $name;

$course = [
    'backend' =>[
        'PHP',
        'Laravel',
        'Python'
    ],
    'Frontend' =>[
        'HTML',
        'CSS'
    ]
];

echo "<br>{$course['Frontend'][1]}";

class User
{
    public $name1 = 'Jose';
    public $name2 = 'Ramon';
}

$user = new User;

echo "<br>$user->name1 $user->name2 quiere aprender {$course['backend'][0]}";

$teacher = 'italo';
$italo = 'Profesor de PHP';

echo "<br>$teacher es ${$teacher}";

function getTeacher(){
    return 'teacher';
}

$teacher = 'Italo';

echo "<br>${getTeacher()} enseña PHP";
?>