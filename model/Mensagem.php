<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensagem
 *
 * @author Ruan
 */
class Mensagem {
    //put your code here
        private $id_usuario;
    private $nome_usuario;
    private $turma;
    private $email;
    private $tel;
    private $assunto;
    private $mensagem;

        function __construct($id_usuario, $nome_usuario, $turma, $email, $tel, $assunto, $mensagem){
            $this->id_usuario = $id_usuario;
            $this->nome_usuario = $nome_usuario;
            $this->turma = $turma;
            $this->email = $email;
            $this->tel = $tel;
            $this->assunto = $assunto;
            $this->mensagem = $mensagem;
        }
        
        public function getId_usuario() {
            return $this->id_usuario;
        }

        public function getNome_usuario() {
            return $this->nome_usuario;
        }

        public function getTurma() {
            return $this->turma;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getTel() {
            return $this->tel;
        }

        public function getAssunto() {
            return $this->assunto;
        }

        public function getMensagem() {
            return $this->mensagem;
        }

        public function setId_usuario($id_usuario) {
            $this->id_usuario = $id_usuario;
        }

        public function setNome_usuario($nome_usuario) {
            $this->nome_usuario = $nome_usuario;
        }

        public function setTurma($turma) {
            $this->turma = $turma;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setTel($tel) {
            $this->tel = $tel;
        }

        public function setAssunto($assunto) {
            $this->assunto = $assunto;
        }

        public function setMensagem($mensagem) {
            $this->mensagem = $mensagem;
        }


        
}
?>