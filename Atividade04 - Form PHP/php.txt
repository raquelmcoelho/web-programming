<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Resposta</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="script.js"></script>
    </head>

    <body>
        <p> 
        <br> De acordo com seu formulário podemos perceber que você <?PHP echo $_GET["nameUser"]; ?>
        <br> <?PHP echo $_GET["experiencia"]; ?> experiência com Piano
        </p>

        <button type="button"><a href="form.html"> Voltar </a></button>
    </body>
</hyml>