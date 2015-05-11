<?php

class Comentario extends GerenciadorCadastro{
    private $id;
    private $comentario;
    private $dataCriacao;
    private $dataEdicao;
    private $id_Usuario;
    
    function __construct($id, $comentario, $dataCriacao, $dataEdicao, $id_Usuario, $sqlStmt) {
        parent::__construct($sqlStmt);
        $this->id = $id;
        $this->comentario = $comentario;
        $this->dataCriacao = $dataCriacao;
        $this->dataEdicao = $dataEdicao;
        $this->id_Usuario = $id_Usuario;    
    } 
    
    public function getId() {
        return $this->id;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function getDataEdicao() {
        return $this->dataEdicao;
    }

    public function getId_Usuario() {
        return $this->id_Usuario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    public function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    public function setDataEdicao($dataEdicao) {
        $this->dataEdicao = $dataEdicao;
    }

    public function setId_Usuario($id_Usuario) {
        $this->id_Usuario = $id_Usuario;
    }
    
}
