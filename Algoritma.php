<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Algoritma extends CI_Controller 
{
    public function __construct() {
		parent::__construct();
		$this->load->model('AlgoritmaModel');
    }

  
    public function index(){
      $algoritma = $this->AlgoritmaModel->getAll();
      $data['algoritma'] = $algoritma;
        $this->load->view("include/head");
        $this->load->view("include/top-header");
        $this->load->view('algoritma_view', $data);
        $this->load->view("include/admin/sidebar");
        $this->load->view("include/panel");
        $this->load->view("include/footer");
        $this->load->view("include/alert");
    }
   
    
}