<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>1° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script type="text/javascript" src="../script.js"></script>
    </head>
    <body>
        <?php
            setcookie("p4", $_GET["p4"])
        ?>

        <form method="GET" action="results.php">
            <p>Se a filha de Tereza é a filha da mãe da minha filha o que eu sou de Tereza?</p>
            <input type="radio" name="p5" value="A">A - Avó
            <input type="radio" name="p5" value="B">B - Ela própria
            <input type="radio" name="p5" value="C">c - Filha
            <input type="radio" name="p5" value="D">D - Mãe

            <input type="submit">
        </form>
    </body>
</html>