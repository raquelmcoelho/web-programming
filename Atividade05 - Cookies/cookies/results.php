<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Resultados </title>
    </head>
    <body>
        <?php 
        include "../lib.php";

        setcookie("p5", $_GET["p5"]);

        function validate($myAnswer){
            if(isset($_COOKIE[$myAnswer])){ 
                return $_COOKIE[$myAnswer];
            } else { return "Inválido"; }
        }

        function checkAnswer($question){
            // checar se a resposta dada é a certa
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
                <td><?php echo $GLOBALS["p1"][validate("p1")]?></td>
                <td><?php echo $GLOBALS["p1"][$GLOBALS["answers"]["p1"]]?></td>
                <td><?php echo checkAnswer("p1")?></td>
            </tr>

            <tr>
                <td>2 - </td>
                <td><?php echo $GLOBALS["p2"][validate("p2")]?></td>
                <td><?php echo $GLOBALS["p2"][$GLOBALS["answers"]["p2"]]?></td>
                <td><?php echo checkAnswer("p2") ?></td>
            </tr>

            <tr>
                <td>3 - </td>
                <td><?php echo $GLOBALS["p3"][validate("p3")]?></td>
                <td><?php echo $GLOBALS["p3"][$GLOBALS["answers"]["p3"]]?></td>
                <td><?php echo checkAnswer("p3") ?></td>
            </tr>
            
            <tr>
                <td>4 - </td>
                <td><?php echo $GLOBALS["p4"][validate("p4")]?></td>
                <td><?php echo $GLOBALS["p4"][$GLOBALS["answers"]["p4"]]?></td>
                <td><?php echo checkAnswer("p4") ?></td>
            </tr>

            <tr>
                <td>5 - </td>
                <td><?php echo $GLOBALS["p5"][validate("p5")]?></td>
                <td><?php echo $GLOBALS["p5"][$GLOBALS["answers"]["p5"]]?></td>
                <td><?php echo checkAnswer("p5"); ?></td>
            </tr>
                <td><?php echo totalPoints() . " respostas certas!"; ?></td>
            </tr>
        </table>

        <button><a href="../index.html">Voltar</a></button>
    </body>
</html>