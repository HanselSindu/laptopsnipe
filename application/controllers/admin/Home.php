<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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
 //    	$this->load->view('admin/home');
	// }

	public function Dashboard(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
    	$this->load->view('admin/home');
    	//$this->load->view('admin/sidebar');
		//echo '<a href="'.base_url().'admin/Login/logout">Logout</a>';
	}


}
