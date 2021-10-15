<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>2° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php
            include "../lib.php";
            save("p1");
        ?>

        <form method="GET" action="p3.php">
            <br><img src="../assets/p2.jpg">
            <br><p> Quantos quartos são seis metades? </p>
            <br><input type="radio" name="p2" value="A" checked><?php echo $GLOBALS["question2"]["A"]?>
            <br><input type="radio" name="p2" value="B"><?php echo $GLOBALS["question2"]["B"]?>
            <br><input type="radio" name="p2" value="C"><?php echo $GLOBALS["question2"]["C"]?>
            <br><input type="radio" name="p2" value="D"><?php echo $GLOBALS["question2"]["D"]?>
            <br><input type="hidden" name="quizChoosen" value=<?php echo $_GET["quizChoosen"]?>>
            <br><input type="submit">
        </form>
        
    </body>
</html>