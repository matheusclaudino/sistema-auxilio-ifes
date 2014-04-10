<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Banner
 *
 * @author 2012122760136
 */
class Banner {

    //put your code here
    private $banner_id;
    private $titulo;
    private $imagem;
    private $status;

    function __construct($banner_id, $titulo, $imagem, $status) {
        $this->banner_id = $banner_id;
        $this->titulo = $titulo;
        $this->imagem = $imagem;
        $this->status = $status;
    }
    
    public function getBanner_id() {
        return $this->banner_id;
    }

    public function setBanner_id($banner_id) {
        $this->banner_id = $banner_id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }



}

?>
