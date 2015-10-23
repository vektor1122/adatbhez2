<?php
class Szavazo extends CI_Model{

    public function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function osszes_adat_a_tablabol(){
      $query=$this->db->query("SELECT * FROM szavazo;");
      return $query;
    }
}
?>
