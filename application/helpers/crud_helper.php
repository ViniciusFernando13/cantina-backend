<?php

/**
 * Obtem o array enviado por post
 * 
 */
if ( ! function_exists( 'get_insert_form' ) ) {
    function get_insert_form( $pattern ) {
        $data = [];
        foreach( $pattern as $key => $value ) {
            $data[$value] = post( $key );
        }
        return $data;
    }
}

// End of file