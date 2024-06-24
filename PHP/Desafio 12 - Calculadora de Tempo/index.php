<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $totalsegundos = $_POST['totsegundos'] ?? null;
        $semanas = intdiv($totalsegundos,604800);
        $dias = intdiv(($totalsegundos%($semanas*604800)),86400);
        $horas = intdiv($totalsegundos%(($semanas*604800)+($dias*86400)),3600);
        $minutos = intdiv($totalsegundos%(($semanas*604800)+($dias*86400)+($horas*3600)),60);
        $segundos = intdiv($totalsegundos%(($semanas*604800)+($dias*86400)+($horas*3600)+($minutos*60)),1);
    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="totsegundos">Qual é o total de segundos?</label>
                <input type="number" name="totsegundos" id="totsegundos" value="<?=$totalsegundos?>">
            
                <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h1>Totalizando tudo</h1>
        <?php 
            print "Analisando o valor que você digitou, <strong>$totalsegundos segundos</strong>, equivalem a um total de: ";
            print "<li> $semanas semanas</li>";
            print "<li> $dias dias</li>";
            print "<li> $horas horas</li>";
            print "<li> $minutos minutos</li>";
            print "<li> $segundos segundos</li>";
        ?>

    </section>

    
</body>
</html>