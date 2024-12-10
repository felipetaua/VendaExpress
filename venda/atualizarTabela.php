<?php

// Totalizadores 
$totalQuantidade = 0;
$totalValor = 0;

// Buscar os itens de venda da venda atual
$itensVenda = $conexao->query("SELECT iv.id, p.nome, iv.produto_id, iv.valor FROM item_venda iv JOIN produto p ON iv.produto_id = p.id WHERE iv.venda_id = $idVenda");
?>