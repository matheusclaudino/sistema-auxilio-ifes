<?php
namespace Control;
require_once 'autoload.php';
use Model\Auxilio;
use Dao\AuxilioDAO;

class ControladoraAuxilio {
    private $auxiliodao;
    
    /**
     * Classe controladora do auxilio
     */
    function __construct() {
        $this->auxiliodao = new AuxilioDAO();
    }    
    
     /**
     * Cadastra um novo Auxílio.
     * 
     * @param string $nome    Nome do auxílio. 
     */
    public function insertAuxilio($nome) {
       $auxilio = new Auxilio($nome);
       $this->auxiliodao->insert($auxilio);
    }
   
    /**
     * Consulta auxílio.
     * 
     * @param string $auxilioPesquisado    Nome do auxílio pesquisado.
     */
    public function consultAuxilio($auxilioPesquisado) {
        $this->auxiliodao->consult($auxilioPesquisado);
    }
    
    /**
     * Atualiza o auxílio.
     * 
     * @param string $nome    Nome do auxílio.
     * @param integer   $id   Identificação do auxilio.
     */
    public function updateAuxilio($id, $nome){
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $this->auxiliodao->update($auxilio);    
    }
    
    /**
     * Inativa o auxílio.
     * 
     * @param string $nome    Nome do auxílio.
     * @param integer   $id   Identificação do auxilio.
     */
    public function disableAuxilio($id, $nome) {
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $this->auxiliodao->disable($auxilio);
    }
    
    /**
     * Deleta o auxílio.
     * 
     * @param string $nome    Nome do auxílio.
     * @param integer   $id   Identificação do auxilio.
     */
    public function deleteAuxilio($id, $nome){
        $auxilio = new Auxilio($nome);
        $auxilio->setIdAuxilio($id);
        $this->auxiliodao->delete($auxilio);
    }
}

?>
