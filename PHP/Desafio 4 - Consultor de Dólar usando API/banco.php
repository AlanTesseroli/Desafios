<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <h1>Resultado Final</h1>
    
        <section>
            <?php
                $valor = $_POST["valor"];
                $conversao = number_format($valor/5.4, 2);
                echo "<p>Seus R$ $valor  equivalem a U$ $conversao</p>";
                echo "<strong>*Cotação fixa de R$ 5,40</strong> informada diretamente no código"
            ?>
        <button onclick="javacript:history.go(-1)">Voltar</button>
        
        </section>

        
</body>
</html>