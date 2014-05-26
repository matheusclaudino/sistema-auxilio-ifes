<?php

class DefaultDao {
    
    private $table;// $con;
    
 // $con = new DBConnect();
    
  
    public function Insert($dados, $con){
         
       foreach ($dados as $dado):
           
            $stmt = $con->prepare("INSERT INTO".$this->table."(".$dados['key'].")VALUES(:".$dado['value'].")");
           
       endforeach;
         
        foreach ($dados as $dado):
            
            $stmt->bindParam(':'.$dados['key'], $dado['value']);
            echo ($dado['value']);
        endforeach;
        
        //$stmt->execute();
    }

}

$con = new DBConnect();
 $dados = array();
 $dados[] = array(  '1' => 'VALOR1',
                    '2' => 'VALOR2',
                    '3' => 'VALOR3',
                    '4' => 'VALOR4',
                    '5' => 'VALOR5',
                    '6' => 'VALOR6'
                );
 $variavel = new DefaultDao();
 $variavel->Insert($dados, $con);
 
