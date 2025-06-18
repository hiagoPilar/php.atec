<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Desafio 02</h1>
    </header>

    <section>
        <h2>Número recebido:</h2>
        <p>
            <?php
                if (isset($_GET['numero'])) {
                    $numero = $_GET['numero'];
                    echo $numero;
                } else {
                    echo "Nenhum número recebido.";
                }
            ?>
        </p>
    </section>
</body>
</html>