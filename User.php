<?php
defined('BASEPATH') OR exit('No direct script access allowed ');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //load model
        $this->load->model('user_model');
    }

    public function index(){
        $this->load->view('index');
    }
    public function proses(){
		$username = $this->input->post('username', TRUE);
        $password = MD5($this->input->post('password', TRUE));
        
		if($this->user_model->login_user($username,$password)){
			redirect('home');
		}else{
			$this->session->set_flashdata('error','USERNAME ATAU PASSWORD SALAH !!!');
			redirect('');
		}
    }
    
    public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		redirect('user');
	}


}
?>

