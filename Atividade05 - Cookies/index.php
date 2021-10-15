<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Quiz</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <br><h1>QUIZ DE LÓGICA</h1>
        <br><button><a href="quiz/p1.php?quizChoosen='cookies'" >Quiz com Cookies</a></button>
        <br><button><a href="quiz/p1.php?quizChoosen='sessions'" >Quiz com Sessions</a></button>
        <br>
        <?php 
            include "lib.php";
            echo "Sua sessão está assim agora => ";
            echo print_r($_SESSION); 
            echo "<br><br>  Seus cookies estão assim agora => " ;
            echo print_r($_COOKIE);
        ?>
    </body>
</html>