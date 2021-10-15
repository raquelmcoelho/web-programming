<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php
            include "../lib.php";
            save("p2");
        ?>

        <form method="GET" action="p4.php">
            <br><img src="../assets/p3.jpg">
            <br><p>Um homem e meio come um leitão e meio em um minuto e meio. Quantos homens são necessários para comer 60 leitões em meia hora?</p>
            <br><input type="radio" name="p3" value="A" checked><?php echo $GLOBALS["question3"]["A"]?>
            <br><input type="radio" name="p3" value="B"><?php echo $GLOBALS["question3"]["B"]?>
            <br><input type="radio" name="p3" value="C"><?php echo $GLOBALS["question3"]["C"]?>
            <br><input type="radio" name="p3" value="D"><?php echo $GLOBALS["question3"]["D"]?>
            <br><input type="hidden" name="quizChoosen" value=<?php echo $_GET["quizChoosen"]?>>
            <br><input type="submit">
        </form>

    </body>
</html>