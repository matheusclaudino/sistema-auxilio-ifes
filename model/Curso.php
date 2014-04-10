<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso
 *
 * @author 2012122760136
 */
class Curso {

    //put your code here
    private $curso_id;
    private $nome;
    private $periodo;
    
    function __construct($curso_id, $nome, $periodo) {
        $this->curso_id = $curso_id;
        $this->nome = $nome;
        $this->periodo = $periodo;
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

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }




}

?>
