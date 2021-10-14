<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Resultados </title>
    </head>
    <body>
        <?php 
        setcookie("p5", $_GET["p5"])
        
        $answers = array("p1"=> "A", "p2"=> "B", "p3"=> "C", "p4"=> "D", "p5"=> "B")

        function validate(key){}
            if isset($_COOKIE[key]){
                return key
            } else { return "Inválido"}
        }

        function checkAnswer(question){
            // checar se a resposta dada é a certa
            if $_COOKIE[question] == $GLOBALS[$answers[question]]{
                return "Acertou"
            } else{ return "Errou" }
        }

        function totalPoints(){
            $total = 0
            foreach ($answers as $key => $value){
                if $answers[$value] == $_COOKIE[$value] {$total += 1}
            }    
            return $total
        }
        ?>

        <table>
            <tr>
                <th>Pergunta</th>
                <th>Resposta Correta</th>
                <th>Sua Resposta</th>
                <th>Resultado</th>
            </tr>

            <tr>
                <td>1 - </td>
                <td><?php echo $GLOBALS[validate('p1')]?></td>
                <td>5 anos</td>
                <td><?php echo $GLOBALS[checkAnswer("p1")] ?></td>
            </tr>

            <tr>
                <td>2 - </td>
                <td><?php echo $GLOBALS[validate('p2')]?></td>
                <td>12 quartos</td>
                <td><?php echo $GLOBALS[checkAnswer("p2")] ?></td>
            </tr>

            <tr>
                <td>3 - </td>
                <td><?php echo $GLOBALS[validate('p3')]?></td>
                <td>3 homens</td>
                <td><?php echo $GLOBALS[checkAnswer("p3")] ?></td>
            </tr>
            
            <tr>
                <td>4 - </td>
                <td><?php echo $GLOBALS[validate('p4')]?></td>
                <td>20 noves</td>
                <td><?php echo $GLOBALS[checkAnswer("p4")] ?></td>
            </tr>

            <tr>
                <td>5 - </td>
                <td><?php echo $GLOBALS[validate('p5')]?></td>
                <td>A própria ou o Cônjuge</td>
                <td><?php echo $GLOBALS[checkAnswer("p5")] ?></td>
            </tr>
                <td><?php echo $GLOBALS[totalPoints()]?></td>
            </tr
        </table>
    </body>
</html>