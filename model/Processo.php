<?php

class Processo {

//ATRIBUTOS
    private $idProcesso;
    private $nome;
    private $dataInicial;
    private $dataFinal;
    private $edital;

//CONSTRUTOR
    function __construct($idProcesso, $nome, $dataInicial, $dataFinal, $edital) {
        $this->idProcesso = $idProcesso;
        $this->nome = $nome;
        $this->dataInicial = $dataInicial;
        $this->dataFinal = $dataFinal;
        $this->edital = $edital;
    }
    
//MÉTODOS
    public function getIdProcesso() {
        return $this->idProcesso;
    }

    public function setIdProcesso($idProcesso) {
        $this->idProcesso = $idProcesso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataInicial() {
        return $this->dataInicial;
    }

    public function setDataInicial($dataInicial) {
        $this->dataInicial = $dataInicial;
    }

    public function getDataFinal() {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

    public function getEdital() {
        return $this->edital;
    }

    public function setEdital($edital) {
        $this->edital = $edital;
    }


}

?>
