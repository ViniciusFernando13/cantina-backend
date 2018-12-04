<?php

/**
 * Model dos colaboradores
 * 
 */
class Produtos_model extends MY_Model {

    /**
     * Nome da tabela
     * 
     */
    protected $table_name = 'Produtos';

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    public function estoqueFinal() {
        $this->db->where('estoque <= 5');
        return $this;
    }

}

// End of file