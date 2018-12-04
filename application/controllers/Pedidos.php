<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller com os métodos de autenticação
 * para os Pedidos
 * 
 */
class Pedidos extends MY_Controller {

    /**
     * Principal model do controller
     *
     * @var [type]
     */
    public $model;
    public $modelItens;

    /**
     * Método construtor
     * 
     */
    public function __construct() {
        parent::__construct();
        

        // Carrega a model
        $this->load->model( [ 
                              'Pedidos_model',
                              'Produtos_model',
                              'PedidosProdutos_model'
                        ] );
        $this->model = $this->Pedidos_model;
        $this->modelItens = $this->PedidosProdutos_model;
    }

    public function insert() {
        require_env( [ 'client' ] );

        // Seta o formulário de validação
        set_form( [
            [
                'field'  => 'cliente',
                'label'  => 'Cliente',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um cliente para o pedido'
                ]
            ], [
                'field'  => 'total',
                'label'  => 'Total',
                'rules'  => 'required',
                'errors' => [   
                    'required'   => 'Você deve informar um valor total'
                ]
            ]
        ]);

        // Verifica se o formulário é válido
        if ( ! valid_form() ) return reject( validation_errors() );

        // Pega os dados do formulário do cliente
        $data = get_insert_form([
            'cliente'     => 'cliente', 
            'itens'       => 'itens',
            'total'       => 'total'  
        ]);
        if( !is_array( $data['itens'] ) || count( $data['itens'] ) == 0 ) {
            $this->model->delete( $id );
            return reject( '<p>Informe itens para o pedido!</p>' );
        }

        $id = $this->model->insert( [ 'id_cliente' => $data['cliente'], 'valorTotal' => $data['total'], 'data' => date( 'Y-m-d', time() ) ] );

        if( !$id ) {
            return reject( 'Não foi possivel inserir o pedido!' );
        }

        $data['id'] = $id;

        $itens = [];

        foreach ( $data['itens'] as $item ) {
            $produto = $this->Produtos_model->findById( $item['id'] );
            $dataItem = [ 'id_pedido' => $id, 'id_produto' => $item['id'], 'quantidade' => $item['quantidade'], 'valor' => number_format( $item['quantidade'] * $produto['preco'], 2 ) ];
            $idItem = $this->modelItens->insert( $dataItem );
            $this->Produtos_model->update( $item['id'], [ 'estoque' => $produto ['estoque'] - $item['quantidade'] ] );
            $dataItem['id'] = $idItem;
            $itens[] = $dataItem;
        }
        $data['itens'] = $itens;
        return resolve( $data );
    }

    public function list() {
        require_env( [ 'client' ] );
        $pedidos = $this->model->findAll();
        return resolve( $pedidos ? $pedidos : [] );
    }

    public function list_itens( $idPedido ) {
        require_env( [ 'client' ] );
        $itens = $this->modelItens->findByPedido( $idPedido );
        return resolve( $itens ? $itens : [] );
    }

}

// End of file
