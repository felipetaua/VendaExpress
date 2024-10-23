<?php
include('../conexao.php');

// Recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$estado = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];

echo "testando: $nome $estado $cep";

$sql = "INSERT INTO estado(nome, estado, cep) VALUES ('$nome', '$estado', '$cep')";

// Executar código SQL 
$resultado = mysqli_query($conexao, $sql);

header("Location: ../estado.php");

?>