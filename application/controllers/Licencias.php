<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Licencias extends CI_Controller {

public function __construct()
	{parent::__construct();

		$this->load->helper('url');
	        $this->load->database();
//		$this->load->library('Grocery_CRUD');
              
	}
    

    
  public function llamado() {
    		$this->load->view('Licencia');

  }
}