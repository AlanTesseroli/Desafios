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
                $num = $_POST["numero"];
                $ante = $num - 1;
                $suce = $num + 1;
                echo "O número escolhido foi $num";
                echo "<p>O seu <em>antecessor</em> é $ante</p>";
                echo "<p>O seu <em>sucessor</em> é $suce</p>";
            ?>
        </section>
    
</body>
</html>