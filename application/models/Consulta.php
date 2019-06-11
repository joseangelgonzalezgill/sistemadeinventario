
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Consulta extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            
      
            $this->load->database();
        }
        
        public function reportegeneral($date1)
    {
        $query = $this->db->query("CALL licencia('$date1')");
      
         mysqli_next_result( $this->db->conn_id );
        if(!empty('$query'))
        {
             return $query->result_array();
        }
        else
        {
            return 'Ha ocurrido un error';
        }
    }
    

    
    }