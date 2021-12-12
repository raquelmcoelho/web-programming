<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>S.R.A.T Quiz - Logic</title>
    <link rel="stylesheet" type="text/css" href="css/styleQuiz.css" />
</head>

<body>
    <?php  
        include "lib.php"; 
        if(!isset($_SESSION['username'])){ echo "<script> window.location.href = 'index.php'; </script>" ;}
    ?>
    <div id="background">
        <h4 id='timer'>00:00:00</h4>
        <div id="circle"><br><img id='icon-game' src='img/user-icon.png' width='50' height='50'></div>
        <img src="img/backgroundprog.png" id="background" alt="">
        <h3 id="nome"><?php  if(isset($_SESSION['username'])){echo $_SESSION['username'];} else { echo "Usuário";} ?>
        </h3><br>
        <h3 id="pont1">Pontuação</h3>
        <h1 id="pont2">0/5</h1>
        <a href="index.php"><input type="button" value="Sair" id="btn1" onclick="clearInterval(myTimerInterval)";></a><br>
    </div>

    <div id="navi">
        <h1>Quiz - Logic</h1>
    </div>
    <div id="questions">
        <div class="question" data-correct=0 data-question=0>
            <div class="top">
                <div class="bar-none"></div>
                <span class="number">1. A resposta que não é a resposta de nenhuma outra questão é</span>
            </div>
            <div class="bottom">
                <ul>
                    <li data-question=0 data-alternative=0 data-state=0>
                        <span class="alternative">A.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">A</span>
                    </li>
                    <li data-question=0 data-alternative=1 data-state=0>
                        <span class="alternative">B.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">B</span>
                    </li>
                    <li data-question=0 data-alternative=2 data-state=0>
                        <span class="alternative">C.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">C</span>
                    </li>
                    <li data-question=0 data-alternative=3 data-state=0>
                        <span class="alternative">D.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">D</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="question" data-correct=0 data-question=1>
            <div class="top">
                <div class="bar-none"></div>
                <span class="number">2. É a única questão com a mesma resposta que esta questão</span>
            </div>
            <div class="bottom">
                <ul>
                    <li data-question=1 data-alternative=0 data-state=0>
                        <span class="alternative">A.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">3</span>
                    </li>
                    <li data-question=1 data-alternative=1 data-state=0>
                        <span class="alternative">B.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">1</span>
                    </li>
                    <li data-question=1 data-alternative=2 data-state=0>
                        <span class="alternative">C.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">5</span>
                    </li>
                    <li data-question=1 data-alternative=3 data-state=0>
                        <span class="alternative">D.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">4</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="question" data-correct=0 data-question=2>
            <div class="top">
                <div class="bar-none"></div>
                <span class="number">3. É a resposta da questão número 5</span>
            </div>
            <div class="bottom">
                <ul>
                    <li data-question=2 data-alternative=0 data-state=0>
                        <span class="alternative">A.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">B</span>
                    </li>
                    <li data-question=2 data-alternative=1 data-state=0>
                        <span class="alternative">B.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">D</span>
                    </li>
                    <li data-question=2 data-alternative=2 data-state=0>
                        <span class="alternative">C.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">A</span>
                    </li>
                    <li data-question=2 data-alternative=3 data-state=0>
                        <span class="alternative">D.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">C</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="question" data-correct=0 data-question=3>
            <div class="top">
                <div class="bar-none"></div>
                <span class="number">4. É a primeira questão cuja resposta é a letra A</span>
            </div>
            <div class="bottom">
                <ul>
                    <li data-question=3 data-alternative=0 data-state=0>
                        <span class="alternative">A.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">2</span>
                    </li>
                    <li data-question=3 data-alternative=1 data-state=0>
                        <span class="alternative">B.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">3</span>
                    </li>
                    <li data-question=3 data-alternative=2 data-state=0>
                        <span class="alternative">C.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">4</span>
                    </li>
                    <li data-question=3 data-alternative=3 data-state=0>
                        <span class="alternative">D.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">5</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="question" data-correct=0 data-question=4>
            <div class="top">
                <div class="bar-none"></div>
                <span class="number">5. É a resposta da questão número 3</span>
            </div>
            <div class="bottom">
                <ul>
                    <li data-question=4 data-alternative=0 data-state=0>
                        <span class="alternative">A.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">C</span>
                    </li>
                    <li data-question=4 data-alternative=1 data-state=0>
                        <span class="alternative">B.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">B</span>
                    </li>
                    <li data-question=4 data-alternative=2 data-state=0>
                        <span class="alternative">C.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">D</span>
                    </li>
                    <li data-question=4 data-alternative=3 data-state=0>
                        <span class="alternative">D.</span>
                        <span class="icon"><img class="iconsImg" src="assets/checkbox-not-marked.svg"></span>
                        <span class="text">A</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
    // Parte do Timer
    let myTimerInterval = setInterval(updateTimer, 1000);
    var startTime = new Date();
    var currentTime = new Date();  
    var seconds = "";
    var minutes = "";
    var hour = "";
    
    // Função de atualizar o timer
    function updateTimer() {
        currentTime = new Date();
        let diffTime = Math.abs(currentTime - startTime);
        seconds = ("00" + Math.round(diffTime/1000)).slice(-2);
        minutes = ("00" + Math.round(seconds / 60)).slice(-2);
        hour = ("00" + Math.round(minutes / 60)).slice(-2);
        document.getElementById("timer").innerHTML =  hour + ":" + minutes + ":" + seconds;
    }

    const images = ["assets/checkbox-not-marked.svg", "assets/checkbox-marked-x.svg", "assets/checkbox-marked-v.svg"];
    const questions = document.getElementsByClassName("question");
    const alternatives = document.getElementsByTagName("li");
    const points = document.getElementById("pont2");
    let answer = [false, false, false, false, false];

    for (let a = 0; a < alternatives.length; a++) { // Adiciona as alternativas ao event listener
        alternatives[a].addEventListener("click", function() {
            clickAlternative(alternatives[a]);
        });
    }

    // Função de Mudar o Icone da Box
    function clickAlternative(alternative) {
        let questionsMarked = [false, false, false, false, false];
        for (let a = 0; a < alternatives.length; a++) { // Loop por todas as alternativas
            if (alternatives[a].dataset.state == 2) { // Checa se a alternativa está respondida 
                questionsMarked[alternatives[a].dataset.question] = true; // Seta as respostas respondidas
            }
        }

        if (alternative.dataset.state == 2) {
            questions[alternative.dataset.question].children[0].children[0].className = "bar-none";
            questions[alternative.dataset.question].dataset.correct = 0;
            setAlternative(alternative, 0, true); // Seta a box com vazio
            checkAnswer(alternative, false);


            for (let a = 0; a < alternatives.length; a++) { // Loop por todas as alternativas
                // Checa se a alternativa é da mesma questão, mas não é a alternativa apertada
                if (alternatives[a].dataset.question === alternative.dataset.question &&
                    alternatives[a].dataset.alternative !== alternative.dataset.alternative)
                    setAlternative(alternatives[a], alternatives[a].dataset.state, false); // Reseta as boxes para o state anterior
            }
        } else if (alternative.dataset.state == 1 && !questionsMarked[alternative.dataset.question]) {
            setAlternative(alternative, 2, true); // Seta a box com V
            setTimeout(function(){checkAnswer(alternative, true);}, 10); // Checa a alternativa depois de um intervalo 

            for (let a = 0; a < alternatives.length; a++) { // Loop por todas as alternativas
                // Checa se a alternativa é da mesma questão, mas não é a alternativa apertada
                if (alternatives[a].dataset.question === alternative.dataset.question &&
                    alternatives[a].dataset.alternative !== alternative.dataset.alternative)
                    setAlternative(alternatives[a], 1, false); // Seta as outras boxes para X
            }
        } else if (alternative.dataset.state == 0 && !questionsMarked[alternative.dataset.question])
            setAlternative(alternative, 1, true); //Seta a box com X
    };

    // Função de Setar o visual da alternativa
    function setAlternative(alternative, state, setState) {
        if (state === 1) // Se for pra setar X
            alternative.children[2].className = "text-line"; // Risca o texto de dentro
        else // Se for pra setar V ou vazio
            alternative.children[2].className = "text"; // Não risca o texto de dentro

        if (setState)
            alternative.dataset.state = state;

        alternative.children[1].children[0].src = images[state]; // Seta o icone com a imagem certa
    };

    // Função de checar se a alternativa está certa e se o jogo acabou
    function checkAnswer(alternative, setAnswer) {
        const corrects = [1, 3, 2, 3, 0];
        const firstQuestionAnswers = [2, 0, 4, 3];
        const secondQuestionAnswers = [1, 3, 0, 2];
        const thirdQuestionAnswers = [1, 2, 3, 4];
        const fourthQuestionAnswers = [2, 1, 3, 0];
        let markedAlternatives = [-1, -1, -1, -1, -1];
        let markedQuestions = [false, false, false, false, false];

        for (let a = 0; a < alternatives.length; a++) { // Loop por todas as alternativas
            if (alternatives[a].dataset.state == 2) { // Checa se a alternativa está respondida 
                markedAlternatives[alternatives[a].dataset.question] = alternatives[a].dataset.alternative; // Seta as respostas das alternativas
                markedQuestions[alternatives[a].dataset.question] = true; // Seta as respostas respondidas
            }
        }

        // Pergunta 0
        if (markedQuestions[0]) { // Checa se a questão está marcada
            if (markedAlternatives.lastIndexOf(markedAlternatives[0]) == 0){ // Checa as condições pra pergunta
                questions[0].children[0].children[0].className = "bar-green"; // Seta a barra para resposta certa
                questions[0].dataset.correct = 1;
            }
            else {
                questions[0].children[0].children[0].className = "bar-red"; // Seta a barra para resposta errada
                questions[0].dataset.correct = 0;
            }
        }
        // Pergunta 1
        let count = markedAlternatives.filter(m => m == markedAlternatives[1]).length // Contagem de elementos marcados com a alternatica escolhida
        if (markedQuestions[1]) { // Checa se a questão está marcada
            if (markedAlternatives[firstQuestionAnswers[markedAlternatives[1]]] == markedAlternatives[1] && count == 2){ // Checa as condições pra pergunta
                questions[1].children[0].children[0].className = "bar-green"; // Seta a barra para resposta certa
                questions[1].dataset.correct = 1;
            }
            else {
                questions[1].children[0].children[0].className = "bar-red"; // Seta a barra para resposta errada
                questions[1].dataset.correct = 0;
            }
        }
        // Pergunta 2
        if (markedQuestions[2]) { // Checa se a questão está marcada
            if (secondQuestionAnswers[markedAlternatives[2]] == markedAlternatives[4]){ // Checa as condições pra pergunta
                questions[2].children[0].children[0].className = "bar-green"; // Seta a barra para resposta certa
                questions[2].dataset.correct = 1;
            }
            else {
                questions[2].children[0].children[0].className = "bar-red"; // Seta a barra para resposta errada
                questions[2].dataset.correct = 0;
            }
        }
        // Pergunta 3
        if (markedQuestions[3]) { // Checa se a questão está marcada
            if (markedAlternatives.findIndex(a => a == 0) == thirdQuestionAnswers[markedAlternatives[3]]){ // Checa as condições pra pergunta
                questions[3].children[0].children[0].className = "bar-green"; // Seta a barra para resposta certa
                questions[3].dataset.correct = 1;
            }
            else {
                questions[3].children[0].children[0].className = "bar-red"; // Seta a barra para resposta errada
                questions[3].dataset.correct = 0;
            }
        }
        // Pergunta 4
        if (markedQuestions[4]) { // Checa se a questão está marcada
            if (fourthQuestionAnswers[markedAlternatives[4]] == markedAlternatives[2]){ // Checa as condições pra pergunta
                questions[4].children[0].children[0].className = "bar-green"; // Seta a barra para resposta certa
                questions[4].dataset.correct = 1;
            }
            else {
                questions[4].children[0].children[0].className = "bar-red"; // Seta a barra para resposta errada
                questions[4].dataset.correct = 0;
            }
        }


        // Seta o array das corretas com true ou false
        if (setAnswer) {
            answer[alternative.dataset.question] = corrects[alternative.dataset.question] == alternative.dataset.alternative; // Verifica se a alternativa das respostas é igual a essa escolhida
            setTimeout(checkVictory, 10);  //
        }

        // Checa o placar do jogo
        let hits = 0;
        for (let q = 0; q < questions.length; q++) {
            console.log(questions[q].dataset.correct)
            if(questions[q].dataset.correct == 1)
                hits += 1;
        }
        console.log(hits)
        points.innerHTML = hits.toString() + "/5";
    };

    function checkVictory(){
        if (answer.every((alt) => {return alt})) { // Checa se todas as respostas estão corretas
            alert("Você acertou todo o quiz!!\nParabéns, seu tempo foi de "
            + hour + ":" + minutes + ":" + seconds + ".");
            window.location.href = 'quiz.php';
        }
    }
    </script>
</body>

</html>