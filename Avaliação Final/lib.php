<?php 
    session_start();
    $servername = "localhost";
    $usernameSQL = "root";
    $password = "";
    $dbname = "pweb"; 
    
    // Conecta ao Banco
    $conn = new mysqli($servername, $usernameSQL, $password, $dbname, 3307);

    // Checa a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Checa a Base de Dados
    if (!mysqli_select_db($conn,$dbname)) {
        echo "<script> alert('Não foi possível selecionar base de dados \"$dbname\":" .  mysqli_error($conn) . "'); </script>";
        exit;
    }

    function login($email, $password){
        $sql = "SELECT nome FROM usuarios WHERE email = ?  AND senha = ?";

        $stmt = mysqli_stmt_init($GLOBALS['conn']);                   // inicia conexão
        $stmt_prepared_okay = mysqli_stmt_prepare($stmt, $sql);       // prepara a query com o molde fornecido
        
        if ($stmt_prepared_okay) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);    // conecta os parâmetros que os molde espera
            mysqli_stmt_execute($stmt);                                // executa a query
            mysqli_stmt_bind_result($stmt, $result);                   // diz pra qual variável o resultado tem que ser armazenado
            mysqli_stmt_fetch($stmt);                                  // busca valores            
            mysqli_stmt_close($stmt);                                  // fecha statment
            
            if($result){
                $_SESSION['username'] = $result;
                echo "<script> alert('E este SQL Query retornou: $result ') </script>";
                echo "<script> window.location.href = '../quiz.php' </script>";
            } else {
                echo "<script> alert('Senha ou Email incorreto! Tente novamente') </script>";
                echo "<script> window.location.href = '../index.php' </script>";
            }
        }
    }

    function create($name, $email, $password){
        $alreadyExists = checkExists($email);

        if(!$alreadyExists){
            $stmt = mysqli_stmt_init($GLOBALS['conn']);
            $stmt_prepared_okay =  mysqli_stmt_prepare($stmt, "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");   
            
            if($stmt_prepared_okay) {
                mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
                $stmt_executed_okay = mysqli_stmt_execute($stmt);
                
                if ($stmt_executed_okay) {
                    $_SESSION['username'] = $name;
                    echo "<script> alert('Os registros foram inseridos com sucesso.') </script>";
                    echo "<script> window.location.href = '../quiz.php' </script>";
                } else {
                    echo "<script> alert('Os registros não foram inseridos." . mysqli_error($conn) . "') </script>" ;
                    exit;
                }
                mysqli_stmt_close($stmt);
            }
        } else {
            echo "<script> alert('Este email já está sendo usado.') </script>";
        }
    }


    function checkExists($email){
        $sql = "SELECT nome FROM usuarios WHERE email = ?";

        $stmt = mysqli_stmt_init($GLOBALS['conn']);                   // inicia conexão
        $stmt_prepared_okay = mysqli_stmt_prepare($stmt, $sql);       // prepara a query com o molde fornecido
        
        if ($stmt_prepared_okay) {
            mysqli_stmt_bind_param($stmt, "s", $email);                // conecta os parâmetros que os molde espera
            mysqli_stmt_execute($stmt);                                // executa a query
            mysqli_stmt_bind_result($stmt, $result);                   // diz pra qual variável o resultado tem que ser armazenado
            mysqli_stmt_fetch($stmt);                                  // busca valores            
            mysqli_stmt_close($stmt);                                  // fecha statment
            return $result;
        }
    }
?>