<?php
include('../conexao.php');

// Recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

echo "testando: $nome $cpf $senha";

$sql = "INSERT INTO usuario(nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";

// Executar código SQL 
$resultado = mysqli_query($conexao, $sql);

header("Location: ../principal.php");

?>