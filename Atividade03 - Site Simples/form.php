<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Resposta</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="script.js"></script>
    </head>

    <body>

    <?php
    $name = $_GET["nameUSER"]
    $experience = $_GET["experienceUser"]
    $color = $_GET["siteColor"]

    echo "De acordo com seu formulário podemos perceber que você $name" 
    echo "$experience experiência com Piano,"
    echo "e escolheu a cor $color para o site" 

    ?>
        <button type="button"><a href="form.html"> Voltar </a></button>
    </body>
</html>