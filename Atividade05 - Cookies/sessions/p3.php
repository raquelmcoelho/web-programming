<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script type="text/javascript" src="../script.js"></script>
    </head>
    <body>
        <?php
            include "../lib.php";
            $_SESSION["p2"] = $_GET["p2"];
        ?>

        <form method="GET" action="p4.php">
            <p>Um homem e meio come um leitão e meio em um minuto e meio. Quantos homens são necessários para comer 60 leitões em meia hora?</p>
            <input type="radio" name="p3" value="A"><?php echo $GLOBALS["p3"]["A"]?>
            <input type="radio" name="p3" value="B"><?php echo $GLOBALS["p3"]["B"]?>
            <input type="radio" name="p3" value="C"><?php echo $GLOBALS["p3"]["C"]?>
            <input type="radio" name="p3" value="D"><?php echo $GLOBALS["p3"]["D"]?>

            <input type="submit">
        </form>

        <img src="../assets/p3.jpg">
    </body>
</html>