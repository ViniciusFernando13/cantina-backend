<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller com os métodos de autenticação
 * para os Clientes
 * 
 */
class Clientes extends MY_Controller {

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
                              'Clientes_model',
                              'Pedidos_model'
                        ] );
        $this->model = $this->Clientes_model;
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
                'field'  => 'apelido',
                'label'  => 'Apelido',
                'rules'  => 'required|min_length[3]|max_length[100]',
                'errors' => [   
                    'required'   => 'Você deve informar um nome',
                    'min_length' => 'O nome deve conter pelo menos 3 caracteres',
                    'max_length' => 'O nome não pode conter mais de 100 caracteres'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'apelido'     => 'apelido', 
            'nome'        => 'nome'  
        ]);

        $id = $this->model->insert( $dataCli );

        if( $id ) {
            $dataCli['id'] = $id;
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o cliente!' );
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
                'field'  => 'apelido',
                'label'  => 'Apelido',
                'rules'  => 'required|min_length[3]|max_length[100]',
                'errors' => [   
                    'required'   => 'Você deve informar um nome',
                    'min_length' => 'O nome deve conter pelo menos 3 caracteres',
                    'max_length' => 'O nome não pode conter mais de 100 caracteres'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'id'          => 'id',    
            'apelido'     => 'apelido',    
            'nome'        => 'nome'  
        ]);

        $id = $this->model->update( $dataCli['id'], $dataCli );

        if( $id ) {
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o cliente!' );
        }
    }

    public function delete($id) {
        $cli = $this->model->findById( $id );
        if( !$cli ) {
            return reject( 'Cliente não encontrado' );
        }  
        $pedidos = $this->Pedidos_model->getWhere( 'id_cliente = ' .$id );
        if( $pedidos ) {
            return reject( 'Cliente não pode ser deletado pois tem pedidos registrado para ele, é neccessário mante-lo no sistema' );
        }  
        $this->model->delete( $id );
        return resolve( 'Cliente deletado com sucesso' );
    }

    public function list() {
        require_env( [ 'client' ] );
        $clis = $this->model->findAll();
        return resolve( $clis ? $clis : [] );
    }

}

// End of file
