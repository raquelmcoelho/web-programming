<?php
    session_start();

    function save($key){
        if($_GET["quizChoosen"] == "cookies"){
            setcookie($key, $_GET[$key]);  
        } 
        else { 
            $_SESSION[$key] = $_GET[$key];
        }

        echo "Sua sessão está assim agora => ";
        echo print_r($_SESSION); 
        echo "<br><br>  Seus cookies estão assim agora => " ;
        echo print_r($_COOKIE);
    }

    function clear(){
        session_destroy(); 
        setcookie("p1", null, -1);
        setcookie("p2", null, -1);
        setcookie("p3", null, -1);
        setcookie("p4", null, -1);
        setcookie("p5", null, -1);
    }

    $answers = array(
        "p1"=> "A", 
        "p2"=> "B", 
        "p3"=> "C", 
        "p4"=> "D", 
        "p5"=> "B"
    ); 

    $question1 = array(
        "Inválido" => "Inválido",
        "A" => "5 anos",
        "B" => "20 anos",
        "C" => "Nunca vai acontecer",
        "D" => "Já aconteceu, só que foi antes"
    );

    $question2 = array(
        "Inválido" => "Inválido",
        "A" => "24 quartos",
        "B" => "12 quartos",
        "C" => "4/6",
        "D" => "3/12"
    );

    $question3 = array(
        "Inválido" => "Inválido",
        "A" => "60 homens",
        "B" => "2 homens",
        "C" => "3 homens",
        "D" => "1 homem com bastante fome"
    );

    $question4 = array(
        "Inválido" => "Inválido",
        "A" => "10 números",
        "B" => "1 número",
        "C" => "9 números",
        "D" => "20 números"
    );

    $question5 = array(
        "Inválido" => "Inválido",
        "A" => "Avó",
        "B" => "Ela própria",
        "C" => "Filha",
        "D" => "Mãe"
    );
?>