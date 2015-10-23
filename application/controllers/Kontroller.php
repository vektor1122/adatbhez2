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
								$this->load->library('form_validation');
								$this->load->helper('form');
        }

	public function index(){
$this->form_validation->set_message('required', '%s mezőt töltsd ki!');
		      $this->form_validation->set_rules('nev', 'Név', 'required');
          $this->form_validation->set_rules('orszag', 'Ország', 'required');
					$this->form_validation->set_rules('szuletes_d_ev', 'Születési év', 'required');
					$this->form_validation->set_rules('szuletes_d_honap', 'Születési honap', 'required');
					$this->form_validation->set_rules('szuletes_d_nap', 'Születési nap', 'required');
          $this->form_validation->set_rules('leg_m_veg', 'Legmagasabb végzetség', 'required');
          $this->form_validation->set_rules('munkahely', 'Munkahely', 'required');
          $this->form_validation->set_rules('beosztas', 'Beosztas', 'required');
          $this->form_validation->set_rules('email', 'E-mail', 'required');
          $adat = $this->input->post();
					if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('pages/index');
                }
                else
                {
									      $this->szavazo->uj_szavazo($adat);
                        $this->szavazo();
                }
		      }


	 public function szavazo(){

     $tabla_e=$this->szavazo->osszes_adat_a_tablabol();
     $tmp=$this->table->generate($tabla_e);
		 $data['tabla']=$tmp;

     $this->load->view('pages/szavazo',$data);
          }

}
