<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
        
        <?php 
        $n = $_GET ["numero"];
        $num = $_GET ["numero"] - 1;
        $numero = $_GET["numero"] + 1;

        echo "O numero escolhido foi $n <br>";
        echo "O seu antecessor é $num <br>"; 
        echo "O seu sucessor é $numero <br>";
        
        ?>

        <input type="button" onclick="history.go(-1)" value="Voltar">
        
    </main>
    
</body>
</html>