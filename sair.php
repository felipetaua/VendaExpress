<?php 

session_start();

// Destruir a sessão
session_destroy();
// Limpar variáveis de sessão
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

// manda para o login
header('location: index.php');
?>  