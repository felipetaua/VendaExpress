<?php
// iniciar sessão
session_start();

// Verificar se existe variável de sessão CPF ou SENHA
if (!isset($_SESSION["cpf"]) or !isset($_SESSION["senha"])) {
    // Destruir a sessão
    session_destroy();

    // Limpar variaveis de sessão
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);

    // Manda para o login
    header('location: index.php');
}
?>