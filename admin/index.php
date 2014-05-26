<?php
<<<<<<< HEAD
        
<<<<<<< HEAD
	require_once( 'autoload.php' );
        
        use Model\Fields;
        
        use Control\usuarioControl;
        
        
        
        $fields = array();
        
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        $fields[] = array(  'name' => 'Nome do aluno',
                            'type' => 'text'
                    );
        $fields[] = array(  'name' => 'Senha',
                            'type' => 'password'
                    );
        $fields[] = array(  'name' => 'Cadastrar',
                            'type' => 'submit'
                    );
        
       // Fields::startFields( $fields );
        
       usuarioControl::iniciarCampos();
=======
	
>>>>>>> a33ddcbbca6d3e52c5ef8ad64c5b15085025e6e8
=======

require_once 'autoload.php';

use Control\Application;

Application::start();
>>>>>>> d80f2cc0efaa81c670317ca6597c8c18752cb92e

?>