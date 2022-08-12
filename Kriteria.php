<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Kriteria extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Kriteria_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
       
    $kriteria = $this->Kriteria_model->getAll();
    $data['kriteria'] = $kriteria;
    $this->load->view('kriteria', $data);

  }


  public function add_criteria() {

    $data = array(
      'id_kriteria' => $this->input->post('id_kriteria'),
      'id_kriteria_bansos' => $this->input->post('id_kriteria_bansos'),
      'tipe_kriteria' => $this->input->post('tipe_kriteria'),
      'nilai_bobot' => $this->input->post('nilai_bobot')
    );

    $this->Kriteria_model->add_criteria($data);
    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('kriteria/view_criteria');

  }

  public function view_criteria () {
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