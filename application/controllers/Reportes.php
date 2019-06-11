<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

  public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	        $this->load->database();
 		$this->load->library('Grocery_CRUD');
              
	}
    
  public function reportes() {
       $crud = new grocery_CRUD();
        

$crud->set_table('plandevuelo')      
 ->set_subject('Estado de Licencias');
     $crud->columns('descripcion1','nocedula','fechanac','domicilio');
 $crud->display_as('descripcion1','Nombre')->display_as('nocedula','Cedula');
 $crud->display_as('fechanac','Fecha de Nacimiento')->display_as('domicilio','Direccion');
  $crud->unset_read();
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
//  $crud->columns(array('Descripcion1','Fechanac'));
  $crud->add_action ( 'Informacion del Piloto' , '' , 'informacion/consulta' , '' , array ( $this , 'consulta' ) ) ;
    $output = $crud->render();
    $this->load->view('alcontado', $output); 

}    

function consulta()
{   
     $primary_key=  $this->input->post('licencia'); 
  $this->load->model('consulta');
$reportes['indice']= $this->consulta->reportegeneral($primary_key);
//print_r($reportes);

$this->load->view('imprimirinforme', $reportes);   

  
}

}
