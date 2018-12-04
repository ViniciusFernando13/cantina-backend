<?php

/**
 * Model dos colaboradores
 * 
 */
class Usuarios_model extends MY_Model {

    /**
     * Nome da tabela
     * 
     */
    protected $table_name = 'Usuarios';

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Faz o login no sistema
     *
     * @param [type] $email
     * @param [type] $senha
     * @return void
     */
    public function login( $email, $senha ) {

        // Prepara a query
        $this->db->from( $this->table() )
        ->select( '*' )
        ->where( [ 'email' => $email, 'senha' => $senha ] );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            $user = $query->result_array()[0];
            return [
                'id'         => $user['id'],
                'nome'       => $user['nome'],
                'senha'      => $user['senha'],
                'email'      => $user['email']
            ];
        } else return false;
    }
    public function recovery( $email, $token ) {

        // Prepara a query
        $this->db->from( $this->table() )
        ->select( '*' )
        ->where( [ 'email' => $email, "recoveryToken" => $token ] );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array()[0];
        } else return false;
    }

    public function hasCliEmail( $email ) {

        // Prepara a query
        $this->db->from( $this->table() )
        ->select( '*' )
        ->where( [ 'email' => $email ] );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array()[0];
        } else return false;
    }

    public function hasCliCpf( $cpf ) {

        // Prepara a query
        $this->db->from( $this->table() )
        ->select( '*' )
        ->where( [ 'cpf' => $cpf ] );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array()[0];
        } else return false;
    }

    /**
     * Salva o token de login de um colaborador
     *
     * @param [type] $id
     * @return void
     */
    public function saveLoginToken( $id ) {
        
        // Gera o token
        $token = token();

        // Preapara os itens
        $data = [ 'autenticacao' => $token ];
        $this->db->where( 'id', $id );

        // Tenta fazer o update
        if ( $this->db->update( $this->table(), $data ) ) {
            return $token;
        } else return null;
    }

    /**
     * Salva o token de login de um colaborador
     *
     * @param [type] $id
     * @return void
     */
    public function saveRecoveryToken( $id ) {
        
        // Gera o token
        $token = token();

        // Preapara os itens
        $data = [ 'recoveryToken' => $token ];
        $this->db->where( 'id', $id );

        // Tenta fazer o update
        if ( $this->db->update( $this->table(), $data ) ) {
            return $token;
        } else return null;
    }

    public function findAllExport() {

        // Prepara a query
        $this->db->from( $this->table() )
        ->select( "id, nome, sobrenome, email, cpf,
        CASE WHEN iniciante IS NULL THEN 'não' ELSE 'sim' END as iniciante,
        ativo, criacao" );
        $query = $this->db->get();

        // Verifica se existem resultados
        if ( $query->num_rows() > 0 ) {
            return $query->result_array();
        } else return false;
    }
}

// End of file