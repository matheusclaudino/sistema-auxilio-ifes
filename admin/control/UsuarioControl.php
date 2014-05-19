<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Control;

require_once( '../autoload.php' );

use Model\Fields;

class usuarioControl {
    
    private $fields = array();
    

    public static function iniciarCampos() {
   
        $this->fields[] = array(
            "title" => "Nome",
            "id" => "nome",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Email",
            "id" => "email",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Senha",
            "id" => "senha",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "RG",
            "id" => "rg",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "CPF",
            "id" => "cpf",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Naturalidade",
            "id" => "naturalidade",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Etnia",
            "id" => "etnia",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Estado Civil",
            "id" => "estado_civil",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Data de Nascimento",
            "id" => "data_nascimento",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Endereço",
            "id" => "endereco",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Cidade",
            "id" => "cidade",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Bairro",
            "id" => "bairro",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "UF",
            "id" => "uf",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "CEP",
            "id" => "cep",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Ponto de Referência",
            "id" => "ponto_referencia",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Telefone",
            "id" => "telefone",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Celular",
            "id" => "celular",
            "type" => "text"
        );

        $this->fields[] = array(
            "title" => "Cargo",
            "id" => "cargo",
            "type" => "text"
        );
  
    }
}


?>
