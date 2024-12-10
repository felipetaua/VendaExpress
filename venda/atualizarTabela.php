<?php

// Totalizadores 
$totalQuantidade = 0;
$totalValor = 0;

// Buscar os itens_venda/produto da venda atual
$itensVenda = $conexao->query("SELECT iv.id, p.nome, iv.produto_id, iv.valor FROM item_venda iv JOIN produto p ON iv.produto_id = p.id WHERE iv.venda_id = $idVenda");

// Atualizar os totalizadores 
while($item = $itensVenda->fetch_assoc()){
    $totalQuantidade += $item['quantidade']; 
    $totalValor += $item['quantidade'] * $item['valor']; 
}

?>