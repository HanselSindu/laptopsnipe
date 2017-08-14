<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fuzzy extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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

	public function fuzzyEdit(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
    	$this->load->model('Fuzzy_model');
		$data['groups'] = $this->Fuzzy_model->getValuesWeight();
		$data['groupsa'] = $this->Fuzzy_model->getValuesAssess();
		$this->load->view('admin/fuzzyedit', $data);
	}

	function fuzzyUpdate(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id-val', 'IDVal', 'required'); //form validation rules
		$this->form_validation->set_rules('ling-var', 'LingVar', 'required'); 
		$this->form_validation->set_rules('l-val', 'LVal', 'required'); 
		$this->form_validation->set_rules('m-val', 'MVal', 'required');
		$this->form_validation->set_rules('u-val', 'UVal', 'required');
		$this->form_validation->set_rules('type-val', 'TypeVal', 'required');

		//$data = array($lingvar, $lval, $mval, $uval);

		if($this->form_validation->run()){

			$this->load->model('Fuzzy_model');
			$result = $this->Fuzzy_model->updateData();	

			
		if($result){

			echo "<script language=\"javascript\">alert('Update Success!');</script>";
			$this->fuzzyEdit();
			}
		}
		else{

			echo "<script language=\"javascript\">alert('Update Failed');</script>";
			$this->fuzzyEdit();
		}
	}



}
