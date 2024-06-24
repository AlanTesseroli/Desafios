<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php
        $val1 = $_POST['valor1'] ?? null;
        $val2 = $_POST['valor2'] ?? null;
        $pes1 = $_POST['peso1'] ?? 1;
        $pes2 = $_POST['peso2'] ?? 1;

        $medaritsimples = ($val1+$val2)/2;
        $medaritponderada = number_format((($val1*$pes1)+($val2*$pes2))/($pes1+$pes2), 2);
    ?>

    <section>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor1">1º Valor</label>
                <input type="number" name="valor1" id="valor1" step="any" value="<?=$val1?>">
            <label for="peso1">1º Peso</label>
                <input type="number" name="peso1" id="peso1"  value="<?=$pes1?>">
            <label for="valor2">2º Valor</label>
                <input type="number" name="valor2" id="valor2"  value="<?=$val2?>">
            <label for="peso2">2º Peso</label>
                <input type="number" name="peso2" id="peso2" value="<?=$pes2?>">

            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <h1>Cálculo das Médias</h1>
        <?php
            print "Analisando os valores $val1 e $val2: ";
            print" 
                <p>A <strong>Média Aritmética Simples</strong> entre os valores $val1 e $val2 é igual a <strong>$medaritsimples</strong></p>
                <p>A <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a <strong>$medaritponderada</strong></p>
            </ul>";
        ?>

    </section>

</body>
</html>