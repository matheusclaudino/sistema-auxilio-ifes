<?php 

	// Head
	require_once 'include/head.php'; 

	// Ação do usuário
	if ( !empty( $_GET['action'] ) ) {

		$user_action = $_GET['action'];

		switch ($user_action) {
			case 'cadastrar':
				require_once 'include/aluno-cadastrar.php';
				break;
			
			default:
				break;
		}

	} else {

		require 'include/aluno.php';

	}

	// Footer
	require_once 'include/footer.php'; 