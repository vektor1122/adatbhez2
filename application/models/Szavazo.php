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
    public function uj_szavazo($adat){
      $tmp=$adat['szuletes_d_ev'].'-'.$adat['szuletes_d_honap'].'-'.$adat['szuletes_d_nap'];
      unset($adat['szuletes_d_ev']);
      unset($adat['szuletes_d_honap']);
      unset($adat['szuletes_d_nap']);
      $adat['szuletes_d']=$tmp;
      $this->db->insert('szavazo',$adat);
    }
}
?>
