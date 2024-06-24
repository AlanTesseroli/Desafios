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
        $total = $_POST['totvalor'] ?? null;
        $sobra = $total;
        
        $cem = intdiv($sobra,100);
        $sobra = $sobra%100;

        $cinquenta = intdiv($sobra,50);
        $sobra = $sobra%50;

        $dez = intdiv($sobra,10);
        $sobra = $sobra%10;

        $cinco = intdiv($sobra,5);

    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="totvalor">Qual valor você deseja sacar? (R$)</label>
                <input type="number" name="totvalor" id="totvalor" value="<?=$total?>">
            
                <p>*Notas disponíveis: R$100, R$ 50, R$10 e R$5</p>
                <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <?php
            print "<h1>Saque de R$$sobra realizado</h1>"; 
            print "O caixa eletrônico vai te entregar as seguintes notas: ";
            print "<li> R$ 100,00 x $cem</li>";
            print "<li> R$ 50,00 x $cinquenta</li>";
            print "<li> R$ 10,00 x $dez</li>";
            print "<li> R$ 5,00 x $cinco</li>";
        ?>

    </section>

    
</body>
</html>