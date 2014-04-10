<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Familiar
 *
 * @author 2012122760136
 */
class Familiar {
    //put your code here
     private $familiar_id;
 private  $aluno_id;
 private  $nome;
 private  $idade;
 private  $estado_civil;
 private  $parentesco;
 private  $situacao;
 private  $situacao_empregaticia;
 private  $profissao;
 private  $salario;
 private  $pensao;
 private  $tipo_escola;
 private  $mensalidade;
 private  $gastos;
 private  $tipo_doenca;
 private  $faz_tratamento;
 private  $usa_medicamento;
 private  $deficiente;
 private  $viciado;
 
 function __construct($familiar_id, $aluno_id, $nome, $idade, $estado_civil, $parentesco, $situacao, $situacao_empregaticia, $profissao, $salario, $pensao, $tipo_escola, $mensalidade, $gastos, $tipo_doenca, $faz_tratamento, $usa_medicamento, $deficiente, $viciado) {
     $this->familiar_id = $familiar_id;
     $this->aluno_id = $aluno_id;
     $this->nome = $nome;
     $this->idade = $idade;
     $this->estado_civil = $estado_civil;
     $this->parentesco = $parentesco;
     $this->situacao = $situacao;
     $this->situacao_empregaticia = $situacao_empregaticia;
     $this->profissao = $profissao;
     $this->salario = $salario;
     $this->pensao = $pensao;
     $this->tipo_escola = $tipo_escola;
     $this->mensalidade = $mensalidade;
     $this->gastos = $gastos;
     $this->tipo_doenca = $tipo_doenca;
     $this->faz_tratamento = $faz_tratamento;
     $this->usa_medicamento = $usa_medicamento;
     $this->deficiente = $deficiente;
     $this->viciado = $viciado;
 }

 public function getFamiliar_id() {
     return $this->familiar_id;
 }

 public function setFamiliar_id($familiar_id) {
     $this->familiar_id = $familiar_id;
 }

 public function getAluno_id() {
     return $this->aluno_id;
 }

 public function setAluno_id($aluno_id) {
     $this->aluno_id = $aluno_id;
 }

 public function getNome() {
     return $this->nome;
 }

 public function setNome($nome) {
     $this->nome = $nome;
 }

 public function getIdade() {
     return $this->idade;
 }

 public function setIdade($idade) {
     $this->idade = $idade;
 }

 public function getEstado_civil() {
     return $this->estado_civil;
 }

 public function setEstado_civil($estado_civil) {
     $this->estado_civil = $estado_civil;
 }

 public function getParentesco() {
     return $this->parentesco;
 }

 public function setParentesco($parentesco) {
     $this->parentesco = $parentesco;
 }

 public function getSituacao() {
     return $this->situacao;
 }

 public function setSituacao($situacao) {
     $this->situacao = $situacao;
 }

 public function getSituacao_empregaticia() {
     return $this->situacao_empregaticia;
 }

 public function setSituacao_empregaticia($situacao_empregaticia) {
     $this->situacao_empregaticia = $situacao_empregaticia;
 }

 public function getProfissao() {
     return $this->profissao;
 }

 public function setProfissao($profissao) {
     $this->profissao = $profissao;
 }

 public function getSalario() {
     return $this->salario;
 }

 public function setSalario($salario) {
     $this->salario = $salario;
 }

 public function getPensao() {
     return $this->pensao;
 }

 public function setPensao($pensao) {
     $this->pensao = $pensao;
 }

 public function getTipo_escola() {
     return $this->tipo_escola;
 }

 public function setTipo_escola($tipo_escola) {
     $this->tipo_escola = $tipo_escola;
 }

 public function getMensalidade() {
     return $this->mensalidade;
 }

 public function setMensalidade($mensalidade) {
     $this->mensalidade = $mensalidade;
 }

 public function getGastos() {
     return $this->gastos;
 }

 public function setGastos($gastos) {
     $this->gastos = $gastos;
 }

 public function getTipo_doenca() {
     return $this->tipo_doenca;
 }

 public function setTipo_doenca($tipo_doenca) {
     $this->tipo_doenca = $tipo_doenca;
 }

 public function getFaz_tratamento() {
     return $this->faz_tratamento;
 }

 public function setFaz_tratamento($faz_tratamento) {
     $this->faz_tratamento = $faz_tratamento;
 }

 public function getUsa_medicamento() {
     return $this->usa_medicamento;
 }

 public function setUsa_medicamento($usa_medicamento) {
     $this->usa_medicamento = $usa_medicamento;
 }

 public function getDeficiente() {
     return $this->deficiente;
 }

 public function setDeficiente($deficiente) {
     $this->deficiente = $deficiente;
 }

 public function getViciado() {
     return $this->viciado;
 }

 public function setViciado($viciado) {
     $this->viciado = $viciado;
 }


 
}

?>
