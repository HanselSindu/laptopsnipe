<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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

	public function formInputLaptop(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
		$this->load->model('Form_model');
		$data['groups'] = $this->Form_model->getBrands();
		$data['os'] = $this->Form_model->getOS();
    	$this->load->view('admin/formInputLaptop', $data);

		//echo '<a href="'.base_url().'admin/Login/logout">Logout</a>';
	}

	public function formScoreLaptop(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
		$this->load->model('Form_model');
		$data['groups'] = $this->Form_model->getScores();
		$data['reviews'] = $this->Form_model->getUnreviewedAlternatives();#
		$data['users'] = $this->Form_model->getReviewers();
		$data['fuzzy'] = $this->Form_model->getAssessmentRatings();
    	$this->load->view('admin/formScoreLaptop', $data);
	}

	public function formPresetWeight(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
		$this->load->model('Form_model');
		$data['groups'] = $this->Form_model->getUsages();
		$data['weight'] = $this->Form_model->getWeightings();
		$data['users'] = $this->Form_model->getReviewers();
		$data['fuzzy'] = $this->Form_model->getImportanceRatings();
    	$this->load->view('admin/formPresetWeight', $data);
	}

		function inputLaptop(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('brand', 'Brand', 'required'); //form validation rules
		$this->form_validation->set_rules('model-name', 'ModelName', 'required'); 
		$this->form_validation->set_rules('price', 'Price', 'required'); 
		$this->form_validation->set_rules('cpu', 'CPU', 'required'); 
		$this->form_validation->set_rules('ram', 'RAM', 'required');
		$this->form_validation->set_rules('gpu', 'GPU', 'required'); 
		$this->form_validation->set_rules('video-memory', 'VideoMem', 'required');
		$this->form_validation->set_rules('storage-capacity', 'Storage', 'required'); 
		$this->form_validation->set_rules('screen-size', 'ScreenSize', 'required');
		$this->form_validation->set_rules('screen-res', 'ScreenRes', 'required');
		$this->form_validation->set_rules('audio', 'Audio', 'required'); 
		$this->form_validation->set_rules('keyboard', 'Keyboard', 'required');
		$this->form_validation->set_rules('battery', 'Battery', 'required'); 
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_rules('ssd', 'SSD', 'required'); 
		$this->form_validation->set_rules('webcam', 'Webcam', 'required');
		$this->form_validation->set_rules('touchscreen', 'Touchscreen', 'required');
		$this->form_validation->set_rules('bluetooth', 'Bluetooth', 'required'); 
		$this->form_validation->set_rules('hdmi', 'HDMI', 'required');
		$this->form_validation->set_rules('lan', 'LAN', 'required'); 
		$this->form_validation->set_rules('sdcard', 'SDCard', 'required');
		$this->form_validation->set_rules('os', 'OS', 'required');
		
		if($this->form_validation->run()){ //form validation lg bermasalah ini
			//true
			//model function
			$this->load->model('Form_model');
			$result = $this->Form_model->input_laptop();
		if($result){
			//if success
			echo "<script language=\"javascript\">alert('Insert Success!');</script>";
			$this->formInputLaptop();
		}
			// if($this->Login_model->input_laptop()){
			// 	redirect(base_url().'admin/Form/formInputLaptop');
			// }
			// else{
			// 	$this->session->set_flashdata('error', 'Product existing');
			// 	redirect(base_url().'admin/Form/formInputLaptop');	
			// }
		} //form validation
		else{
			//false
			echo "<script language=\"javascript\">alert('Insert Failed');</script>";

			$this->formInputLaptop();
		}
	}

		function inputScore(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('rev-name', 'RevName', 'required');
			$this->form_validation->set_rules('prod-name', 'ProdName', 'required');
			$this->form_validation->set_rules('cpu', 'CPU', 'required'); 
			$this->form_validation->set_rules('gpu', 'GPU', 'required');
			$this->form_validation->set_rules('battery', 'Battery', 'required');
			$this->form_validation->set_rules('audio', 'Audio', 'required');
			$this->form_validation->set_rules('keyboard', 'Keyboard', 'required');
			$this->form_validation->set_rules('wifi', 'Wifi', 'required');
			$this->form_validation->set_rules('durability', 'Durability', 'required');
			$this->form_validation->set_rules('warranty', 'Warranty', 'required');
			$this->form_validation->set_rules('cooling', 'Cooling', 'required');
			$this->form_validation->set_rules('id-prod', 'IdProd', 'required'); 
			 
		//if($this->form_validation->run()){ 
			$this->load->model('Form_model');
			$result = $this->Form_model->inputScoreLaptop();
			if($result){
				echo "<script language=\"javascript\">alert('Insert Success!');</script>";
				$this->formScoreLaptop();
			}
		//} 
		else{
			echo "<script language=\"javascript\">alert('Insert Failed');</script>";
			$this->formScoreLaptop();
		}

		}

		function inputPresetWeight(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('rev-name', 'RevName', 'required');
			$this->form_validation->set_rules('id-usage', 'IdUsage', 'required'); 
			$this->form_validation->set_rules('usage-name', 'UsageName', 'required'); 
			$this->form_validation->set_rules('cpu', 'CPU', 'required'); 
			$this->form_validation->set_rules('gpu', 'GPU', 'required');
			$this->form_validation->set_rules('battery', 'Battery', 'required');
			$this->form_validation->set_rules('audio', 'Audio', 'required');
			$this->form_validation->set_rules('keyboard', 'Keyboard', 'required');
			$this->form_validation->set_rules('wifi', 'Wifi', 'required');
			$this->form_validation->set_rules('durability', 'Durability', 'required');
			$this->form_validation->set_rules('warranty', 'Warranty', 'required');
			$this->form_validation->set_rules('cooling', 'Cooling', 'required');
			$this->form_validation->set_rules('ram', 'RAM', 'required');
			$this->form_validation->set_rules('video-mem', 'VideoMem', 'required');
			$this->form_validation->set_rules('storage', 'Storage', 'required');
			$this->form_validation->set_rules('weight', 'Weight', 'required');
			 
		//if($this->form_validation->run()){ 
			$this->load->model('Form_model');
			$result = $this->Form_model->inputWeight();
			if($result){
				echo "<script language=\"javascript\">alert('Insert Success!');</script>";
				$this->formPresetWeight();
			}
		//} 
		else{
			echo "<script language=\"javascript\">alert('Insert Failed');</script>";
			$this->formPresetWeight();
		}

		}

}
