<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5° Pergunta</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script type="text/javascript" src="../script.js"></script>
    </head>
    <body>
        <?php
            include "../lib.php";
            $_SESSION["p4"] = $_GET["p4"]; 
        ?>

        <form method="GET" action="results.php">
            <p>Se a filha de Tereza é a filha da mãe da minha filha o que eu sou de Tereza?</p>
            <input type="radio" name="p5" value="A"><?php echo $GLOBALS["p5"]["A"]?>
            <input type="radio" name="p5" value="B"><?php echo $GLOBALS["p5"]["B"]?>
            <input type="radio" name="p5" value="C"><?php echo $GLOBALS["p5"]["C"]?>
            <input type="radio" name="p5" value="D"><?php echo $GLOBALS["p5"]["D"]?>

            <input type="submit">
        </form>

        <img src="../assets/p5.jpg">
    </body>
</html>