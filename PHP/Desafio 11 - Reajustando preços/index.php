<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejuste de Preços</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php
        $price = $_POST['precoproduto'] ?? null;
        $reajuste = $_POST['reajusteproduto'] ?? 0;
        $valorreajuste = $price + $price*$reajuste/100;
    ?>    
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="precoproduto">Preço do Produto (R$)</label>
                <input type="number" name="precoproduto" id="precoproduto" value="<?=$price?>">


            <label for="reajusteproduto">Qual será o percentual de reajuste? (<strong><span id="progresso">?</span></strong>)</label>
                <input type="range" name="reajusteproduto" id="reajusteproduto" min="0" max="100" step="1"  oninput="progressoRatio()" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </section>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            print "O produto que custava R$ $price com $reajuste % de aumento vai passar a custar R$ $valorreajuste a partir de agora.";
        ?>

    </section>

    <script>
        function progressoRatio() {
            progresso.innerText = reajusteproduto.value + '%';
        }
    </script>

</body>
</html>