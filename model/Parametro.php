<?php

class Parametro {

    private $parametro_id;
    private $nome;
    private $valor;
    
    function __construct($parametro_id, $nome, $valor) {
        $this->parametro_id = $parametro_id;
        $this->nome = $nome;
        $this->valor = $valor;
    }
    
    public function getParametro_id() {
        return $this->parametro_id;
    }

    public function setParametro_id($parametro_id) {
        $this->parametro_id = $parametro_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


    



}

?>
