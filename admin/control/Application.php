<?php

namespace Control;

use Dao\DBConnect;

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
        switch ($userAction) {
            case 'aluno':

                break;
            case 'home':
            default:
        }
    }
}

?>