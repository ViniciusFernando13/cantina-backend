<?php 

/**
 * utf8ize
 * 
 * Corrige strings para UTF8
 * 
 */
if ( ! function_exists( 'utf8ize' ) ) {
    function utf8ize($mixed) {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = utf8ize($value);
            }
        } else if (is_string ($mixed)) {
            return utf8_encode($mixed);
        }
        return $mixed;
    }
}

/**
 * Faz o debug do código
 *
 */
if ( ! function_exists( 'debug' ) ) {
    function debug( $var, $blocking = true ) {
        
        // imprime a pré visualizacao
        echo '<pre>';
    
        // verifica se é um dump bloqueante
        if ( $blocking )
            die( var_dump( $var ) );
        else
            var_dump( $var );
        
        // volta false
        return false;
    }
}

/**
 * Pega uma nova instancia do ci
 * 
 */
if( ! function_exists( 'ci' ) ) {
    function ci() {
        $ci =& get_instance();
        return $ci;
    }
}

/**
 * Volta um token aleatório
 * 
 */
if ( ! function_exists( 'cors' ) ) {
    function cors() {

        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
    
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
    
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
            exit(0);
        }    
    }
}

/**
 * safe_json_encode
 * 
 * Gera um JSON seguro
 */
if ( ! function_exists( 'safe_json_encode' ) ) {
    function safe_json_encode($value, $options = 0, $depth = 512){
        $encoded = json_encode($value, $options, $depth);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                return $encoded;
            case JSON_ERROR_DEPTH:
                return 'Maximum stack depth exceeded'; // or trigger_error() or throw new Exception()
            case JSON_ERROR_STATE_MISMATCH:
                return 'Underflow or the modes mismatch'; // or trigger_error() or throw new Exception()
            case JSON_ERROR_CTRL_CHAR:
                return 'Unexpected control character found';
            case JSON_ERROR_SYNTAX:
                return 'Syntax error, malformed JSON'; // or trigger_error() or throw new Exception()
            case JSON_ERROR_UTF8:
                $clean = utf8ize($value);
                return safe_json_encode($clean, $options, $depth);
            default:
                return 'Unknown error'; // or trigger_error() or throw new Exception()
    
        }
    }
}

// End of file