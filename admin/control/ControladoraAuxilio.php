<?php
require_once 'autoload.php';
use Model\Auxilio;
use Dao\AuxilioDAO;

class ControladoraAuxilio {

    function __construct() {
        
    }    
    
    public function inserirAuxilio($nome) {
       $auxilio = new Auxilio($nome);
       $persiste = new AuxilioDAO();
       $persiste->inserir($auxilio);
    }
   
    public function consultarAuxilio($idAuxilio, $nome) {
        
    }

        public function inativarAuxilio($idAuxilio, $nome) {
        
    }
}

?>
