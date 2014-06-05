<?php

namespace DAO;
use Util\DBConnect;

// require_once ('../Util/DBConnect.php');

class DefaultDao {

    private $table;

    public function insert($dados, $table) {

        try {

            $campos = "";
            $values = "";

            $table = DBConnect::getTabela($table);

            foreach($dados as $campo => $valor) {
                $campos = $campos.$campo.', ';
                $values = $values.':'.$campo.', ';
            }

           $campos = substr($campos, 0, -2);
           $values = substr($values, 0, -2);

           $con = DBConnect::getInstance(); 
           $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

           $stmt = $con->prepare("INSERT INTO $table ( $campos )VALUES ( $values )");

           // http://stackoverflow.com/questions/4174524/binding-params-for-pdo-statement-inside-a-loop
           foreach ($dados as $campo => &$valor) {
                $stmt->bindParam( ':'.$campo, $valor);
           }

           $stmt->execute();

        } catch(PDOException $e) { 
            echo 'Error: ' . $e->getMessage();
        }

    }

    public function update($dados, $table) {

        $campos = "";

        foreach ($dados as $campo => $valor) {
            $campos = $campos . $campo . ' = :' . $campo . ',';
        }
        $campos = substr($campos, 0, -1);

        $stmt = $con->prepare("UPDATE $table.' SET($campos) WHERE $table.id = :id");

        foreach ($dados as $campo => $valor) {

            $stmt->bindParam(':' . $campo, $valor);
        }

        $stmt->execute();
    }

    public function delete($dados, $table) {

        $con->prepare("DELETE FROM $table WHERE $table.id = :id");

        $stmt->bindParam(":id", $dados['id']);

        $stmt->execute();
    }

    /**
     * Select genérico
     * 
     * @param string $sql String sql
     **/
    public function select($sql) {

        $con = DBConnect::getInstance();

        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        // executa a instrução SQL
        $statement = $con->prepare($sql);

        $statement->execute();

        $result = array();

        // Query results
        while ( $row = $statement->fetch(\PDO::FETCH_ASSOC) ) {
            $result[] = $row; // print $row;
        }
        
        return $result;
        
    }

}