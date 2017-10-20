<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//$this->load->model('form_model');  

	}


	public function index()
	{
		$this->load->view('formulario');
	}

	function validar()
	{
     //echo "Hola<br>";
	//echo Aqui estoy recibiendo la prueba.
        
		$name = $this->input->post('claudia');
		$lastname = $this->input->post('millan');
		$email = $this->input->post('correo');

		echo "Nombre: ".$name."  Apellido: ".$lastname. "correo:". $email; 
        //Aqui estamos creando el array
		$data = array('nombre' => $this->input->post('claudia'),'apellido' => $this->input->post('millan'), "email"=> $this->input->post('correo'));


		//Aqui se llama la funcion para guardar en la BD
		$this->form_model->guardar($data);
      }

}
