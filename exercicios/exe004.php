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
/*
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

echo"The biggest number is $bigger at position $biggerPos.";
echo"The smallest number is $smaller at position $smallerPos.";
*/


// D - Determinar, de uma sequência de valores lidos, o número de valores que são maiores que os seus dois vizinhos. Note que se devem excluir as extremidades. Exemplo: {8,2,4,1,6,12,5,9} São dois.


$num = [1, 3, 2, 5, 4, 6, 8, 7];
$bigger = $num[1];
$smaller = $num[1];
$counter = 0;

for($i = 1; $i < count($num)-1; $i++){
    if($num[$i] > $num[$i-1] && $num[$i] > $num[$i+1]){
        $counter++;
    }
}
echo"The number of values that are bigger than their two neighbors is $counter.";



?>
</body>
</html>