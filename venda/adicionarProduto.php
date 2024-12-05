<?php
    if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['produto'])) {

        // Adicionar produto diretamente á tabela item_venda
        $produtoId = $_POST['produto'];
        $quantidade = $_POST['quantidade'];

        // Buscar o preço do produto
        $resultado = $conexao ->query("SELECT preco, estoque FROM produtos WHERE id=$produtoId");
        $produto = $resultado->fetch_assoc();
        $preco = $produto['preco'];

    }
?>