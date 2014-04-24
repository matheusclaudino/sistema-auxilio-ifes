<?php

class Auxilio {
//ATRIBUTOS
    private $idAuxilio;
    private $nome;
    
//CONSTRUTOR
    function __construct($nome) {
        $this->nome = $nome;
    }
    
//MÉTODOS
    public function getIdAuxilio() {
        return $this->idAuxilio;
    }

    public function setIdAuxilio($idAuxilio) {
        $this->idAuxilio = $idAuxilio;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }



}

?>
