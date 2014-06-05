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

    public function insert(Auxilio $auxilio){
        $con = new DBConnect();
        $stmt = $con->prepare("INSERT INTO Auxilio(nome) VALUES(:nome)");
        $stmt->bindParam(':nome', $auxilio->getNome());
        $stmt->execute($con);
    }
    
    public function consult($auxilioPesquisado){
        return $sql = "SELECT nome FROM Auxilio WHERE nome = $auxilioPesquisado";
    }
    
    public function update(Auxilio $auxilio){
        $sql = "UPDATE Auxilio SET nome = $auxilio->getNome() WHERE id = $auxilio->getIdAuxilio()";
    }   
    
    public function disable(Auxilio $auxilio){
        $sql = "UPDATE Auxilio SET status = $auxilio->getStatus() WHERE id = $auxilio->getIdAuxilio()";
        $auxilio->setStatus(false);
    }
    
    public function delete(Auxilio $auxilio){
        $sql = "DELETE * FROM Auxilio WHERE id = $auxilio->getIdAuxilio()";
    }
    
}

?>
