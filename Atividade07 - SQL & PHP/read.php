<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Feed</title>
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
        $nome = $_GET['nome'];
        $qual = $_GET['qual'];
        $mensagem = $_GET['mensagem'];
        $imagem = $_GET['imagem'];
        
        
        // Cria um usuário no Banco
        $create = "INSERT INTO convidados (nome, mensagem, qual, imagem) VALUES ('$nome', '$mensagem', '$qual', '$imagem')";
        if ($conn->query($create) === TRUE) {
            $last_id = $conn->insert_id;
            echo "Novo usuário criado no Banco. O último ID é: " .$last_id."<br>";
        } else {
            echo "Erro: ".$create."<br>".$conn->error."<br>";
        }
        
        // Seleciona todos os convidados
        $sql = "SELECT * FROM convidados";
        $get_all = mysqli_query($conn, $sql);

        if (!$get_all) {
            die("Falha na Execução da Consulta: ".$sql."<br>".mysqli_error($conn))."<br>";
        }

        if (mysqli_num_rows($get_all) == 0) {
            echo "Não foram encontradas linhas, nada para mostrar em: ".$get_all."<br>";
            exit;
        }

        // Seleciona o último usuário
        $sql2 = "SELECT * FROM convidados WHERE id = '$last_id'";
        $eu = mysqli_query($conn, $sql2);
        if (!$eu) {
            die("Falha na sua inscrição: ".$sql2."<br>".mysqli_error($conn))."<br>";
        }

        if (mysqli_num_rows($eu) == 0) {
            echo "Você não foi criado: ".$eu."<br>";
            exit;
        }
        
        // Conta convidados da noiva
        $sql3 = "SELECT * FROM convidados WHERE qual = 0";
        $convidados_noiva = mysqli_query($conn, $sql3);
        if (!$convidados_noiva) {
            die("Falha na leitura dos convidados: ".$sql3."<br>".mysqli_error($conn))."<br>";
        }

        if (mysqli_num_rows($convidados_noiva) == 0) {
            echo "A noiva não convidou ninguém: ".$convidados_noiva."<br>";
            exit;
        }
        

        // Conta convidados do noivo
        $sql4 = "SELECT * FROM convidados WHERE qual = 1";
        $convidados_noivo = mysqli_query($conn, $sql4);
        if (!$convidados_noivo) {
            die("Falha na leitura dos convidados: ".$sql4."<br>".mysqli_error($conn))."<br>";
        }

        if (mysqli_num_rows($convidados_noivo) == 0) {
            echo "O noivo não convidou ninguém: ".$convidados_noivo."<br>";
            exit;
        }
        
        // Mostra na tela o seu usuário
        $myRow = mysqli_fetch_assoc($eu);
        echo '<br><br>Seu nome: '.$myRow["nome"]."<br>";
        echo '<br>Sua imagem:<br><img src="assets/'.$myRow["imagem"].'" width="384" height="216">';

        
        // Feed de Mensagens de outros convidados
        echo '<h3><br> Mensagens dos usuários: <br><h3>';
        while ($row = mysqli_fetch_assoc($get_all)) {
            echo '<br>';
            echo $row["nome"].':'.$row["mensagem"].'<br>';
        } 
        
        // Estatísticas de mensagens dos convidados da noiva e do noivo.
        echo "<h1>".mysqli_num_rows($convidados_noiva)." são convidados da noiva e ".mysqli_num_rows($convidados_noivo)." são convidados do noivo</h1>";
    ?>
    </body>
</html>