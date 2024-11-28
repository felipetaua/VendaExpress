<?php
include('../conexao.php');

// Recebendo os dados do front-end
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$celular = $_REQUEST['celular'];
$endereco = $_REQUEST['endereco'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$email = $_REQUEST['email'];
$cargo = $_REQUEST['cargo'];
$cidade = $_REQUEST['cidade'];

//echo "testando: $nome $cpf $celular $endereco $numero $bairro $email $cargo $cidade";

$sql = "INSERT INTO funcionario(nome, cpf, celular, endereco, numero, bairro, email, cargo, cidade_id) VALUES ('$nome', '$cpf',  '$celular', '$endereco', '$numero', '$bairro', '$email', '$cargo', '$cidade')";

// Executar código SQL 
$resultado = mysqli_query($conexao, $sql);

header("Location: ../funcionario.php");

?>