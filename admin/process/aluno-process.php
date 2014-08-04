<?php

/**
 * Config
 */
require_once '../util/config.php';

/**
 * Controladora
 */
require_once '../control/AlunoControl.php';
$ctr = new AlunoControl();

/**
 * Ação do usuário
 */
if ( !empty( $_GET['action'] ) ) {

	$user_action = $_GET['action'];

	switch ($user_action) {
		case 'cadastrar':
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
			break;

		case 'deletar':

			// ID
			if( !empty($_GET['id']) ) {
				$id = $_GET['id'];
			}

			// Deleta o registro
			$ctr->delete($id);

			// Redireciona a página
			header ("location: ../aluno.php?d=1");
			break;
		
		default:
			break;
	}

} else {

	echo "nada";

}