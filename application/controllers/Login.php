<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('index');
	}
        
        public function InicioSesion()
	{
		$this->load->helper('url'); //Instaciamos url's dinamicos//

		//Recuperamos datos del formulario//
		$user =$this->input->POST('user');
		$password = $this->input->post('password');
		//---------------------------------------------

        //Llamamos al modelo//
		$this->load->model('Login_model', 'LM', true);

		//Utilizamos metodo del modelo//
		$resultado=$this->LM->verificarUsuario($user, $password);
		if ($resultado==1) {
            $this->load->view('mensaje');
		}
		else
		{
			$this->index();
		}

		//$this->load->view('mensaje');
	}
}
