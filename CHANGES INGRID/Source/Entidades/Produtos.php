<?php
namespace PPI\Entidades;

class Produtos{

    private $idCategoria;
    private $nome;
    private $quantidade;
    private $valor;
    private $descr;
    private $imagemProduto;
    
    function __construct($idCategoria, $nome, $quantidade, $valor, $descr, $imagemProduto) {
        $this->idCategoria = $idCategoria;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->descr = $descr;
        $this->imagemProduto = $imagemProduto;
    }
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNome() {
        return $this->nome;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescr() {
        return $this->descr;
    }

    function getImagemProduto() {
        return $this->imagemProduto;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescr($descr) {
        $this->descr = $descr;
    }

    function setImagemProduto($imagemProduto) {
        $this->imagemProduto = $imagemProduto;
    }  
}
