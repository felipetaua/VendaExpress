<?php
    include('../conexao.php');

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM cliente WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header("Location:../cliente.php");

?>