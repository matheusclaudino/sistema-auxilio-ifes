<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Faq
 *
 * @author Ruan
 */
class Faq {
    //put your code here
    private $pergunta;
    private $resposta;
    
    function __construct($pergunta, $resposta) {
        $this->pergunta = $pergunta;
        $this->resposta = $resposta;
    }

    public function getPergunta() {
        return $this->pergunta;
    }

    public function getResposta() {
        return $this->resposta;
    }

    public function setPergunta($pergunta) {
        $this->pergunta = $pergunta;
    }

    public function setResposta($resposta) {
        $this->resposta = $resposta;
    }


}
