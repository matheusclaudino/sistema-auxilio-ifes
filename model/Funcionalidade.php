<?php


class Funcionalidade {
//ATRIBUTOS
    private $idFuncionalidade;
    private $nome;
    
//CONSTRUTOR
    function __construct($nome) {
        $this->nome = $nome;
    }
    
//MÉTODOS
    public function getIdFuncionalidade() {
        return $this->idFuncionalidade;
    }

    public function setIdFuncionalidade($idFuncionalidade) {
        $this->idFuncionalidade = $idFuncionalidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }


}

?>
