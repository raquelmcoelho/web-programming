<?php 
    // SELECT
    include "../lib.php";

    // Coleta os dados do usuário do formulário
    $email = $_GET['email'];
    $password = $_GET['password'];

    login($email, $password);
?>