<?php
namespace Dao;
require_once 'autoload.php';
use Model\Auxilio;
/*
 * Classe DAO do Auxilio
 * 
 */
class AuxilioDAO {
    
    function __construct() {
        
    }

    public function inserir(Auxilio $auxilio){
        $sql = "INSERT INTO Auxilio(nome) VALUES('$auxilio->getNome()')";
    }
}

?>
