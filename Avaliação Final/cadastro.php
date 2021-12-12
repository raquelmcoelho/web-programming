<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Logic</title>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <img src="img/backgroundprog.png" id="background" alt="">
    <div id="form">
        <img src="img/LOGIC.png" id="logo" alt="logo Logic">
        <form id="registerForm" action="">
            <input type="text" name="name" class="input1" placeholder="Nome"><br>
            <input type="text" name="email" class="input1" placeholder="E-mail"><br>
            <input type="password" name="password" class="input1" placeholder="Senha"><br>
            <input onclick="validateForm('database/create.php')" type="button" class="btn1" value="Registrar">
        </form>
</div>
    <script>
        function validateForm(page){
            // check if its empty
            let name = document.forms["registerForm"]["name"];
            let email = document.forms["registerForm"]["email"];
            let password = document.forms["registerForm"]["password"];
            console.log("nome, email, senha", name.value, email.value, password.value)
            if(email.value == "" || password.value == "" ||name.value == ""){ 
                alert("Preencha os campos!"); 
            } else {
                goToPage(page)
            }
        }
        
        function goToPage(path){
            // go to page
            var form = document.getElementById('registerForm');
            form.action = path;
            form.submit();
        }
    </script>

</body>
</html>