<?php
    include('../conexao.php');

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM cidade WHERE id='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    header("Location:../cidade.php");

?>