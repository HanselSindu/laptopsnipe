<?php

class login_model extends CI_Model {

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

	function can_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users'); //select query

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	
	}
}
