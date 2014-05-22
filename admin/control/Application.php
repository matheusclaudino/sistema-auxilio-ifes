<?php

namespace Control;

use Dao\DBConnect;
use View\MainView;

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
         * @var Connector Objeto de conexão
         */
        $Connector = new DBConnect();

        /**
         * @var userAction ação tomada pelo usuário através da requisição http
         */
        $userAction = isset($_GET['action']) ? $_GET['action'] : 'home';

        /**
         * Realiza a construção da página de acordo com a requisição do usuário.
         */
        switch ($userAction):
            case 'aluno':
                header('location: View/AlunoView.php?nome=Luiz');
                break;
            case 'home':
            default:
                $view = new MainView();
                $view->testMainView();
        endswitch;
        
        $view->show("Luiz");
        
    }

}

?>