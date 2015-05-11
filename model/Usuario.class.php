<?php

class Usuario extends GerenciadorCadastro{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $foto;
    
    function __construct($id, $nome, $email, $senha, $foto, $sqlStmt) {
        parent::__construct($sqlStmt);
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->foto = $foto;    
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    } 
}
