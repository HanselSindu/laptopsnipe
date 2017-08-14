<?php

class fuzzy_model extends CI_Model {

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

	function getValuesAssess(){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('fuzzyassess');
		$this->db->order_by("u_a", "asc");

		$query = $this->db->get();

        return $query->result();
	}

	function getValuesWeight(){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('fuzzyweight');
		$this->db->order_by("u_w", "asc");

		$query = $this->db->get();

        return $query->result();
	}

	function getSpecificValuesWeight($myarray){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		
		//$newarray = implode(", ", $myarray); //makes format 'hi', 'there', 'everybody' 
		$this->db->from('fuzzyweight');
		$this->db->where_in("id_fuzzyweight", $myarray);

		$query = $this->db->get();

        return $query->result();
	}

	function getSpecificValuesAssess($myarray){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		
		//$newarray = implode(", ", $myarray); //makes format 'hi', 'there', 'everybody' 
		$this->db->from('fuzzyassess');
		$this->db->where_in("id_fuzzyassess", $myarray);

		$query = $this->db->get();

        return $query->result();
	}

	function updateData() {

		$lingvar = $this->input->post('ling-var');
		$lval    = $this->input->post('l-val');
		$mval    = $this->input->post('m-val');
		$uval    = $this->input->post('u-val');
		$typeval = $this->input->post('type-val');
		$idval = $this->input->post('id-val');

	if($typeval=='assess'){
    	$data = array(
               	'linguistic_var_a' => $lingvar,
              	'l_a' => $lval,
              	'm_a' => $mval,
              	'u_a' => $uval
           	 );

		$this->db->where('id_fuzzyassess', $idval);
		$this->db->update('fuzzyassess', $data); 
	}
	else if($typeval=='weight'){
    	$data = array(
               	'linguistic_var_w' => $lingvar,
              	'l_w' => $lval,
              	'm_w' => $mval,
              	'u_w' => $uval
           	 );

		$this->db->where('id_fuzzyweight', $idval);
		$this->db->update('fuzzyweight', $data); 
	}

			if($this->db->affected_rows()===1){
				return true;
			}
			else{
				return false;
			}
		// Produces:
		// UPDATE mytable 
		// SET title = '{$title}', name = '{$name}', date = '{$date}'
		// WHERE id = $id
	}

	
	}

