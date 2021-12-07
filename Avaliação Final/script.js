var img = ["assets/checkbox-marked-v.svg", "assets/checkbox-marked-x.svg", "assets/checkbox-not-marked.svg"]
document.getElementById("1A").addEventListener("click", function() {
    console.log(document.getElementById("1A").src);
});

function checkQuestion(number, option){
    switch(number){
        case 1:
            // Checar se nem 2,3,4,5 questão tem o item escolhido
            break;
        case 2:
            // É a única questão com a mesma resposta que esta questão
            break;
        case 3:
            // É a resposta da questão número 5
            break;
        case 4:
            // É a primeira questão cuja resposta é a letra A
            break;
        case 5:
            // É a resposta da questão número 3
            break;
    }
}