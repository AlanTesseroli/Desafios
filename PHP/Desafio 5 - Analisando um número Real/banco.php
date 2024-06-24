<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
            <?php
            $num = $_POST['valor'];
            $inteira = floor($num);
            $fracao = number_format($num, 3) - $inteira;
            echo "Analisando o número <strong>$num</strong> informado pelo usuário:";
            echo "<li>A parte inteira do número é <strong>$inteira</strong></li>";
            echo "<li>A parte fracionaria do número é <strong>$fracao</strong></p>"
            ?>

            <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>



</body>
</html>