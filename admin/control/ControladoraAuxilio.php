<?php
require_once 'autoload.php';
use Model\Auxilio;
use Dao\AuxilioDAO;

class ControladoraAuxilio {
    private $auxiliodao;
    function __construct() {
        $this->auxiliodao = new AuxilioDAO();
    }    
    
    public function insertAuxilio($nome) {
       $auxilio = new Auxilio($nome);
       $auxiliodao->insert($auxilio);
    }
   
    public function consultAuxilio($auxilioPesquisado) {
        $auxiliodao->consult($auxilioPesquisado);
    }
    public function updateAuxilio($id, $nome){
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $auxiliodao->update($auxilio);    
    }
    public function disableAuxilio($id, $nome) {
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $auxiliodao->disable($auxilio);
    }

    public function deleteAuxilio($id, $nome){
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $auxiliodao->delete($auxilio);
    }
}

?>
