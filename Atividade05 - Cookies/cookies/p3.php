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
            setcookie("p2", $_GET["p2"])
        ?>
        <form method="GET" action="p4.php">
            <p>Um homem e meio come um leitão e meio em um minuto e meio. Quantos homens são necessários para comer 60 leitões em meia hora?</p>
            <input type="radio" name="p3" value="A">A - 60 homens
            <input type="radio" name="p3" value="B">B - 2 homens
            <input type="radio" name="p3" value="C">c - 3 homens
            <input type="radio" name="p3" value="D">D - 1 homem com bastante fome

            <input type="submit">
        </form>
    </body>
</html>