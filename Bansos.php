<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Bansos extends CI_Controller 
{
    public function __construct() {
		parent::__construct();
		$this->load->model('BansosModel');
    }

    public function index() {
      $bansos = $this->BansosModel->getBansos();
      $data['bansos'] = $bansos;
      $this->load->view('bansos', $data);

      }

    public function add_bansos() {
    
      $data = array(
        'id_bansos' => $this->input->post('id_bansos'),
        'nama_bansos' => $this->input->post('nama_bansos'),
        'periode' => $this->input->post('periode')
      );
    
      $this->BansosModel->add_bansos($data);
      $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('bansos/view_bansos');
    }

//     public function ubah() {
//       $id_bansos = $this->input->post('id_bansos');
//           $data = array(
//             'id_bansos' => $this->input->post('id_bansos'),
//             'nama_bansos' => $this->input->post('nama_bansos'),
//             'periode' => $this->input->post('periode')
//       );
    
//       $this->BansosModel->ubah($data);
//       $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
// redirect('bansos/view_bansos');
//     }

    
   
    public function view_bansos () {
    $bansos = $this->BansosModel->getBansos();
    $data['bansos'] = $bansos;
    $this->load->view("include/head");
    $this->load->view("include/top-header");
    $this->load->view('bansos', $data);
    $this->load->view("include/admin/sidebar");
    $this->load->view("include/panel");
    $this->load->view("include/footer");
    $this->load->view("include/alert");
    }
   
    
}