function validaForm(){
    var radios = document.getElementsByName("pergunta1");
    var formValido = false;

    var i = 0;
    while (!formValido && i < radios.length) {
        if(radios[i].checked) formValido = true;
        i++;        
    }

    if (!formValido) alert("Por favor, escolha uma opção");
    return formValido;
}