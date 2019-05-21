<?PHP
    try{
        // Conectando-se ao banco de dados
        $conexao = mysqli_connect("localhost", "peckins", "", "db_peckins");
        
        // Obtendo as informações dadas pelo usuário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        // Comando sql para inserir os dados na tabela pessoa
        $query = "insert into pessoa(nm_pessoa, ds_email) values('$nome', '$email')";
        
        // inserindo os dados no banco
        mysqli_query($conexao, $query);
        
        echo "funfou!";
    }
    catch (Exception $e){
        echo "Erro ao conectar: ".$e;
    }
?>