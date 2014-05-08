<?php
/**
 * Classe geradora de campos automáticos.
 */

namespace Model;

Class Fields {
	
    public static function startFields( $args ) {

        if( is_array($args) ):
            
            foreach($args as $field):

                switch ( $field['type'] ) {
                    case 'text':
                        echo '<div><label>'.$field['name'].'<label></div>';
                        echo '<div><input type="text" name"teste"></div>';
                    break;
                } // end switch
            
            endforeach;

        endif;
    }
}

?>
