<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Documento
 *
 * @author Ruan
 */
class Documento {
    //put your code here
    private $idAluno;
    private $nome;
    private $url;
    
    function __construct($idAluno, $nome, $url) {
        $this->idAluno = $idAluno;
        $this->nome = $nome;
        $this->url = $url;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setUrl($url) {
        $this->url = $url;
    }


}
