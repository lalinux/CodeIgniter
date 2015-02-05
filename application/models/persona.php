<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	
	function add($data){
		$this->db->insert('persona',array('nombre'=>$data['nombre'],'edad'=>$data['edad']));
	}

}
?>