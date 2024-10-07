<?php
    include('../conexao.php');

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM usuario WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header("Location:../principal.php");

?>