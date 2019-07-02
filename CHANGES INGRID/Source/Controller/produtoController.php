<?php

namespace PPI\Controller;

use PPI\Dao\ProdutoDao;

ini_set('display_errors', 1);
$produtoDao = new ProdutoDao();

switch ($_REQUEST['acao']) {
    case 'salvar':
        $produto = [
            'idCategoria' => $_REQUEST['idCategoria'],
            'nome' => strtoupper($_REQUEST['nome']),
            'qtd' => $_REQUEST['qtd'],
            'valor' => $_REQUEST['valor'],
            'desc' => $_REQUEST['desc'],
            'imagemProduto' => $_REQUEST['imagemProduto']];

        $produtoDao->salvar($produto);
        break;
}