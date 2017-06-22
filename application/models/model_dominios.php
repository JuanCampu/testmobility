<?php
  /**
   *
   */
  class Model_dominios extends CI_Model{

    function __construct(){
      parent::__construct();
    }

    function getDomains(){
      $query = $this->db->query('SELECT dominio_descripcion FROM movcom_dominios');

      if($query->num_rows()>0){
        return  $query->result();
      }else{
        return NULL;
      }
    }

  }
  
 ?>
