<?php
    include('../conexao.php');

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM funcionario WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header("Location:../funcionario.php");

?>