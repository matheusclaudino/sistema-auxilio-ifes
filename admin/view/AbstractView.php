<?php

namespace View;

/**
 * Base para implementação de uma View. Essa classe implementa
 * um esqueleto da marcação HTML para facilitar a implementação
 * das interfaces de usuário da aplicação.
 */
class AbstractView implements View {

    public function show($nome) {
        
        echo '<h1>'.$nome.'</h1>';
        
    }

}

?>
