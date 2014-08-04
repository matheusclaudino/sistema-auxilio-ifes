<?php

require_once __ADMIN__.'/control/DefaultControl.php';

class AlunoControl extends DefaultControl {

    public function getAllAluno() {

        return $this->select("SELECT * FROM aluno");

    }

}
