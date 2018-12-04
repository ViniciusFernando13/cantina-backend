<?php

/**
 * Model dos colaboradores
 * 
 */
class PedidosProdutos_model extends MY_Model {

    /**
     * Nome da tabela
     * 
     */
    protected $table_name = 'PedidosProdutos';

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    public function findByPedido( $idPedido ) {
        
        // Prepara a query
        $this->db->from( 'PedidosProdutos p' )
        ->select( 'p.id as id, c.nome as produto, p.quantidade as quantidade, p.valor as valor' )
        ->join( 'Produtos c', 'c.id = p.id_produto' )
        ->where( 'p.id_pedido = ' .$idPedido );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array();
        } else return false;
    }

}

// End of file