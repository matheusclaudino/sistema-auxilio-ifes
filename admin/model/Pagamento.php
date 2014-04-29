<?php

class Pagamento {

//ATRIBUTOS
    private $idPagamento;
    private $dataPagamento;
    private $valorPagamento;
    private $idAlunoAuxilio;

//CONSTRUTOR
    function __construct($dataPagamento, $valorPagamento, $idAlunoAuxilio) {
        $this->dataPagamento = $dataPagamento;
        $this->valorPagamento = $valorPagamento;
        $this->idAlunoAuxilio = $idAlunoAuxilio;
    }
    
//MÉTODOS    
    public function getIdPagamento() {
        return $this->idPagamento;
    }

    public function setIdPagamento($idPagamento) {
        $this->idPagamento = $idPagamento;
    }

    public function getDataPagamento() {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }

    public function getValorPagamento() {
        return $this->valorPagamento;
    }

    public function setValorPagamento($valorPagamento) {
        $this->valorPagamento = $valorPagamento;
    }

    public function getIdAlunoAuxilio() {
        return $this->idAlunoAuxilio;
    }

    public function setIdAlunoAuxilio($idAlunoAuxilio) {
        $this->idAlunoAuxilio = $idAlunoAuxilio;
    }



}

?>
