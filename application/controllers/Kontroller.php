<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
        {
                parent::__construct();
                $this->load->model('szavazo');
								$this->load->library('table');
                $this->load->helper('url_helper');
        }

	public function index(){

		      $this->load->view('pages/index');

		      }


	 public function szavazo(){

     $tabla_e=$this->szavazo->osszes_adat_a_tablabol();
     $tmp=$this->table->generate($tabla_e);
		 $data['tabla']=$tmp;

     $this->load->view('pages/szavazo',$data);




     }
}
