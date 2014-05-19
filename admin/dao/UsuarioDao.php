<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;

use Dao\DBConnect;
use Model\Usuario;

/**
 * Description of UsuarioDao
 *
 * @author Paulo Henrique
 */
class UsuarioDao {
    //put your code here
    
    private $table = 'usuario';
    
    function __construct() {
        
    }
    
    public function inserir(Usuario $usuario){
      
        $con = new DBconnect;
        
        $stmt = $con->prepare("INSERT INTO $this->table (nome, email, senha, rg, cpf, naturaliade, etnia, estadoCivil, DataNascimento,
                endereco, cidade, bairro, uf, cep, pontoReferencia, telefone, celular, cargo)
                VALUES (:nome, :email, :senha, :rg, :cpf, :naturaliade, :etnia, :estadoCivil, :DataNascimento,
                :endereco, :cidade, :bairro, :uf, :cep, :pontoReferencia, :telefone, :celular, :cargo)");
        
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':email', $usuario->getEmail());
        $stmt->bindParam(':senha', $usuario->getSenha());
        $stmt->bindParam(':rg', $usuario->getRg());
        $stmt->bindParam(':cpf', $usuario->getCpf());
        $stmt->bindParam(':naturalidade', $usuario->getNaturalidade());
        $stmt->bindParam(':etnia', $usuario->getEtnia());
        $stmt->bindParam(':estadoCivil', $usuario->getEstadoCivil());
        $stmt->bindParam(':DataNascimento', $usuario->getDataNascimento());
        $stmt->bindParam(':endereco', $usuario->getEndereco());
        $stmt->bindParam(':cidade', $usuario->getCidade());
        $stmt->bindParam(':bairro', $usuario->getBairro());
        $stmt->bindParam(':uf', $usuario->getUf());
        $stmt->bindParam(':cep', $usuario->getCep());
        $stmt->bindParam(':pontoReferencia', $usuario->getPontoReferencia());
        $stmt->bindParam(':telefone', $usuario->getTelefone());
        $stmt->bindParam(':celular', $usuario->getCelular());
        $stmt->bindParam(':cargo', $usuario->getCargo());
         
    }
    
}

?>
