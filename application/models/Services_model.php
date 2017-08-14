<?php

class services_model extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function __construct() {
		parent::__construct();
	}

	public function get($id) {
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

	public function delete($id) {
		$this->db->delete('posts', array('id' => $id));
	}

	function getBrands() {

		$query = $this->db->query('SELECT * FROM brands');

		return $query->result();
	}

	function chooseAdvanced($optionals) {
		//primary
		$cpu = $this->input->post('cpu');
		$ram = $this->input->post('ram');
		$gpu = $this->input->post('gpu');
		$storage = $this->input->post('storage');
		$battery = $this->input->post('battery');
		$audio = $this->input->post('audio');
		$keyboard = $this->input->post('keyboard');
		$wifi = $this->input->post('wifi');
		$durability = $this->input->post('durability');
		$warranty = $this->input->post('warranty');
		$cooling = $this->input->post('cooling');
		$screen_size = $this->input->post('screen-size');
		//optionals
		$c = 0;
		$ssd = $optionals[$c];
		$c++;
		$webcam = $optionals[$c];
		$c++;
		$touchscreen = $optionals[$c];
		$c++;
		$hdmi = $optionals[$c];
		$c++;
		$lan = $optionals[$c];
		$c++;
		$sdcard = $optionals[$c];
		$c++;
		$includeos = $optionals[$c];
		//price
		$price = $this->input->post('price');
		$budget = $this->input->post('budget');
		//related specs
		$weight = $this->input->post('porty');
		$screen_size_calc = $this->input->post('porty');
		$video_mem = $this->input->post('gpu');

		//weight for FTOPSIS
		// $arr_weight= array(); //for anti - sql injection?
		// $arr_weight=array_map('mysqli_real_escape_string', $arr_weight);
		$arr_weight = array($cpu, $gpu, $battery,
			$audio, $keyboard, $wifi,
			$durability, $warranty, $cooling,
			$ram, $video_mem, $storage,
			$weight, $price, $screen_size_calc);

		//for getting products
		$id_prods = $this->getProducts($budget, $optionals, $screen_size);

		if (!empty($id_prods)) {
			$arr_calculate = array($id_prods, $arr_weight);
			return $arr_calculate;
		} else {
			return null;
		}
//$arr_calculate = array();

	}

	function choosePreset($optionals) {

		$screen_size = $this->input->post('screen-size');
		$price = $this->input->post('price');
		$budget = $this->input->post('budget');
		$usage = $this->input->post('usage');

		$c = 0;
		$ssd = $optionals[$c];
		$c++;
		$webcam = $optionals[$c];
		$c++;
		$touchscreen = $optionals[$c];
		$c++;
		$hdmi = $optionals[$c];
		$c++;
		$lan = $optionals[$c];
		$c++;
		$sdcard = $optionals[$c];
		$c++;
		$includeos = $optionals[$c];

		$arr_weight = array(); //get from ftopsis model
		$this->load->model('mcdm_ftopsis_model');
		$arr_weight = $this->mcdm_ftopsis_model->presetFuzzyWeight($usage, $price);

		$id_prods = $this->getProducts($budget, $optionals, $screen_size);

		if (!empty($id_prods)) {
			$arr_calculate = array($id_prods, $arr_weight);
			return $arr_calculate;
		} else {
			return null;
		}

	}

	function getProducts($budget, $optionals, $screen_size) {

		$this->db->from('laptops'); //tambahkan untuk produk yang belum di review
		$this->db->join('scores_lv', 'scores_lv.id_product=laptops.id_product');
		$this->db->where('laptops.screen_size<=' . $screen_size . ' and laptops.price<=' . $budget . '');

		$query = $this->db->get();
		$sql = $query->result();

		//filtering the optional specs
		$c = 0;
		$counter_fit = 0;
		$arr_ada = array();
		for ($i = 0; $i < sizeof($optionals); $i++) {
			if ($optionals[$i] != 0) {
				$arr_ada[$c] = $i;
				$c++;
			}
		}

		$arr_opt = array();
		$arr_prod = array();
		$alt = 0;
		$opt = 0;
		$index = 0;

		foreach ($sql as $row) {
			$alt = $row->id_product;
			$arr_opt[$alt][$opt] = $row->ssd;
			$opt++;
			$arr_opt[$alt][$opt] = $row->webcam;
			$opt++;
			$arr_opt[$alt][$opt] = $row->touchscreen;
			$opt++;
			$arr_opt[$alt][$opt] = $row->hdmi;
			$opt++;
			$arr_opt[$alt][$opt] = $row->lan_port;
			$opt++;
			$arr_opt[$alt][$opt] = $row->sd_card;
			$opt++;
			$arr_opt[$alt][$opt] = $row->include_os;

			//count fitness with optionals requirements
			for ($j = 0; $j < sizeof($arr_ada); $j++) {
				if ($arr_opt[$alt][$arr_ada[$j]] != 0) {
					$counter_fit++;
				}
			}

			//if met
			if ($counter_fit == sizeof($arr_ada)) {
				$arr_prod[$index] = $alt;
				$index++;
			}

			$counter_fit = 0;
			$opt = 0;
			$alt = 0;
		}

		return $arr_prod;
	}

	function callFTOPSIS($arr_calculate, $mode) {
		$rank = array();
		$this->load->model('mcdm_ftopsis_model');
		$rank = $this->mcdm_ftopsis_model->fuzzyTOPSIS($arr_calculate[0], $arr_calculate[1], $mode);
		//print_r(array_keys($rank)); array_keys() bwt ambil keynya doang
		$alternatives = $this->getNames(array_keys($rank));

		//$rank = array_combine($alternatives, array_values($rank));
		//return $rank;
		return $alternatives;
	}

	function getNames($id_prods) {

		$array_of_order = $id_prods;
		//$order = sprintf('FIELD(products.id_product, %s)', implode(', ',$array_of_order)); //spy querynya urut
		$order = sprintf('FIELD(laptops.id_product, %s)', implode(', ', $array_of_order));
		//pake order by field(id, '2','1','3');
		$this->db->from('laptops');
		$this->db->join('brands', 'brands.id_brand = laptops.id_brand');
		$this->db->join('os', 'laptops.include_os=os.os_id');
		$this->db->where_in('laptops.id_product', $id_prods);
		$this->db->order_by($order);

		$query = $this->db->get();
		$sql = $query->result();

		// $arr_alt = array();
		// $i = 0;
		// foreach($sql as $row){
		// 	$brand = (string)$row->brand_name; //cast to string
		// 	$product = (string)$row->product_name;
		// 	$arr_alt[$i] = "{$brand} {$product}"; //this is concating
		// 	$i++;
		// }

		//return $arr_alt;
		return $sql;
	}

	function getAll() {
		$this->db->from('laptops');
		$this->db->join('brands', 'brands.id_brand = laptops.id_brand');
		$this->db->join('os', 'laptops.include_os=os.os_id');

		$query = $this->db->get();
		$sql = $query->result();

		return $sql;
	}

	function getBrandList() {
		$this->db->from('brands');
		$query = $this->db->get();
		$sql = $query->result();

		return $sql;
	}

}

//this is result() vs result_array()
//result_array() is slightly faster
//
// Here you used result_array(). so it returns result with array with stdobject. So you have to print below type.

// $i=0;
// foreach ($data as $row);
// {
//     echo $row[$i]->user_id ."|";
//     echo $row[$i]->name ."|";
//     echo $row[$i]->fam ."|";
//     echo $row[$i]->type_name ."|".'<br>';
//     echo "<hr>";
//     $i++;
// }
// If you are using only result() that time you can use your code.

// foreach ($data as $row);
// {
//     echo $row->user_id ."|";
//     echo $row->name ."|";
//     echo $row->fam ."|";
//     echo $row->type_name ."|".'<br>';
//     echo "<hr>";
// }
