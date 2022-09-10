<?php

$array1 = [1,2,3];
$total = array_sum($array1);

for($x=0; $x<count($array1); $x++)
{
    if ($array1[$x]%2!=0)
    {
        
        $total = $total - $array1[$x];
    }
}
echo $total;

echo "<br>-------------------------------------------------";


?>