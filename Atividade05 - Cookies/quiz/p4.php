<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>4° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php
            include "../lib.php";
            save("p3");
        ?>

        <form method="GET" action="p5.php">
            <br><img src="../assets/p4.jpg">
            <br><p>Quantos números nove existem de 0 a 100?</p>
            <br><input type="radio" name="p4" value="A" checked><?php echo $GLOBALS["question4"]["A"]?>
            <br><input type="radio" name="p4" value="B"><?php echo $GLOBALS["question4"]["B"]?>
            <br><input type="radio" name="p4" value="C"><?php echo $GLOBALS["question4"]["C"]?>
            <br><input type="radio" name="p4" value="D"><?php echo $GLOBALS["question4"]["D"]?>
            <br><input type="hidden" name="quizChoosen" value=<?php echo $_GET["quizChoosen"]?>>
            <br><input type="submit">
        </form>

    </body>
</html>