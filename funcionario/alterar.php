<?php
include "../conexao.php";

// Recebe do name dos inputs na tela de informações
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$celular = $_REQUEST['celular'];
$endereco = $_REQUEST['endereco'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$email = $_REQUEST['email'];
$cargo = $_REQUEST['cargo'];
$cidade = $_REQUEST['cidade'];

$sql = "UPDATE funcionario SET nome='$nome', cpf='$cpf', celular='$celular', numero='$numero', bairro='$bairro', email='$email', cargo='$cargo', cidade='$cidade' WHERE id ='$id' ";

$resultado = mysqli_query($conexao, $sql);

header ('Location: ../funcionario.php');
?>