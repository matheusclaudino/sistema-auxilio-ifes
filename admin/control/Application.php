<?php

namespace Admin\Control;

/**
 * Controlador da aplicação, esse participante receberá as
 * requisições do usuário e decidirá o que fazer com elas.
 */
class Application {

    /**
     * O método start iniciará a aplicação e manipulará a requisição do usuário conforme adequado.
     */
    public static function start() {

        /**
         * @var userAction ação tomada pelo usuário através da requisição http
         */
        $userAction = isset($_GET['page']) ? $_GET['page'] : 'home';

        /**
         * Realiza a construção da página de acordo com a requisição do usuário.
         */
        switch ($userAction):
            case 'gerenciar-alunos':
                require_once '/../view/AlunoManagerView.php';
                break;
            case 'aluno':
                require_once '/../view/AlunoView.php';
                break;
            case 'admin':
                require_once '/../view/MainView.php';
                break;
            case 'home':
            default:
                require_once '/../../public/index.php';
        endswitch;
        
    }

}

?>