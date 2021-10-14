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
            setcookie("p1", $_GET["p1"])
        ?>

        <form method="GET" action="p3.php">
            <p> Quantos quartos são seis metades? </p>
            <input type="radio" name="p2" value="A">A - 24 quartos
            <input type="radio" name="p2" value="B">B - 12 quartos
            <input type="radio" name="p2" value="C">c - 4/6
            <input type="radio" name="p2" value="D">D - 3/12

            <input type="submit">
        </form>
        
    </body>
</html>