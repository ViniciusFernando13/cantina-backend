<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set( 'America/Sao_Paulo' );
        cors();
    }
}

// End of file