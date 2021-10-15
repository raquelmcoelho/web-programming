<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Resultados </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <?php 
        include "../lib.php";
        save("p5");

        function validate($myAnswer){
            if($_GET["quizChoosen"] == "cookies"){
                if(isset($_COOKIE[$myAnswer])){ return $_COOKIE[$myAnswer];} 
            } 
            if($_GET["quizChoosen"] == "sessions"){ 
                if(isset($_SESSION[$myAnswer])){return $_SESSION[$myAnswer];}
            } 
            else { return "Inválido"; }
            
        }

        function checkAnswer($question){
            if(validate($question) == $GLOBALS["answers"][$question]){
                return "Acertou";
            } else { return "Errou"; }
        }

        function totalPoints(){
            $total = 0;
            foreach($GLOBALS["answers"] as $key => $value){
                if(validate($key) == $value) {
                    $total += 1;
                }
            }    
            return $total;
        }
        ?>
        
        <!-- TABELA RESULTADOS -->
        <table>
            <tr>
                <th>Pergunta</th>
                <th>Sua Resposta</th>
                <th>Resposta Correta</th>
                <th>Resultado</th>
            </tr>

            <tr>
                <td>1 - </td>
                <td><?php echo $GLOBALS["question1"][validate("p1")]?></td>
                <td><?php echo $GLOBALS["question1"][$GLOBALS["answers"]["p1"]]?></td>
                <td><?php echo checkAnswer("p1")?></td>
            </tr>

            <tr>
                <td>2 - </td>
                <td><?php echo $GLOBALS["question2"][validate("p2")]?></td>
                <td><?php echo $GLOBALS["question2"][$GLOBALS["answers"]["p2"]]?></td>
                <td><?php echo checkAnswer("p2") ?></td>
            </tr>

            <tr>
                <td>3 - </td>
                <td><?php echo $GLOBALS["question3"][validate("p3")]?></td>
                <td><?php echo $GLOBALS["question3"][$GLOBALS["answers"]["p3"]]?></td>
                <td><?php echo checkAnswer("p3") ?></td>
            </tr>
            
            <tr>
                <td>4 - </td>
                <td><?php echo $GLOBALS["question4"][validate("p4")]?></td>
                <td><?php echo $GLOBALS["question4"][$GLOBALS["answers"]["p4"]]?></td>
                <td><?php echo checkAnswer("p4") ?></td>
            </tr>

            <tr>
                <td>5 - </td>
                <td><?php echo $GLOBALS["question5"][validate("p5")]?></td>
                <td><?php echo $GLOBALS["question5"][$GLOBALS["answers"]["p5"]]?></td>
                <td><?php echo checkAnswer("p5"); ?></td>
            </tr>
                <td><?php echo totalPoints() . " respostas certas!"; ?></td>
            </tr>
        </table>

        <?php 
            clear()
        ?>

        <button><a href="../index.php">Voltar</a></button>
    </body>
</html>