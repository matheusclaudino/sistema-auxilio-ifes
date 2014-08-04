<?php

require_once __ROOT__.'/admin/control/DefaultControl.php';
require_once __ROOT__.'/admin/dao/AlunoDao.php';

class AlunoControl extends DefaultControl {

	function __construct() {
        $this->dao = new AlunoDao();
    }

    public function getAllAluno() {

        return $this->dao->getAllAluno();

    }

    /**
     * delete Deleta um registro
     * @param  int $id identificação do registro
     * @return [type]     [description]
     */
    public function delete($id) {
        
        return $this->dao->delete($id);

    }

}
