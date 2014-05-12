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
    
    public function consult($auxilioPesquisado){
        return $sql = "SELECT nome FROM Auxilio WHERE nome = '$auxilioPesquisado'";
    }
    
    public function update(Auxilio $auxilio){
        $sql = "UPDATE Auxilio SET nome = '$auxilio->getNome()' WHERE id = '$auxilio->getIdAuxilio()'";
    }
    
    public function disable(Auxilio $auxilio){
        
    }
    
    public function delete(Auxilio $auxilio){
        
    }
}

?>
