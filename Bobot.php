<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Bobot extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Bobot_model');
  }

  public function index()
  {
       
    $kriteria_bansos = $this->Bobot_model->getAll();
    $data['kriteria_bansos'] = $kriteria_bansos;
    $this->load->view('kriteria_bansos', $data);

  }

  public function view_pembobotan () {
    $kriteria_bansos = $this->Bobot_model->getAll();
    $data['kriteria_bansos'] = $kriteria_bansos;
    $this->load->view("include/head");
    $this->load->view("include/top-header");
    $this->load->view('bobot', $data);
    $this->load->view("include/admin/sidebar");
    $this->load->view("include/panel");
    $this->load->view("include/footer");
    $this->load->view("include/alert");
  }

}
?>
