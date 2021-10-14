<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>4° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script type="text/javascript" src="../script.js"></script>
    </head>
    <body>
        <?php
            include "../lib.php";
            setcookie("p3", $_GET["p3"]);
        ?>

        <form method="GET" action="p5.php">
            <p>Quantos números nove existem de 0 a 100?</p>
            <input type="radio" name="p4" value="A"><?php echo $GLOBALS["p4"]["A"]?>
            <input type="radio" name="p4" value="B"><?php echo $GLOBALS["p4"]["B"]?>
            <input type="radio" name="p4" value="C"><?php echo $GLOBALS["p4"]["C"]?>
            <input type="radio" name="p4" value="D"><?php echo $GLOBALS["p4"]["D"]?>

            <input type="submit">
        </form>

        <img src="../assets/p4.jpg">
    </body>
</html>