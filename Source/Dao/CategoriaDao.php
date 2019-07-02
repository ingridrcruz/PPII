<?php

namespace PPI\Dao;

use PPI\Util\Conexao;

class CategoriaDao {

    public function __construct() {
        
    }

    public function salvar($categoria) {
        try {
            $sql = "INSERT INTO categorias (nome) VALUES(':nome')";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':nome', $categoria);
            $p_sql->execute();

            return;
        } catch (Exception $e) {
            print_r($e);
        }
    }

    public function listar() {
        try {
            $sql = "SELECT nome FROM categorias";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();

            return;
        } catch (Exception $e) {
            
        }
    }

}
