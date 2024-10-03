<?php
    // Importando arquivo de conexão com banco
    include 'conexao.php';

    // Recebendo dados da tela de login(fron-end)
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    //echo " Olá seu cpf: $cpf e senha: $senha ";  -- Testando se o php está funcionando

    // Selecione o usuário onde o cpf='cpf do login' e senha='senha do login'
    $sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

    // Executa código SQL com a permisão da conexão
    $resultado = mysqli_query($conexao, $sql);

    // Cada valor é associado ao nome da coluna no banco
    $colunas = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado) > 0) {
        //echo "Login efetuado com sucesso!";
        session_start();
        $_SESSION['usuario'] = $colunas['nome'];
        $_SESSION['cpf'] = $cpf;
        $_SESSION['senha'] = $senha;

        // Direcionando para página principal
        header('location: principal.php');
    } else {
        // echo "Seu registro não foi encontrado";
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>