<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php
            include "../lib.php";
            save("p4");
        ?>

        <form method="GET" action="results.php">
            <br><img src="../assets/p5.jpg">
            <br><p>Se a filha de Tereza é a filha da mãe da minha filha o que eu sou de Tereza?</p>
            <br><input type="radio" name="p5" value="A" checked><?php echo $GLOBALS["question5"]["A"]?>
            <br><input type="radio" name="p5" value="B"><?php echo $GLOBALS["question5"]["B"]?>
            <br><input type="radio" name="p5" value="C"><?php echo $GLOBALS["question5"]["C"]?>
            <br><input type="radio" name="p5" value="D"><?php echo $GLOBALS["question5"]["D"]?>
            <br><input type="hidden" name="quizChoosen" value=<?php echo $_GET["quizChoosen"]?>>
            <br><input type="submit">
        </form>

    </body>
</html>