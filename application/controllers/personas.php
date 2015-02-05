<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personas extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('persona');
	}

	public function index()
	{
		$this->load->view('persona_vista');

	}

	public function add(){

		$data = array(
			'nombre' => $this->input->post('nombre'),
			'edad' => $this->input->post('edad')
		);
		$this->persona->add($data);
		$this->load->view('persona_vista');
		
	}
}
?>