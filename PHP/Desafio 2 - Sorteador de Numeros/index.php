<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números Aleatórios</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <h1>Trabalhando com números aleatórios</h1>
                <h2>Exercicio 2 - Sorteador de numeros aletórios</h2>
            <?php
                echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
                $random = random_int(0,100) ?? " ";
                echo "O valor gerado foi $random";
            ?>
            <button onclick="javacript:document.location.reaload">Novamente</button>
    </section>
</body>
</html>