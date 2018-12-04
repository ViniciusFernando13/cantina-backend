<?php

/**
 * Pega entradas submetidas via POST
 * 
 */
if ( ! function_exists( 'post' ) ) {
    function post( $index = null, $xss_clean = null ) {
        
        // Chama o método post
        return ci()->input->post( $index, $xss_clean );
    }
}

/**
 * Pega entradas submetidas via GET
 * 
 */
if ( ! function_exists( 'get' ) ) {
    function get( $index = null, $xss_clean = null ) {

        // Chama o método get
        return ci()->input->get( $index, $xss_clean );
    }
}

/**
 * Pega um header da requisição
 * 
 */
if ( ! function_exists( 'get_header' ) ) {
    function get_header( $name ) {

        // pega a instancia
        $ci =& get_instance();

        // prepara o nome
        $f_name = strtoupper( $name );
        
        // pega pelo http
        $val = isset( $_SERVER['HTTP_'.$f_name] ) ? $_SERVER['HTTP_'.$f_name] : null;
        
        // pega pelo ci
        return $ci->input->get_request_header( $name ) ? $ci->input->get_request_header( $name ) : $val;        
    }
}

/**
 * Seta as regras de um formulário
 * 
 */
if ( ! function_exists( 'set_form' ) ) {
    function set_form( $config ) {
        ci()->form_validation->set_rules( $config );
    }
}

/**
 * Verifica se um formulário é válido
 * 
 */
if ( ! function_exists( 'valid_form' ) ) {
    function valid_form() {
        if ( ci()->form_validation->run() == FALSE ) {
            return false;
        } else return true;
    }
}

// End of file