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
            include "../lib.php";
        ?>

        <form method="GET" action="p2.php">
            <p> Uma mãe tem 40 anos e o filho 10. Quantos anos devem se passar para que a idade da mãe seja três vezes maior que a do filho? </p>
            <input type="radio" name="p1" value="A"><?php echo $GLOBALS["p1"]["A"]?> 
            <input type="radio" name="p1" value="B"><?php echo $GLOBALS["p1"]["B"]?>
            <input type="radio" name="p1" value="C"><?php echo $GLOBALS["p1"]["C"]?>
            <input type="radio" name="p1" value="D"><?php echo $GLOBALS["p1"]["D"]?>

            <input type="submit">
        </form>

        <img src="../assets/p1.jpg">
    </body>
</html>