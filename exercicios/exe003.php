<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File 03</title>
</head>
<body>

    <?php

    // A - Ler as notas de N alunos e calcular a média aritmética da turma. 
    /*
    echo"How many students are there in the classroom? ";
    $students = (int) fgets(STDIN);

    if($students <= 0){
        echo "Invalid number of students!";
        exit;
    }

    $total = 0;

    for($i = 1; $i <= $students; $i++){
        echo "Enter the grade of student $i: ";
        $grade = (float) fgets(STDIN);

        if($grade <= 0 || $grade > 10){
            echo"Invalid grade for student $i! Please enter a grade between 0 and 10. \n";
            $i--;
            continue;
        }

        $total += $grade;
    }

    $average = $total / $students;
    echo"The average grade of the class is: " . number_format($average, 2,) . "\n";
    */

    // B - Ler as notas de N alunos de uma turma e apresentar o total de negativas.
    /*
    echo"How many students are there in the classroom? ";
    $students = (int) fgets(STDIN);

    if($students <= 0){
        echo"Invalid nunber os students!";
        exit;
    }

    $negatives = 0;

    for($i = 1; $i <= $students; $i++){
        echo"Enter the grade of student $i: ";
        $grade = (float) fgets(STDIN);

        if($grade <0 || $grade > 20) {
            echo"Invalid grade fos student $i! Please enter a grande between 0 and 20. \n";
            $i--;
            continue;
        }

        if($grade <10){
            $negatives++;
        }
    }
    echo"The total number of negative grades is: $negatives\n";
    */

    // C - Apresentar todos os números pares entre X e Y. 
    /*
    echo"Enter the first number (X): ";
    $x = (int) fgets(STDIN);

    echo"Enter the second number (Y): ";
    $y = (int) fgets(STDIN);

    if($x > $y){
        echo"Invalid range! X should be less than or equal to Y.\n";
        exit;
    }

    $total = 0;
    for($i = $x; $i <= $y; $i++){
        if($i % 2 == 0){
            $total++;
        }
    }
    echo"The total number of even numbers between $x and $y is: $total\n";
    */

    // D - Ler números até ser inserido o número 0 e que permita calcular a soma e média de todos os números introduzidos. 
    /*
    $sum = 0;
    $count = 0;
    $flag = true;
    while($flag == true){
        echo"Enter a number or 0 to exit: ";
        $num = (int) fgets(STDIN);

        if($num == 0){
            $flag = false;
            break;
        }

        $sum += $num;
        $count++;
    }
    $average = 0;
    if($count > 0) {
        $average = $sum / $count;
    }
    echo"The sum of the numbers is: $sum \n";
    echo"The average of the numbers is: " . number_format($average, 2) . "\n";
    */

    // E - Determinar a percentagem dos N alunos de uma turma com idade superior a uma dada idade definida pelo utilizador. 
    /*
    echo"Enter the number of students in the class: ";
    $students = (int) fgets(STDIN);
    echo"Enter the age to compare: ";
    $age = (int) fgets(STDIN);

    $totalAge = 0;
    $count = 0;

    for($i = 1; $i <= $students; $i++){
        echo"Enter the age of student $i: ";
        $studentAge = (int) fgets(STDIN);
        if($studentAge > $age){
            $count++;
        }
    }
    if($students > 0){
        $percentage = ($count / $students) * 100;
        echo"The percentage of students older than $age is: " . number_format($percentage, 2) . "%\n";
    }
    */

    // F - Ler uma sequência de números inteiros até que sejam introduzidos 5 números ímpares e que mostre o maior número par. Se não tiver sido introduzido nenhum número par deve aparecer uma mensagem adequada. 
    /*
    $countOdd = 0;
    $maxEven = null;

    do{

        echo"Enter a number: ";
        $num = (int) fgets(STDIN);

        if($num % 2 != 0){
            $countOdd++;
        }else{
            $maxEven = ($maxEven === null || $num > $maxEven) ? $num : $maxEven;
        }

    }while($countOdd < 5);

    if($maxEven !== null){
        echo"The largest even number entered is: $maxEven\n";
    }else{
        echo"No even numbers were entered.\n";
    }
    */

    // G - Ler um número introduzido pelo utilizador, e imprimir a sequencia desde o numero 1 até ao próprio, e imprimir de forma inversa até ao numero 1 novamente, utilizando apenas a estrutura de repetição “for” um única vez. EXP: 123454321

    echo"Enter a number: ";
    $n = (int) fgets(STDIN);

    if($n <= 0){
        echo"Invalid number!";
        exit;
    }

    for($i = 1; $i <= $n; $i++){
        echo $i;
    }
    for($i = $n - 1; $i >= 1; $i--){
        echo $i;
    }
    
   ?>

</body>
</html>