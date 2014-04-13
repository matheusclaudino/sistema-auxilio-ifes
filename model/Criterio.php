<?php


class Criterio {
  
    private $criterio_id;
    private $nome;
    
    function __construct($criterio_id, $nome) {
        $this->criterio_id = $criterio_id;
        $this->nome = $nome;
    }
    
    public function getCriterio_id() {
        return $this->criterio_id;
    }

    public function setCriterio_id($criterio_id) {
        $this->criterio_id = $criterio_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}

?>
