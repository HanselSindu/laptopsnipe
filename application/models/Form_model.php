<?php

class form_model extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function __construct() {
		parent::__construct();
	}

	public function get($id){
		return $this->db->get_where('posts', array('id' => $id))->row();
	}

	public function get_all() {
		$query = $this->db->get('posts');
		return $query->result();
	}

	public function insert() {
		$this->title = 'CodeIgniter 101';
		$this->content = '<p>Say what you want about CI, it still rocks</p>';
		$this->date = time();

		$this->db->insert('posts', $this);
	}

	public function update($id) {
		$this->title = 'CodeIgniter 101';
		$this->content = '<p>Say what you want about CI, it still rocks</p>';
		$this->date = time();

		$this->db->update('posts', $this, array('id' => $id));
	}

	public function delete($id){
		$this->db->delete('posts', array('id' => $id)); 
	}

	function getBrands(){

		$query = $this->db->query('SELECT * FROM brands');

        return $query->result();
	}

	function getOS(){

		$query = $this->db->query('SELECT * FROM os');

        return $query->result();
	}


	function input_laptop(){
			$brand = $this->input->post('brand');
			$modelname = $this->input->post('model-name');
			$price = $this->input->post('price');
			$cpu = $this->input->post('cpu');
			$ram = $this->input->post('ram');
			$gpu = $this->input->post('gpu');
			$videomem = $this->input->post('video-memory');
			$storage = $this->input->post('storage-capacity');
			$screensize = $this->input->post('screen-size');
			$screenres = $this->input->post('screen-res');
			$audio = $this->input->post('audio');
			$keyboard = $this->input->post('keyboard');
			$battery = $this->input->post('battery');
			$weight = $this->input->post('weight');
			$ssd = $this->input->post('ssd');
			$webcam = $this->input->post('webcam');
			$touchscreen = $this->input->post('touchscreen');
			$bluetooth = $this->input->post('bluetooth');
			$hdmi = $this->input->post('hdmi');
			$lan = $this->input->post('lan');
			$sdcard = $this->input->post('sdcard');
			$os = $this->input->post('os');

			//hdd+ssd
			$storage = $storage + $ssd;

//$this->db->escape($id) This function determines the data type so that it can escape only string data. It also automatically adds single quotes around the data so you don’t have to

			$sql = "INSERT INTO laptops (id_product, id_brand, product_name, price, cpu, ram, gpu, video_mem, storage_capacity, screen_size, screen_res, audio, keyboard, battery, weight, ssd, webcam, touchscreen, bluetooth, hdmi, lan_port, sd_card, include_os) 
			VALUES (NULL, ".$this->db->escape($brand).", ".$this->db->escape($modelname).", ".$this->db->escape($price).", ".$this->db->escape($cpu).", 
					".$this->db->escape($ram).", ".$this->db->escape($gpu).", ".$this->db->escape($videomem).",
					".$this->db->escape($storage).",".$this->db->escape($screensize).",
					".$this->db->escape($screenres).", ".$this->db->escape($audio)." ,
					".$this->db->escape($keyboard).",".$this->db->escape($battery).",
					".$this->db->escape($weight).", ".$this->db->escape($ssd).", ".$this->db->escape($webcam).", ".$this->db->escape($touchscreen).", ".$this->db->escape($bluetooth).", ".$this->db->escape($hdmi).", ".$this->db->escape($lan).", ".$this->db->escape($sdcard).", ".$this->db->escape($os).")";

			//$last_id = $this->db->insert_id(); //for last inserted id

			 		
			// $sql1 = "INSERT INTO products (id_product, product_name, price) 
			// VALUES ('".$last_id."', ".$this->db->escape($modelname).", ".$this->db->escape($price).")";

			// $sql2 = "INSERT INTO optionals (id_product, ssd, webcam, touchscreen, bluetooth, hdmi, lan_port, sd_card, include_os) 
			// VALUES ('".$last_id."',".$this->db->escape($ssd).", ".$this->db->escape($webcam).", ".$this->db->escape($touchscreen).", ".$this->db->escape($bluetooth).", ".$this->db->escape($hdmi).", ".$this->db->escape($lan).", ".$this->db->escape($sdcard).", ".$this->db->escape($os).")";

			$result = $this->db->query($sql);
			//$result1 = $this->db->query($sql1);
			//$result2 = $this->db->query($sql2);

			if($this->db->affected_rows()===1){
				return true;
			}
			else{
				return false;
			}
	}

	function inputScoreLaptop(){
			$idprod = $this->input->post('id-prod');
			$revname = $this->input->post('rev-name');
			$prodname = $this->input->post('prod-name');
			$cpu = $this->input->post('cpu');
			$gpu = $this->input->post('gpu');
			$battery = $this->input->post('battery');
			$audio = $this->input->post('audio');
			$keyboard = $this->input->post('keyboard');
			$wifi = $this->input->post('wifi');
			$durability = $this->input->post('durability');
			$warranty = $this->input->post('warranty');
			$cooling = $this->input->post('cooling');

			$sql = "INSERT INTO scores_lv (id_review, id_user, id_product, cpu_performance, gpu_performance, battery_life, audio_quality, keyboard_quality, wifi, durability, warranty, cooling_systems) 
			VALUES (NULL, ".$this->db->escape($revname).", ".$this->db->escape($idprod).", 
					".$this->db->escape($cpu).", ".$this->db->escape($gpu).", ".$this->db->escape($battery).", 
					".$this->db->escape($audio).", ".$this->db->escape($keyboard).",".$this->db->escape($wifi).",
					".$this->db->escape($durability).", ".$this->db->escape($warranty).", 
					".$this->db->escape($cooling).")";

			$result = $this->db->query($sql);

			if($this->db->affected_rows()===1){
				return true;
			}
			else{
				return false;
			}
	}

	function inputWeight(){
			$idusage = $this->input->post('id-usage');
			$revname = $this->input->post('rev-name');
			$usage = $this->input->post('usage-name');
			$cpu = $this->input->post('cpu');
			$gpu = $this->input->post('gpu');
			$battery = $this->input->post('battery');
			$audio = $this->input->post('audio');
			$keyboard = $this->input->post('keyboard');
			$wifi = $this->input->post('wifi');
			$durability = $this->input->post('durability');
			$warranty = $this->input->post('warranty');
			$cooling = $this->input->post('cooling');
			$ram = $this->input->post('ram');
			$videomem = $this->input->post('video-mem');
			$storage = $this->input->post('storage');
			$weight = $this->input->post('weight');

			$sql = "INSERT INTO preset_weight_lv (id_weighting, id_user, id_usage, cpu, gpu, battery, audio, keyboard, wifi, durability, warranty, cooling, ram, video_mem, storage, weight) 
			VALUES (NULL, ".$this->db->escape($revname).", ".$this->db->escape($idusage).", 
					".$this->db->escape($cpu).", ".$this->db->escape($gpu).", ".$this->db->escape($battery).", 
					".$this->db->escape($audio).", ".$this->db->escape($keyboard).",".$this->db->escape($wifi).",
					".$this->db->escape($durability).", ".$this->db->escape($warranty).", 
					".$this->db->escape($cooling).",".$this->db->escape($ram).",".$this->db->escape($videomem).",".$this->db->escape($storage).",".$this->db->escape($weight).")";

			$result = $this->db->query($sql);

			if($this->db->affected_rows()===1){
				return true;
			}
			else{
				return false;
			}
	}

	function getScores(){
		$this->db->from('scores_lv');
		$this->db->join('users', 'users.id=scores_lv.id_user');
		$this->db->join('laptops', 'laptops.id_product=scores_lv.id_product');
		$this->db->join('brands', 'brands.id_brand=laptops.id_brand');
		$this->db->order_by('scores_lv.id_product', 'asc');
		$sql = $this->db->get();

		return $sql->result();
	}

	function getUnreviewedAlternatives(){
		$this->db->from('laptops');
		$this->db->join('brands', 'brands.id_brand=laptops.id_brand');

		$sql = $this->db->get();

		return $sql->result();	
	}

	function getReviewers(){
		$this->db->select('username, id');
		$this->db->from('users');

		$sql = $this->db->get();

		return $sql->result();	
	}

	function getAssessmentRatings(){
		$this->db->from('fuzzyassess');
		$this->db->order_by('u_a');
		$sql = $this->db->get();
		
		return $sql->result();	
	}

	function getUsages(){
		$this->db->from('us4ge');

		$sql = $this->db->get();
		
		return $sql->result();	
	}

	function getWeightings(){
		$this->db->from('preset_weight_lv');
		$this->db->join('us4ge', 'us4ge.id_usage = preset_weight_lv.id_usage');
		$this->db->join('users', 'users.id = preset_weight_lv.id_user');

		$sql = $this->db->get();
		
		return $sql->result();	
	}

	function getImportanceRatings(){
		$this->db->from('fuzzyweight');
		$this->db->order_by('u_w');
		$sql = $this->db->get();
		
		return $sql->result();	
	}
	
	}

