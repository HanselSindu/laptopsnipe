<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	//buat ngerubah nama 'mulai' liat di config/routes.php

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

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('pages/services');
	}

	public function indexRank($ranks) {
		$data['rankings'] = $ranks;
		$this->load->view('pages/choices', $data);
	}

	public function browseLaptops() {
		$data['brands'] = $this->getBrands();
		$data['laptops'] = $this->getLaptops();
		$this->load->view('pages/browse', $data);
	}

	function chooseLaptopAdvanced() {
		$this->load->library('form_validation');
		//primary
		$this->form_validation->set_rules('cpu', 'CPU', 'required');
		$this->form_validation->set_rules('ram', 'RAM', 'required');
		$this->form_validation->set_rules('gpu', 'GPU', 'required');
		$this->form_validation->set_rules('storage', 'Storage', 'required');
		$this->form_validation->set_rules('battery', 'Battery', 'required');
		$this->form_validation->set_rules('audio', 'Audio', 'required');
		$this->form_validation->set_rules('keyboard', 'Keyboard', 'required');
		$this->form_validation->set_rules('wifi', 'Wifi', 'required');
		$this->form_validation->set_rules('porty', 'Porty', 'required');
		$this->form_validation->set_rules('durability', 'Durability', 'required');
		$this->form_validation->set_rules('warranty', 'Warranty', 'required');
		$this->form_validation->set_rules('cooling', 'Cooling', 'required');
		$this->form_validation->set_rules('screen-size', 'ScreenSize', 'required');
		//optionals checkboxes
		$optionals = array();
		$c = 0;
		if (isset($_POST['ssd'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['webcam'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['touchscreen'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['hdmi'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['lan_port'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['sd_card'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['include_os'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		//price
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('budget', 'Budget', 'required');

		$tobecalculated = array();
		$result = array();

		if ($this->form_validation->run()) {
			$this->load->model('services_model');
			$tobecalculated = $this->services_model->chooseAdvanced($optionals);
			if (!empty($tobecalculated)) {
				$result = $this->services_model->callFTOPSIS($tobecalculated, 'advanced');
			} else {
				$result = null;
			}

		}

		$this->indexRank($result);

	}

	function chooseLaptopPreset() {
		$this->load->library('form_validation');
		$optionals = array();
		$c = 0;
		if (isset($_POST['ssd'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['webcam'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['touchscreen'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['hdmi'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['lan_port'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['sd_card'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}
		if (isset($_POST['include_os'])) {
			$optionals[$c] = 1;
			$c++;} else {
			$optionals[$c] = 0;
			$c++;}

		$this->form_validation->set_rules('usage', 'Usage', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('budget', 'Budget', 'required');
		$this->form_validation->set_rules('screen-size', 'ScreenSize', 'required');
		$tobecalculated = array();
		$result = array();

		if ($this->form_validation->run()) {
			$this->load->model('services_model');
			$tobecalculated = $this->services_model->choosePreset($optionals);
			if (!empty($tobecalculated)) {
				$result = $this->services_model->callFTOPSIS($tobecalculated, 'preset');
			} else {
				$result = null;
			}

		}

		$this->indexRank($result);

	}

	function getLaptops() {
		$this->load->model('services_model');
		$result = $this->services_model->getAll();
		return $result;
	}

	function getBrands() {
		$this->load->model('services_model');
		$result = $this->services_model->getBrandList();
		return $result;
	}

}
