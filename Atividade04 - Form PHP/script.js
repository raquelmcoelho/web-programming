function playMyTale(taleName) {
    var audio = document.getElementById(taleName);
    console.log(taleName);
    audio.play();
}

function validateForm() {
    let confirmation = document.forms["formClient"]["termosChecked"].checked;
    console.log("confirmation", confirmation);
    if(confirmation == false){ alert("Aceite os termos para continuar") }
    return confirmation
}

function changeColor(color){
    document.body.style.backgroundColor = color;
    console.log(color);
}