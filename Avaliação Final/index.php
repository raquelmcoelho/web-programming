<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>Login - Logic</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <?php
        include "lib.php";
        session_destroy(); 
    ?>

    <img src="img/backgroundprog.png" id="background" alt="">
    <div id="form">
        <img src="img/LOGIC.png" id="logo" alt="logo Logic">
        <form id="homeForm" action="">
            <input type="text" name="email" class="input1" placeholder="E-mail"><br>
            <input type="password" name="password" class="input1" placeholder="Senha"><br>
            <input onclick = "validateForm('database/select.php')" type="button" value="Entrar"  class="btn1"><br>
            <input onclick = "goToPage('cadastro.php')" type="button" value="Registrar"  class="btn1">
        </form>
    </div>

    <script>
        function validateForm(page){
            // check if its empty
            let email = document.forms["homeForm"]["email"];
            let password = document.forms["homeForm"]["password"];
            console.log("email, senha", email.value, password.value)
            if(email.value == "" || password.value == ""){ 
                alert("Preencha os campos!"); 
            } else {
                goToPage(page)
            }
        }
        
        function goToPage(path){
            // go to page
            var form = document.getElementById('homeForm');
            form.action = path;
            form.submit();
        }
    </script>
</body>
</html>