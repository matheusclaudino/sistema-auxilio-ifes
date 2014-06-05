<?php

namespace Admin\Control;

class AlunoControl extends DefaultControl {

    public function getAllAluno() {

        return $this->select("SELECT * FROM aluno");

    }

}
