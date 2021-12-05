<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Preparado</title>
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

        // Seleciona um usuário no Banco de maneira preparada
        $sql = "SELECT dados FROM users WHERE username = ?  AND senha = ?";
        echo "<br> o SQL ficou assim: $sql <br>";

        $stmt = mysqli_stmt_init($conn);                              // inicia conexão
        $stmt_prepared_okay = mysqli_stmt_prepare($stmt, $sql);       // prepara a query com o molde fornecido

        if ($stmt_prepared_okay) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $senha);    // conecta os parâmetros que os molde espera
            mysqli_stmt_execute($stmt);                                // executa a query
            mysqli_stmt_bind_result($stmt, $result);                   // diz pra qual variável o resultado tem que ser armazenado
            mysqli_stmt_fetch($stmt);                                  // busca valores            
            mysqli_stmt_close($stmt);                                  // fecha statment
            
            echo "<br> Você inseriu o nome: '$username' <br>";
            echo "<br> E a senha: '$senha' <br>";
            if($result){echo "<br> E este SQL Query retornou: '$result' <br>";}
            else {echo "<br> O SQL não retornou nada. <br>";}
            
        }

    ?>
    </body>
</html>