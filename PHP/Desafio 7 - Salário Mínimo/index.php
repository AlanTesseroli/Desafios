<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Minimo</title>
</head>
<body>
    <?php
        $valor = $_POST['salario'] ?? 0;
        $salariosminimos = intdiv($valor, 1412);
        $excesso = $valor - ($salariosminimos*1412)
    ?>

    <section>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$valor?>" step="any">
            <input type="submit" value="Calcular">
        </form>
    </section>    

    <section>
        <h2>Resutlado Final</h2>
            <?php 
                print "Quem recebe um salário de $valor ganha $salariosminimos salários minimos + R$ $excesso"
            ?>
    </section>

</body>
</html>