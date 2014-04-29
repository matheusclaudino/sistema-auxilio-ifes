<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Recurso
 *
 * @author Ruan
 */
class Recurso {
    //put your code here
    private $idAluno;
    private $idProcesso;
    private $idAuxilio;
    private $idUsuarioResposta;
    private $idTurma;
    private $data;
    private $justificativa;
    
    function __construct($idAluno, $idProcesso, $idAuxilio, $idUsuarioResposta, $idTurma, $data, $justificativa) {
        $this->idAluno = $idAluno;
        $this->idProcesso = $idProcesso;
        $this->idAuxilio = $idAuxilio;
        $this->idUsuarioResposta = $idUsuarioResposta;
        $this->idTurma = $idTurma;
        $this->data = $data;
        $this->justificativa = $justificativa;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getIdProcesso() {
        return $this->idProcesso;
    }

    public function getIdAuxilio() {
        return $this->idAuxilio;
    }

    public function getIdUsuarioResposta() {
        return $this->idUsuarioResposta;
    }

    public function getIdTurma() {
        return $this->idTurma;
    }

    public function getData() {
        return $this->data;
    }

    public function getJustificativa() {
        return $this->justificativa;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setIdProcesso($idProcesso) {
        $this->idProcesso = $idProcesso;
    }

    public function setIdAuxilio($idAuxilio) {
        $this->idAuxilio = $idAuxilio;
    }

    public function setIdUsuarioResposta($idUsuarioResposta) {
        $this->idUsuarioResposta = $idUsuarioResposta;
    }

    public function setIdTurma($idTurma) {
        $this->idTurma = $idTurma;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setJustificativa($justificativa) {
        $this->justificativa = $justificativa;
    }


}
