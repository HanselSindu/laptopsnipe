<?php

class tables_model extends CI_Model {

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


	function getSpecs(){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('laptops');
		$this->db->join('os', 'laptops.include_os=os.os_id');
		$this->db->join('brands', 'brands.id_brand = laptops.id_brand');

		$query = $this->db->get();

        return $query->result();
	}

	function updateData($data) {
    extract($data);
    $this->db->where('product_id', $id);
    $this->db->update($table_name, array('price' => $price));
    return true;
}
	
	}

