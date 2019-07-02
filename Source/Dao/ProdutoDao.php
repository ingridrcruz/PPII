
<?php

namespace PPI\Dao;

use PPI\Util\Conexao;
use PPI\Entidades\Produtos;
use PDO;

class ProdutoDao {

    public function __construct() {
        
    }

    public function salvar(Produtos $produto) {
        try {
            $sql = ("INSERT INTO produtos(idCategoria,nome,qtd,valor,descr,imagemProduto)
            VALUES(:idCategoria,:nome,:qtd,:valor,:descr,:imagemProduto)");
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':idCategoria', $produto->getIdCategoria());
            $p_sql->bindValue(':nome', $produto->getNome());
            $p_sql->bindValue(':qtd', $produto->getQuantidade());
            $p_sql->bindValue(':valor', $produto->getValor());
            $p_sql->bindValue(':descr', $produto->getDescr());
            $p_sql->bindValue(':imagemProduto', $produto->getImagemProduto());
            $p_sql->execute();
            return;
        } catch (Exception $e) {
            print_r($e);
        }
    }

    public function listarProdutos() {
        try {
            $sql = 'select * from produtos';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            print_r($e);
        }
    }

    public function alterar(Produtos $produto) {
        try {
            return 'jazim eu mexo';
        } catch (Exception $e) {
            print_r($e);
        }
    }

    public function remover($produto) {
        try {
            $id = $_GET['idProduto'];
            $sql = ("DELETE FROM produtos WHERE idProduto=$id");
            $p_sql = Conexao::getInstancia()->prepare($sql);

            $p_sql->execute();

            return;
        } catch (Exception $e) {
            print_r($e);
        }
    }

}
