
<?php 
    include "../lib.php";

    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    create($name, $email, $password);
?>

