<?php
function __construct()
{
    //parent:: __construct();
    $this->load->database();
}
//Creamos la consulta de una tabla
class Login_model extends CI_Model{ //Inicio de consulta
    
    public function verificarUsuario($user, $password)
    {
    	$this->db->where('user="'.$user.'" and password="'.$password.'"');

    	//$x se guarda el resultado de la consulta
    	$x=$this->db->get('usuario');
    	if($x->result_array())
    	{
    		return 1;
    	}
    	else
    	{
    		return 0;
    	}

    }
}//Fin de consulta
?>

