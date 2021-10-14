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
            setcookie("p3", $_GET["pergunta3"])
        ?>
        <form method="GET" action="p5.php">
            <p>Quantos números nove existem de 0 a 100?</p>
            <input type="radio" name="p4" value="A">A - 10 números
            <input type="radio" name="p4" value="B">B - 1 número
            <input type="radio" name="p4" value="C">c - 9 números
            <input type="radio" name="p4" value="D">D - 20 números

            <input type="submit">
        </form>
    </body>
</html>