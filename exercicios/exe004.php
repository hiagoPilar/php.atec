<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 04</title>
</head>
<body>
    
<?php 

// A - Ler um vector de N números inteiros e escrevê-lo pala mesma ordem.
/*
$num = [1, 2, 3, 4, 5];
foreach ($num as $n){
    echo $n . " ";
}
*/

// B - Ler um vector de N e escrevê-lo pala ordem inversa.
/*
$num = [1,2,3,4,5];
for ($i = count($num) - 1; $i >= 0; $i--) {
    echo $num[$i] . " ";
}
*/


// C - Dado um vector de N números inteiros, determinar o maior e o menor elemento assim como as respectivas posições.

$num = [3, 1, 4, 1, 5, 9, 2, 6, 5];
$bigger = $num[0];
$smaller = $num[0];
$biggerPos = 0;
$smallerPos = 0;

foreach ($num as $index => $value){

    if($value > $bigger){
        $bigger = $value;
        $biggerPos = $index;
    }
    if($value < $smaller){
        $smaller = $value;
        $smallerPos = $index;
    }
}

echo"The biggest number is $bigger at position $biggerPos.<br>";
echo"The smallest number is $smaller at position $smallerPos.<br>";


?>
</body>
</html>