<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
    parent::__construct();
  }

	// public function index(){
	// 	//$this->load->view('welcome_message');
 //    	//$this->load->view('pages/home');
 //    	$this->load->view('admin/login');
	// }

	function login(){
		$data['title'] = 'CodeIgniter';
		$this->load->view('admin/login', $data);
	}

	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('form-username', 'Username', 'required'); //form validation rules
		$this->form_validation->set_rules('form-password', 'Password', 'required');
		if($this->form_validation->run()){
			//true
			$username = $this->input->post('form-username');
			$password = $this->input->post('form-password');
			//model function
			$this->load->model('Login_model');
			if($this->Login_model->can_login($username, $password)){
				$session_data = array(
					'form-username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'admin/Login/enter');
			}
			else{
				$this->session->set_flashdata('error', 'Invalid username or password');
				redirect(base_url().'admin/Login/login');	
			}
		}
		else{
			//false
			$this->login();
		}
	}

	function enter(){
		if($this->session->userdata('form-username')!=''){
			//echo '<h2>Welcome - '.$this->session->userdata('form-username').'</h2>';
			redirect(base_url().'admin/Home/Dashboard');
			echo '<a href="'.base_url().'admin/Login/logout">Logout</a>';
		}
		else{
			redirect(base_url().'admin/Login/login');
		}
	}

	function logout(){
		$this->session->unset_userdata('form-username');
		session_destroy();
		redirect(base_url().'admin/Login/login');
	}

}
