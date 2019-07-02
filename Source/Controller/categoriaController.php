<?php

namespace PPI\Controller;

use PPI\Dao\CategoriaDao;

include_once ("conexao.php");
mysqli_close($conexao);

$categoriaDao = new CategoriaDao();

$sql = mysql_query("select * from categorias order by nome");
while ($listar = mysql_fetch_assoc($sql)) {
    echo $listar['nome'];
}

switch ($_REQUEST['acao']) {
    case 'salvar':
        $categoria = [
            $nome = strtoupper($_REQUEST['nome'])
        ];
        $categoriaDao->salvar($categoria);

        break;
}
?>