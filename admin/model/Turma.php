<?php

class Turma {

    private $turma_id;
    private $curso_id;
    private $nome;
    private $ano;

    function __construct($turma_id, $curso_id, $nome, $ano) {
        $this->turma_id = $turma_id;
        $this->curso_id = $curso_id;
        $this->nome = $nome;
        $this->ano = $ano;
    }

    public function getTurma_id() {
        return $this->turma_id;
    }

    public function setTurma_id($turma_id) {
        $this->turma_id = $turma_id;
    }

    public function getCurso_id() {
        return $this->curso_id;
    }

    public function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

}

?>
