<?php
    include '../conexao.php';

    $idVenda = $_REQUEST['idVenda'];
    $idItem = $_REQUEST['idItem'];
    $qtd = $_REQUEST['quantidade'];
    $idProduto = $_REQUEST['idProduto'];

    // Atualizar o estoque do produto, estornar e voltar
    $sqlNovoEstoque = "UPDATE produto SET estoque = estoque + $qtd WHERE id='$idProduto' ";

    // Excluir o item da venda
    $sql = "DELETE FROM item_venda WHERE id='$idItem' ";
    $resultado = mysqli_query($conexao, $sql);
    
    header("Location: ../venda.php?idVenda = $idVenda");
?>