<?php

namespace Control;

use DAO\DefaultDao;

class DefaultControl {

    private $dao;
    
    function __construct() {
        $this->dao = new DefaultDao();
    }
    
    public function insert($args, $table) {
        $this->dao->insert($args, $table);
    }

    public function select($sql) {
    	return $this->dao->select($sql);
    }

}
