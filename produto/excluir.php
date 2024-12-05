<?php
    include('../conexao.php');

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM produto WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header("Location:../produto.php");

?>