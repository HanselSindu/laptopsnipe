<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller { //buat ngerubah nama 'mulai' liat di config/routes.php

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

	public function dataLaptop(){
		if(!$this->session->userdata('form-username')){
			redirect(base_url().'admin/Login/login');
		}else
    	$this->load->model('Tables_model');
		$data['groups'] = $this->Tables_model->getSpecs();
		$this->load->view('admin/dataLaptop', $data);
	}

	function updateLaptop() 
{   
    $data = array(
        'table_name' => 'your_table_name_to_update', // pass the real table name
        'id' => $this->input->post('id'),
        'price' => $this->input->post('price')
    );

    $this->load->model('Tables_model'); // load the model first
    if($this->Tables_model->updateData($data)) // call the method from the model
    {
        dataLaptop();// update successful
    	echo 'success';
    }
    else
    {
    	dataLaptop();
    	echo 'epic fail';
        // update not successful
    }

}


}
