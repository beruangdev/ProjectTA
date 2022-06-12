<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Kriteria extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Kriteria_model');
  }

  public function index()
  {
       
    $kriteria = $this->Kriteria_model->getAll();
    $data['kriteria'] = $kriteria;
    $this->load->view('kriteria', $data);

  }

  public function view_tambah () {
    $kriteria = $this->Kriteria_model->getAll();
    $data['kriteria'] = $kriteria;
    // var_dump($data['kriteria']);exit;
    $this->load->view("include/head");
    $this->load->view("include/top-header");
    $this->load->view('kriteria_views', $data);
    $this->load->view("include/admin/sidebar");
    $this->load->view("include/panel");
    $this->load->view("include/footer");
    $this->load->view("include/alert");
  }

}
?>
