<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>1° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php
            include "../lib.php";
        ?>

        <form method="GET" action="p2.php">
            <br><img src="../assets/p1.jpg">
            <br><p> Uma mãe tem 40 anos e o filho 10. Quantos anos devem se passar para que a idade da mãe seja três vezes maior que a do filho? </p>
            <br><input type="radio" name="p1" value="A" checked><?php echo $GLOBALS["question1"]["A"]?> 
            <br><input type="radio" name="p1" value="B"><?php echo $GLOBALS["question1"]["B"]?>
            <br><input type="radio" name="p1" value="C"><?php echo $GLOBALS["question1"]["C"]?>
            <br><input type="radio" name="p1" value="D"><?php echo $GLOBALS["question1"]["D"]?>
            <br><input type="hidden" name="quizChoosen" value=<?php echo $_GET["quizChoosen"]?>>
            <br><input type="submit">
        </form> 

        
    </body>
</html>