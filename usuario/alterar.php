<?php
include "../conexao.php";

// Recebe do name dos inputs na tela de informações
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

$sql = "UPDATE usuario SET nome='$nome', cpf='$cpf', senha='$senha' WHERE id ='$id' ";

$resultado = mysqli_query($conexao, $sql);

header ('Location: ../principal.php');
?>