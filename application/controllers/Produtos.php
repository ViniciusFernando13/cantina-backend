<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller com os métodos de autenticação
 * para os Produtos
 * 
 */
class Produtos extends MY_Controller {

    /**
     * Principal model do controller
     *
     * @var [type]
     */
    public $model;

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
        

        // Carrega a model
        $this->load->model( [ 
                              'Produtos_model',
                              'PedidosProdutos_model'
                        ] );
        $this->model = $this->Produtos_model;
    }

    public function insert() {
        require_env( [ 'client' ] );

        // Seta o formulário de validação
        set_form( [
            [
                'field'  => 'nome',
                'label'  => 'Nome',
                'rules'  => 'required|min_length[3]|max_length[100]',
                'errors' => [   
                    'required'   => 'Você deve informar um nome',
                    'min_length' => 'O nome deve conter pelo menos 3 caracteres',
                    'max_length' => 'O nome não pode conter mais de 100 caracteres'
                ]
            ], [
                'field'  => 'preco',
                'label'  => 'Preço',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um preço'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'preco'       => 'preco', 
            'nome'        => 'nome'  
        ]);

        $dataCli['estoque'] = 0;

        $id = $this->model->insert( $dataCli );

        if( $id ) {
            $dataCli['id'] = $id;
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o usuario!' );
        }
    }

    public function update() {
        require_env( [ 'client' ] );

        // Seta o formulário de validação
        set_form( [
            [
                'field'  => 'id',
                'label'  => 'Id',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um id'
                ]
            ], [
                'field'  => 'nome',
                'label'  => 'Nome',
                'rules'  => 'required|min_length[3]|max_length[100]',
                'errors' => [   
                    'required'   => 'Você deve informar um nome',
                    'min_length' => 'O nome deve conter pelo menos 3 caracteres',
                    'max_length' => 'O nome não pode conter mais de 100 caracteres'
                ]
            ], [
                'field'  => 'preco',
                'label'  => 'Preço',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um preço'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'id'          => 'id',    
            'preco'       => 'preco',    
            'nome'        => 'nome'  
        ]);

        $id = $this->model->update( $dataCli['id'], $dataCli );

        if( $id ) {
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o usuario!' );
        }
    }

    public function update_estoque() {
        require_env( [ 'client' ] );

        // Seta o formulário de validação
        set_form( [
            [
                'field'  => 'id',
                'label'  => 'Id',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um id'
                ]
            ], [
                'field'  => 'estoque',
                'label'  => 'Estoque',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um valor para o estoque'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'id'            => 'id',
            'estoque'       => 'estoque'
        ]);

        $produto = $this->model->findById($dataCli['id']);

        $dataCli['estoque'] = $dataCli['estoque'] + $produto['estoque'];

        $id = $this->model->update( $dataCli['id'], $dataCli );

        if( $id ) {
            $dataCli['id'] = $id;
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o usuario!' );
        }
    }

    public function delete($id) {
        $prod = $this->model->findById( $id );
        if( !$prod ) {
            return reject( 'Produto não encontrado' );
        }  
        $pedidos = $this->PedidosProdutos_model->getWhere( 'id_produto = ' .$id );
        if( $pedidos ) {
            return reject( 'Produto não pode ser deletado pois tem pedidos registrado para ele, é neccessário mante-lo no sistema' );
        }  
        $this->model->delete( $id );
        return resolve( 'Produto deletado com sucesso' );
    }

    public function list() {
        require_env( [ 'client' ] );
        $clis = $this->model->findAll();
        return resolve( $clis ? $clis : [] );
    }

}

// End of file
