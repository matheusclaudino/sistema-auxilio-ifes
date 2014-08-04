<?php

/**
 * Config
 */
require_once '../util/config.php';

/**
 * Controladora
 */
require_once '../control/DefaultControl.php';
$ctr = new DefaultControl();

// Array de campos
$field_datas = unserialize(ALUNO_FIELDS);

// Array de dados
$args = array();

foreach ($field_datas as $field => $value):
	$args[ $value['id'] ] = $_POST[ $value['id'] ];
endforeach;

// Insere os dados
$ctr->insert($args, "TB_ALUNO");

// Redireciona a página
header ("location: ../aluno.php?c=1");