<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller com os métodos de autenticação
 * para os Usuarios
 * 
 */
class Usuarios extends MY_Controller {

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
                              'Usuarios_model',
                        ] );
        $this->model = $this->Usuarios_model;
    }

    /**
     * Faz o login do cliente no sistema
     *
     * @return void
     */
    public function login() {
        require_env( [ 'client' ] );

        // Seta o formulário de validação
        set_form( [
            [
                'field'  => 'senha',
                'label'  => 'Senha',
                'rules'  => 'required|min_length[6]|max_length[16]',
                'errors' => [   
                    'required'   => 'Você deve informar uma senha',
                    'min_length' => 'A senha deve conter pelo menos 6 caracteres',
                    'max_length' => 'A senha não pode conter mais de 16 caracteres'
                ]
            ], [
                'field'  => 'email',
                'label'  => 'E-mail',
                'rules'  => 'valid_email|required',
                'errors' => [   
                    'required'    => 'Você deve informar um email',
                    'valid_email' => 'Você deve digitar um e-mail válido',
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os items do post
        $email = post( 'email' );
        $senha = post( 'senha' );

        // Faz o login
        if ( $login = $this->model->login( $email, $senha ) ) {
            return resolve( $login );

        } else return reject( 'E-mail ou senha estão incorretos' );
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
                'field'  => 'senha',
                'label'  => 'Senha',
                'rules'  => 'required|min_length[6]|max_length[16]',
                'errors' => [   
                    'required'   => 'Você deve informar uma senha',
                    'min_length' => 'A senha deve conter pelo menos 6 caracteres',
                    'max_length' => 'A senha não pode conter mais de 16 caracteres'
                ]
            ], [
                'field'  => 'email',
                'label'  => 'E-mail',
                'rules'  => 'valid_email|required',
                'errors' => [   
                    'required'    => 'Você deve informar um email',
                    'valid_email' => 'Você deve digitar um e-mail válido',
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'senha'       => 'senha',      
            'email'       => 'email', 
            'nome'        => 'nome'  
        ]);

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
                'field'  => 'senha',
                'label'  => 'Senha',
                'rules'  => 'required|min_length[6]|max_length[16]',
                'errors' => [   
                    'required'   => 'Você deve informar uma senha',
                    'min_length' => 'A senha deve conter pelo menos 6 caracteres',
                    'max_length' => 'A senha não pode conter mais de 16 caracteres'
                ]
            ], [
                'field'  => 'email',
                'label'  => 'E-mail',
                'rules'  => 'valid_email|required',
                'errors' => [   
                    'required'    => 'Você deve informar um email',
                    'valid_email' => 'Você deve digitar um e-mail válido',
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $dataCli = get_insert_form([
            'id'          => 'id',      
            'senha'       => 'senha',      
            'email'       => 'email', 
            'nome'        => 'nome'  
        ]);

        $id = $this->model->update( $dataCli['id'], $dataCli );

        if( $id ) {
            return resolve( $dataCli );
        } else {
            return reject( 'Não foi possivel inserir o usuario!' );
        }
    }

    public function delete($id) {
        $usuario = $this->model->findById( $id );
        if( !$usuario ) {
            return reject( 'Usuário não encontrado' );
        }  
        $this->model->delete( $id );
        return resolve( 'Usuário deletado com sucesso' );
    }

    public function list() {
        require_env( [ 'client' ] );
        $clis = $this->model->findAll();
        return resolve( $clis ? $clis : [] );
    }

}

// End of file
