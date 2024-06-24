<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando as Raízes de um Número</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php
        $num = $_POST['numero'] ?? null;
        $raizquadrada = number_format($num**0.5, 2);
        $raizcubica = number_format($num**(1/3), 2);
    ?>

    <section>
        <h1>Informe um número</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" value="<?=$num?>">
                <input type="submit" value="Enviar">
            </form>
    </section>    
    <section>
        <h2>Resultado Final</h2>
            <?php 
            print "<p>Analisando o <strong>número $num</strong></p>";
            print "<ul>
                <li>A sua raiz quadrada é <strong>$raizquadrada</strong></li><li>A sua raiz cúbica é <strong>$raizcubica</strong></li>
            </ul>";
            ?>
    </section>


</body>
</html>