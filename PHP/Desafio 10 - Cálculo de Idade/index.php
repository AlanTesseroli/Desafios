<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php
        $anoatual = date('Y');
        $nascimento = $_POST['anonascimento'] ?? null;
        $ano = $_POST['anoescolhido'] ?? null;
        $idade = $ano - $nascimento;
    ?>
    <section>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anonascimento">Em que ano você nasceu?</label>
                <input type="number" name="anonascimento" id="anonascimento" value="<?=$nascimento?>">
            <label for="ano">Quer saber a idade em que ano? (Atualmente estamos em <?=$anoatual?>)</label>
                <input type="number" name="anoescolhido" id="anoescolhido" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?="Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano!"?>
    </section>
</body>
</html>