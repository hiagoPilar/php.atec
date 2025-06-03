<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>

    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php 
            
            if(isset($_GET['random'])){
                $rand = rand(0, 100);
                echo "O valor gerado foi: <strong>$rand</strong>";
            } else {
                echo "CLique no botão abaixo para gerar um número aleatório.";
            }
        ?>

        <form method="get">
            <button type="submit" name="random">Gerar</button>
        </form>

    </main>
    
</body>
</html>