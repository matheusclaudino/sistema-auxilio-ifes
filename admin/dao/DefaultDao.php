<?php

namespace DAO;

use Dao\DBConnect;

class DefaultDao{
    
    private $table;
            
    function __construct() {
        
    }
   
   public function insert($dados){
    $campos = "";
    $values = "";
    
        $con = new DBConnect();
        

        foreach($dados as $campo => $valor)
        {

            $campos = $campos.$campo.',';
            $values = $values.':'.$campo.',';

        }

        $campos = substr($campos, 0,-1);
        $values = substr($values, 0,-1);

        $stmt = $this->con->prepare("INSERT INTO $this->table ( $campos )VALUES ( $values )");

         foreach ($dados as $campo => $valor){
             $stmt->bindParam(':'.$campo,$valor);     
         }

        //$stmt->execute();
         
        echo 'ok';
   
    }

}

?>


