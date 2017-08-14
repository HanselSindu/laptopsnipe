<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCDM_FTOPSIS extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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


	public function fuzzyTopsisOriginal(){ //tak rename sek, ini yg asli
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
		$this->load->model('mcdm_ftopsis_model');
		$wdb_array = array('W_H', 'W_L', 'W_M', 'W_VH');
		$data['groups_w'] = $this->mcdm_ftopsis_model->getSpecificValuesWeight($wdb_array);
		$valdb_array = array('9', '29', '11'); //idprods
		$data['groups_val'] = $this->mcdm_ftopsis_model->getAssessmentValues($valdb_array);
		$data['groups_crisp'] = $this->mcdm_ftopsis_model->getCrispScores($valdb_array);

		$adb_array = array('A_G', 'A_MG', 'A_VG', 'A_G', 'A_F');
		$data['groups_a'] = $this->mcdm_ftopsis_model->getSpecificValuesAssess($adb_array);
		//$data['groups_norm'] = $this->mcdm_ftopsis_model->normalizeFDM($data['groups_val']);
		
		$weight_personal = array('W_H', 'W_VH', 'W_H', 'W_MH','W_M', 'W_ML', 'W_M', 'W_M', 'W_H');
		$weight_personal_combine = array('W_H', 'W_VH', 'W_H', 'W_MH','W_M', 'W_ML', 'W_M', 'W_M', 'W_H', 'W_H', 'W_MH','W_M', 'W_ML', 'W_MH');
		//$weight_personal_combine = array('W_H', 'W_VH', 'W_H', 'W_MH','W_M', null, null, null, null, null, null, null, null, null);
		// $data['groups_weight_personal'] = $this->mcdm_ftopsis_model->personalFuzzyWeight($weight_personal);
		
		//$data['groups_weight'] = $this->mcdm_ftopsis_model->weightFDM($data['groups_norm'], $data['groups_weight_personal']);
		
		$data['groups_weight_personal'] = $this->mcdm_ftopsis_model->personalFuzzyWeight($weight_personal_combine);

		//$data['groups_ranking'] = $this->mcdm_ftopsis_model->calculateDistance($data['groups_weight']);
		
		$data['groups_combined'] = $this->mcdm_ftopsis_model->combineFuzzyCrisp($data['groups_val'],$data['groups_crisp']);
		$data['groups_norm'] = $this->mcdm_ftopsis_model->normalizeFDM($data['groups_combined']);

		$data['groups_weight'] = $this->mcdm_ftopsis_model->weightFDM($data['groups_norm'], $data['groups_weight_personal']);
		$data['groups_ranking'] = $this->mcdm_ftopsis_model->calculateDistance($data['groups_weight']);
		$data['groups_rankings'] = $this->mcdm_ftopsis_model->fuzzyTOPSIS($valdb_array, $weight_personal_combine, 'advanced');

		$data['groups_type'] = $this->mcdm_ftopsis_model->getCriteriaTypes();

		$this->load->view('admin/fuzzytopsis', $data);
	}

	public function fuzzyTopsis(){ //Dummy Version
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
		$this->load->model('mcdm_ftopsis_dummy');
		
		//------------------------------------------------------------------
		$valdb_idprods = array('22', '32', '42', '52');
		//$weight_personal_combine = array('W_H', 'W_VH', 'W_H', 'W_MH','W_M'); //TC1
		$weight_personal_combine = array('W_M', 'W_H', 'W_MH', 'W_VH','W_ML'); //TC2
		//$weight_personal_combine = array('W_L', 'W_ML', 'W_M', 'W_VH','W_H'); //TC3
		//------------------------------------------------------------------
		$data['weight'] = $this->mcdm_ftopsis_dummy->personalFuzzyWeight($weight_personal_combine);
		$weight = $this->mcdm_ftopsis_dummy->personalFuzzyWeight($weight_personal_combine);

		$data['groups_fuzzy'] = $this->mcdm_ftopsis_dummy->getAssessmentValues($valdb_idprods);
		$data['groups_crisp'] = $this->mcdm_ftopsis_dummy->getCrispScores($valdb_idprods);
		$fuzzy = $this->mcdm_ftopsis_dummy->getAssessmentValues($valdb_idprods);
		$crisp = $this->mcdm_ftopsis_dummy->getCrispScores($valdb_idprods);
		$data['groups_combined'] = $this->mcdm_ftopsis_dummy->combineFuzzyCrisp($fuzzy, $crisp);
		$combined = $this->mcdm_ftopsis_dummy->combineFuzzyCrisp($fuzzy, $crisp);
		$data['groups_normalized'] = $this->mcdm_ftopsis_dummy->normalizeFDM($combined);
		$nfdm = $this->mcdm_ftopsis_dummy->normalizeFDM($combined);
		$data['groups_weighted'] = $this->mcdm_ftopsis_dummy->weightFDM($nfdm, $weight);
		$data['groups_rankings'] = $this->mcdm_ftopsis_dummy->fuzzyTOPSIS($valdb_idprods, $weight_personal_combine, 'advanced');

		$this->load->view('admin/fuzzytopsis', $data);
	}

	function weightingAlt($id){
		$this->load->model('mcdm_ftopsis_model');
		$w_array = array('W_H', 'W_L', 'W_M', 'W_VH');
		$data['groups_w'] = $this->mcdm_ftopsis_model->getSpecificValuesWeight($w_array);
		$a_array = array('A_G', 'A_MG', 'A_VG', 'A_F');
		$data['groups_a'] = $this->mcdm_ftopsis_model->getSpecificValuesAssess($a_array);
		return $data;
	}



}
