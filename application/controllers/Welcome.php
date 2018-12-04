<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function setNomeCompleto()
	{
		$this->load->model( 'Professores_model' );
		$professores = $this->Professores_model->findAll();
		foreach ( $professores as $prof ) {
			$this->Professores_model->update( $prof['id'], [ 'nomeCompleto' => $prof['nome'] .' ' .$prof['sobrenome'] ] );
		}
	}
	
	public function teste()
	{
		$this->load->model( 'Professores_model' );
		$professor = $this->Professores_model->findById( 21 );
		echo "<pre>";
		$desc = '<p>' .$professor['descricao'] ."</p>";
		$desc = preg_replace("/(\\r)?\\n/i", "</p><p>", $desc);
		var_dump($desc);
	}
}
