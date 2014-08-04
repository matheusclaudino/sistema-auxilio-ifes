<?php

require_once __ROOT__.'/admin/dao/DefaultDao.php';

class AlunoDao extends DefaultDao {

    function __construct() {
        
        $this->main_table = 'TB_ALUNO';

    }

    public function getAllAluno() {

        return $this->select("SELECT * FROM aluno");

    }

}
