<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando uma Divisão</title>
    <link rel="stylesheet" href="../../style/styledesafios.css">
</head>
<body>

        <?php
            $dividendo = $_POST['v1'] ?? 0;
            $divisor = $_POST['v2'] ?? 1;

            $resultadoint = intdiv($dividendo,$divisor);     
            $resto = $dividendo % $divisor;

         ?>


    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Dividendo</label><br>
            <input type="number" name="v1" id="v1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label><br>
            <input type="number" name="v2" id="v2" value="<?= $divisor?>">

            <input type="submit" value="Enviar">
        </form>
    </section>    

    <section>
        <h2>Estrutura da Divisão</h2>
            <?php
                print "$dividendo |<u>$divisor</u>";
                print "<br>$resto  $resultadoint";

                print "<p>Resto = $resto</p>";
                print "<p>Resultado = $resultadoint</p>";

            ?>


    </section>


</body>
</html>