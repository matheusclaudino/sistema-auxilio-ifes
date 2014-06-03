<?php

/**
 * Config
 */
require_once '/../util/config.php';

/**
 * @var userAction ação tomada pelo usuário através da requisição http
 */
$userAction = isset($_GET['action']) ? $_GET['action'] : 'c';

/**
 * Controladora
 */
$ctr = new Control\DefaultControl();

switch ($userAction):
    case 'c':

    	// Array de campos
    	$field_datas = unserialize(ALUNO_FIELDS);
        
        // Array de dados
        $args = array();

        foreach ($field_datas as $field => $value):
            $args[ $value['id'] ] = $_POST[ $value['id'] ];
        endforeach;
        
        $ctr->insert($args, "TB_ALUNO");

        header ("location: ".ADMIN_URL);
        
        break;
    default:
endswitch;