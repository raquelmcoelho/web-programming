<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Despreparado</title>
    </head>
    <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "pweb"; 
        
        // Conecta ao Banco
        $conn = new mysqli($servername, $username, $password, $dbname, 3307);
        
        // Checa a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        echo "Conexão bem sucedida<br>";
        
        // Checa a Base de Dados
        if (!mysqli_select_db($conn,$dbname)) {
            echo "Não foi possível selecionar base de dados \"$dbname\": " . mysqli_error($conn)."<br>";
            exit;
        }

        // Coleta os dados do usuário do formulário
        $username = $_GET['nameUser'];
        $senha = $_GET['senhaUser'];
        
        // Seleciona um usuário no Banco de maneira despreparada
        $sql = "SELECT * FROM users where username = '$username' AND senha= '$senha'";
        echo "<br> o SQL ficou assim: $sql <br>";

        // executa a query
        $get_all = mysqli_query($conn, $sql);

        if ($get_all) {

            echo "<br> Você inseriu o nome: '$username' <br>";
            echo "<br> E a senha: '$senha' <br>";
            echo "<br> E este SQL Query retornou: " . mysqli_num_rows($get_all) . "linha(s) <br>";
    
            while ($row = mysqli_fetch_assoc($get_all)) {
                echo '<br>';
                echo ' ----------------------------- ';
                echo '<br> Usuário: ' . $row['username']; 
                echo '<br> Senha: ' . $row['senha'];
                echo '<br> Dados: ' . $row['dados'];
                echo '<br>';
            } 
        }
    ?>
    </body>
</html>