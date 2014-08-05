<?php

/**
 * Config
 */
require_once '../util/config.php';

/**
 * Core
 */
require_once '../core/Core.php';
$core = new Core();

/**
 * Table reference
 */
$table_reference = 'TB_ALUNO';

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
			$core->insert($args, $table_reference);

			// Redireciona a página
			header ("location: ../aluno.php?c=1");
			break;

		case 'editar':

			// ID
			if( !empty($_GET['id']) ) {
				$id = $_GET['id'];
			}

			// Redireciona a página
			header ("location: ../aluno.php?action=editar&id=".$id);

			break;

		case 'salvar':

			// ID
			if( !empty($_GET['id']) ) {

				$id = $_GET['id'];

				// Array de campos
				$field_datas = unserialize(ALUNO_FIELDS);

				// Array de dados
				$args = array();

				foreach ($field_datas as $field => $value):
					$args[ $value['id'] ] = $_POST[ $value['id'] ];
				endforeach;

				echo "<pre>";
				print_r($args);
				echo "</pre>";

				echo " ------------------------------ END PROCESS <br><br><br>";

				// Insere os dados
				$core->update($id, $args, $table_reference);
			}

			break;

		case 'deletar':

			// ID
			if( !empty($_GET['id']) ) {
				$id = $_GET['id'];
			}

			// Deleta o registro
			$core->delete($id, $table_reference);

			// Redireciona a página
			header ("location: ../aluno.php?d=1");
			break;
		
		default:
			break;
	}

} else {

	echo "nada";

}