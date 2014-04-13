<?php

class Inscricao {

    private $aluno_id;
    private $processo_id;
    private $turma_id;
    private $entrevista_obs;
    private $entrevista_data;
    private $entrevista_hora;
    
    function __construct($aluno_id, $processo_id, $turma_id, $entrevista_obs, $entrevista_data, $entrevista_hora) {
        $this->aluno_id = $aluno_id;
        $this->processo_id = $processo_id;
        $this->turma_id = $turma_id;
        $this->entrevista_obs = $entrevista_obs;
        $this->entrevista_data = $entrevista_data;
        $this->entrevista_hora = $entrevista_hora;
    }
    
    public function getAluno_id() {
        return $this->aluno_id;
    }

    public function setAluno_id($aluno_id) {
        $this->aluno_id = $aluno_id;
    }

    public function getProcesso_id() {
        return $this->processo_id;
    }

    public function setProcesso_id($processo_id) {
        $this->processo_id = $processo_id;
    }

    public function getTurma_id() {
        return $this->turma_id;
    }

    public function setTurma_id($turma_id) {
        $this->turma_id = $turma_id;
    }

    public function getEntrevista_obs() {
        return $this->entrevista_obs;
    }

    public function setEntrevista_obs($entrevista_obs) {
        $this->entrevista_obs = $entrevista_obs;
    }

    public function getEntrevista_data() {
        return $this->entrevista_data;
    }

    public function setEntrevista_data($entrevista_data) {
        $this->entrevista_data = $entrevista_data;
    }

    public function getEntrevista_hora() {
        return $this->entrevista_hora;
    }

    public function setEntrevista_hora($entrevista_hora) {
        $this->entrevista_hora = $entrevista_hora;
    }


}

?>
