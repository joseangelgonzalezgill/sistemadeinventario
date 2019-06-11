<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrodeInventario extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
//
		$this->load->helper('url');
	        $this->load->database();
        	$this->load->library('Grocery_CRUD');
              
	}
    
  public function registrodeinventario() {
       $crud = new grocery_CRUD();
        

$crud->set_table('solicitudes')      
 ->set_subject('SOLICITUDES');
     $crud->columns('docente','fechadesolicitud','numerodelaboratorio','materia','horario','cantidad');
     
     
// $crud->display_as('descripcion1','Nombre')->display_as('nocedula','Cedula');
// $crud->display_as('fechanac','Fecha de Nacimiento')->display_as('domicilio','Direccion');
  $crud->unset_read();
      
        $crud->unset_edit();
        $crud->unset_delete();
//  $crud->columns(array('Descripcion1','Fechanac'));
//  $crud->add_action ( 'Informacion del Piloto' , '' , 'informacion/consulta' , '' , array ( $this , 'consulta' ) ) ;
    $output = $crud->render();
    $this->load->view('alcontado', $output); 

}    


}
