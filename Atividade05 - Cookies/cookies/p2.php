<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>2° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script type="text/javascript" src="../script.js"></script>
    </head>
    <body>
        <?php
            include "../lib.php";
            setcookie("p1", $_GET["p1"]); 
        ?>

        <form method="GET" action="p3.php">
            <p> Quantos quartos são seis metades? </p>
            <input type="radio" name="p2" value="A"><?php echo $GLOBALS["p2"]["A"]?>
            <input type="radio" name="p2" value="B"><?php echo $GLOBALS["p2"]["B"]?>
            <input type="radio" name="p2" value="C"><?php echo $GLOBALS["p2"]["C"]?>
            <input type="radio" name="p2" value="D"><?php echo $GLOBALS["p2"]["D"]?>

            <input type="submit">
        </form>
        
        <img src="../assets/p2.jpg">
    </body>
</html>