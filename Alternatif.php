<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Alternatif extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Alternatif_model');
  }

  public function index() {
    $alternatif = $this->Alternatif_model->All();
    $data['alternatif'] = $alternatif;
    $this->load->view('alternatif', $data);	  
	}

  public function view_alternatif () {
    $alternatif = $this->Alternatif_model->All();
    $data['alternatif'] = $alternatif;
    //  var_dump($data['alternatif']);exit;
    $this->load->view("include/head");
    $this->load->view("include/top-header");
    $this->load->view('alternatif', $data);
    $this->load->view("include/admin/sidebar");
    $this->load->view("include/panel");
    $this->load->view("include/footer");
    $this->load->view("include/alert");

  }
 
}
?>
