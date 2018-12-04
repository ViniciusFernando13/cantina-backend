<?php

/**
 * Classe que adiciona novas funcionalidades
 * a model padrão do codeigniter
 * 
 */
class MY_Model extends CI_Model {

    /**
     * Nome da tabela
     * 
     */
    protected $table_name;

    /**
     * mapeamento da tabela
     * 
     */
    protected $mapping;

    // id
    public $id;

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Volta o nome da tabela
     *
     * @param [type] $alias
     * @return void
     */
    public function table( $alias = null ) {
        return $alias ? $alias.'.'.$this->table_name : $this->table_name;
    }

    /**
     * Seta pelo post
     *
     * @param [type] $atributo
     * @return void
     */
    public function setPost( $atributo = '' ) {
        $this->$atributo = post( $atributo );
        return $this;
    }
    
    /**
     * Seta o valor no atributo
     *
     * @param [type] $atributo
     * @param [type] $valor
     * @return void
     */
    public function set( $atributo = '', $valor ) {
        $this->$atributo = $atributo;
        return $this;
    }
    
   /**
    * serialize
    *
    * volta os dados formatados, prontos para serem upados
    *
    */
    public function serialize() {

        // pega o mapeamentp
        $mapping = $this->mapping;

        // verifica se existe
        if ( !$mapping ) return;

        // seta os dados
        $data = [];
        foreach( $mapping as $atributo => $colunaTabela ) {
            $data[$colunaTabela] = $this->$atributo;
        }

        // volta os dados
        return $data;
    }

    /**
     * Insere dados na tabela
     *
     * @param [type] $data
     * @return void
     */
    public function insert( $data ) {
        if ( $this->db->insert( $this->table(), $data ) ) {
            return $this->db->insert_id();
        } else return false;
    }

    /**
     * Faz o update de um registro
     *
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function update( $id, $data ) {
        $this->db->where( 'id', $id );
        return $this->db->update( $this->table(), $data );
    }

    /**
     * Remove um registro da tabela
     *
     * @param [type] $id
     * @return void
     */
    public function delete( $id ) {
        return $this->db->delete( $this->table(), [ 'id' => $id ] );
    }

    /**
     * Remove um registro da tabela associativa
     *
     * @param [type] $coluna
     * @param [type] $id
     * @return void
     */
    public function deleteAssociate( $coluna, $id ) {
        return $this->db->delete( $this->table(), [ $coluna => $id ] );
    }

    /**
     * Pega um registro pelo ID
     *
     * @param [type] $id
     * @return void
     */
    public function getWhere( $where, $array = false ) {
        
        // Prepara a query
        $this->db->select( '*' )
        ->from( $this->table() )
        ->where( $where );

        // Executa a query
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $array ? $query->result_array() : $query->result_array()[0];
        } else return null;
    }

    /**
     * Pega um registro pelo ID
     *
     * @param [type] $id
     * @return void
     */
    public function findById( $id ) {
        
        // Prepara a query
        $this->db->select( '*' )
        ->from( $this->table() )
        ->where( [ 'id' => $id ] );

        // Executa a query
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array()[0];
        } else return null;
    }
    
    /**
     * Pega um registro pelo ID
     *
     * @param [type] $id
     * @return void
     */
    public function findAll() {
        
        // Prepara a query
        $this->db->select( '*' )
        ->from( $this->table() );

        // Executa a query
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array();
        } else return null;
    }
}

// End of file