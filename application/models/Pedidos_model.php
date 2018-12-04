<?php

/**
 * Model dos colaboradores
 * 
 */
class Pedidos_model extends MY_Model {

    /**
     * Nome da tabela
     * 
     */
    protected $table_name = 'Pedidos';

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        
        // Prepara a query
        $this->db->from( 'Pedidos p' )
        ->select( 'p.id as id, c.nome as cliente, c.apelido as apelido, p.data as data, p.valorTotal as valorTotal' )
        ->join( 'Clientes c', 'c.id = p.id_cliente' );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array();
        } else return false;
    }

    public function listPeriodo() {
        $this->db->where( "data > '" .date('Y-m-d H:i:s', strtotime( date( 'd-m-Y H:i:s', time() ) ." - 31 day") ) ."'" );
        return $this;
    }

}

// End of file