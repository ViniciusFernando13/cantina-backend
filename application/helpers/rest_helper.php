<?php

/**
 * Envia dados pela API
 * 
 */
if ( ! function_exists( 'send' ) ) {
    function send( $status, $data ) {
        echo json_encode( [
            'status' => $status,
            'data'   => $data
        ]);
        return;
    }
}

/**
 * Envia os dados com um status de Sucesso
 * 
 */
if ( ! function_exists( 'resolve' ) ) {
    function resolve( $data ) {
        return send( 200, $data );
    }
}

/**
 * Envia os dados com um status de Erro
 * 
 */
if ( ! function_exists( 'reject' ) ) {
    function reject( $message ) {
        return send( 500, [ 'message' => $message ] );
    }
}

/**
 * Envia os dados com um status de acesso negado
 * 
 */
if ( ! function_exists( 'denied' ) ) {
    function denied() {
        return send( 403, [ 'message' => 'Access denied' ] );
    }
}

/**
 * Pega o ambiente da requisição
 * 
 */
if ( ! function_exists( 'env' ) ) {
    function env() {
        if ( $key = get_header( 'Api-Key' ) ) {
            ci()->config->load( 'ambientes' );
            $env = null;
            switch( $key ) {
                case ci()->config->item( 'admin_token' ):
                    $env = 'ADMIN';
                break;
                case ci()->config->item( 'client_token' ):
                    $env = 'CLIENT';
                break;
            }
            return $env;
        } else return null;
    }
}

/**
 * Faz a requisiçãom de um ou mais ambientes especificos para
 * permitir o acesso a rotas da API.
 * Se pelo menos um dos ambientes estiver presente, então 
 * a requisição é permitida.
 * 
 */
if ( ! function_exists( 'require_env' ) ) {
    function require_env( $envs ) {
        if ( $env = env() ) {

            // Verifica se foi informado um array
            $envs = is_array( $envs ) ? $envs : [ $envs ];
            $envs = array_map( function( $value ) {
                return strtoupper( $value );
            }, $envs );

            // Verifica se o ambiente está no array
            if ( !in_array( $env, $envs ) ) {
                denied();
                exit();
            }
        } else {

            // Caso não exista um ambiente, volta acesso negado
            denied();
            exit();
        }
    }
}
 
// End of file