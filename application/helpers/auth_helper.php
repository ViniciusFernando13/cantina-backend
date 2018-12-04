<?php

/**
 * Pega o usuário da requisição
 * 
 */
if ( ! function_exists( 'request_user' ) ) {
    function request_user() {
        
        // Pega os dados do header
        $id     = get_header( 'Auth-Id' );

        // Verifica se todos foram informados
        if ( $id ) {
            return [
                'id'    => $id
            ];
        } else return null;
    }
}

/**
 * Pretege uma ação ou método
 * 
 */
if ( ! function_exists( 'restrict' ) ) {
    function restrict( $blocked ) {
        if ( !$blocked ) {
            denied();
            exit();
        }
    }
}
 
// End of file