<?php
namespace Model;

class Auxilio {
    private $idAuxilio;
    private $nome;
    private $status;
    
    function __construct($nome) {
        $this->nome = $nome;
        $this->status = true;
    }


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
    
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }




}

?>
