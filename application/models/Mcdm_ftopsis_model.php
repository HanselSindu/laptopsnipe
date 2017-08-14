<?php

class mcdm_ftopsis_model extends CI_Model {

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

	function fuzzyTOPSIS($idprods, $myarray, $mode){

		$array_fuzzy = array();
		$array_crisp = array();
		$fdm = array();
		$n_fdm = array();
		$weight = array();
		$w_fdm = array();
		$rank_alt = array();
		$rank = array();

		if(!empty($idprods)){
			$array_fuzzy = $this->getAssessmentValues($idprods);
			$array_crisp = $this->getCrispScores($idprods);
			if(!empty($array_fuzzy) && !empty($array_crisp)){
			$fdm = $this->combineFuzzyCrisp($array_fuzzy, $array_crisp);
			$n_fdm = $this->normalizeFDM($fdm);
			if($mode=='advanced'){$weight = $this->personalFuzzyWeight($myarray);}
			else if($mode=='preset'){$weight = $myarray;}
			$w_fdm = $this->weightFDM($n_fdm, $weight);
			$rank_alt = $this->calculateDistance($w_fdm);
			$rank = $this->rankAlternatives($idprods, $rank_alt);

			arsort($rank);

			return $rank;
			
			}else return $rank=array("no products filtered reviewed yet");

		}
		else return $rank=array("no matching product found");
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

	function getAssessmentValues($idprods){ //myarray = id product

		$product = array();
		$criteria = array('cpu_performance', 'gpu_performance', 'battery_life', 'audio_quality', 'keyboard_quality',
			'wifi', 'durability', 'warranty', 'cooling_systems');
		$score = array();
		$jmlhkriteria = 9;
		$reviews = 2;
		$i=0; $j=0; $k=0;

		while($i<sizeof($idprods)){ 
			$this->db->from('scores_lv');
			$this->db->where('id_product', $idprods[$i]); //denormalized form because this app is read-intensive
			$sql = $this->db->get(); 
			$sqli= $sql->result();
			while($j<sizeof($criteria)){
				foreach ($sqli as $row){
					if($j==0){$score[$k]=$row->cpu_performance; $k++;} //cari cara supaya cpu_performance bisa dari array
					if($j==1){$score[$k]=$row->gpu_performance; $k++;} //sementara manual sek lah wkwkwkwk
					if($j==2){$score[$k]=$row->battery_life; $k++;}
					if($j==3){$score[$k]=$row->audio_quality; $k++;}
					if($j==4){$score[$k]=$row->keyboard_quality; $k++;}
					if($j==5){$score[$k]=$row->wifi; $k++;}
					if($j==6){$score[$k]=$row->durability; $k++;}
					if($j==7){$score[$k]=$row->warranty; $k++;}
					if($j==8){$score[$k]=$row->cooling_systems; $k++;}
				}
				$k=0; //next feature: based on (n) reviews
				$product[$i][$j] = $this->sortFuzzyNumbers($score); //harus pake $this->function();
				$j++; 
			}
			$j=0;
			$i++; 
		}

		return $product;

	}

	function sortFuzzyNumbers($score){

		$query_array = array();
		$min_array = array();
		$avg_array = array();
		$max_array = array();
		$index = 0;
		
		for($i=0;$i<sizeof($score);$i++){ 
			$this->db->select('l_a, m_a, u_a'); 
			$this->db->from('fuzzyassess');
			$this->db->where('id_fuzzyassess', $score[$i]);
			$query_array[$i] = $this->db->get_compiled_select(); //$this->db->get_compiled_select(); convert to String
			if($i==0){$sql = $query_array[$i];}
			if($i>0){$sql = $sql." UNION ALL ".$query_array[$i];}
		}

		$query = $this->db->query($sql);
		$sort = $query->result();

		foreach($sort as $row){
			$min_array[$index]=$row->l_a;
			$avg_array[$index]=$row->m_a;
			$max_array[$index]=$row->u_a; 
			$index++;
		}

		$sorted_array = array(min($min_array), array_sum($avg_array)/count($avg_array), max($max_array)); //php cupu gaisa avg :p
		
        return $sorted_array;
	}

	function getCrispScores($idprod){ 

		$array_crisp = array('ram', 'video_mem', 'storage_capacity', 'weight', 'price', 'screen_size');
		$product = array();
		$score = array();
		$i = 0; $j = 0; $k = 0;

		while($i<sizeof($idprod)){
			$this->db->select($array_crisp);
			$this->db->from('laptops');
			$this->db->where('laptops.id_product', $idprod[$i]);
			$sql  = $this->db->get();
			$sqli = $sql->result();
			while($j<sizeof($array_crisp)){
				foreach($sqli as $row){
					if($j==0){$score[0]=$row->ram;$score[1]=$row->ram;$score[2]=$row->ram;} //TFN format
					if($j==1){$score[0]=$row->video_mem;$score[1]=$row->video_mem;$score[2]=$row->video_mem;}
					if($j==2){$score[0]=$row->storage_capacity;$score[1]=$row->storage_capacity;$score[2]=$row->storage_capacity;}
					if($j==3){$score[0]=$row->weight;$score[1]=$row->weight;$score[2]=$row->weight;} //negative
					if($j==4){$score[0]=$row->price;$score[1]=$row->price;$score[2]=$row->price;} //negative
					if($j==5){$score[0]=$row->screen_size;$score[1]=$row->screen_size;$score[2]=$row->screen_size;} //negative
				}
			$product[$i][$j] = $score;
			$j++; $k = 0;
			}
			$j = 0; $i++;
		}

		return $product;
	}

	function combineFuzzyCrisp($array_fuzzy, $array_crisp){
		$combined_array = array();
		$array_fuzzy_n = array('cpu_performance', 'gpu_performance', 'battery_life', 'audio_quality', 'keyboard_quality',
			'wifi', 'durability', 'warranty', 'cooling_systems');
		$array_crisp_n = array('ram', 'video_mem', 'storage_capacity', 'weight', 'price', 'screen_size');

		$combined_array_n = array_merge($array_fuzzy_n, $array_crisp_n);
		$i=0; $j=0;
		
		while($i<sizeof($array_fuzzy)){
			while($j<sizeof($combined_array_n)){
				if($j>=sizeof($array_fuzzy[0])){
					$combined_array[$i][$j] = $array_crisp[$i][$j-sizeof($array_fuzzy[0])];
				}	
				else{
					$combined_array[$i][$j] = $array_fuzzy[$i][$j];
				}
			$j++;
			}
		$i++; $j=0; 
		}

		return $combined_array;

	}

	function normalizeFDM($fdm){
		//0 -> l val, 1 -> m val, 2 -> u_val
		$uij = 0;
		$uij_crit = array();
		$lij = 0;
		$lij_crit = array();
		$n_fdm = array();
		$types = $this->getCriteriaTypes();

		for($j=0;$j<sizeof($fdm[0]);$j++){
		
			if($types[$j]=='positive'){ //positive criterias
				for($i=0;$i<sizeof($fdm);$i++){
					if($fdm[$i][$j][2]>$uij){
					$uij = $fdm[$i][$j][2];	
					}
				}
			}
			else{ //negative criterias
				$lij = $fdm[0][$j][0]; //initial value
				for($i=0;$i<sizeof($fdm);$i++){
					if($fdm[$i][$j][0]<$lij){
					$lij = $fdm[$i][$j][0];	
					}
				}
			}
		
			$uij_crit[$j] = $uij;		
			$uij=0; //reset uij value
			$lij_crit[$j] = $lij;		
			$lij=0; //reset lij value
		}

		 	
		for($j=0;$j<sizeof($fdm[0]);$j++){

			if($types[$j]=='positive'){	
				for($i=0;$i<sizeof($fdm);$i++){
					for($k=0;$k<sizeof($fdm[0][0]);$k++){ 
						if($uij_crit[$j]!=0){ //mencegah kalau on-board gpu semua
							$n_fdm[$i][$j][$k]=$fdm[$i][$j][$k]/$uij_crit[$j]; 
						}else $n_fdm[$i][$j][$k]=0;
					}	
				}
			}else{
				for($i=0;$i<sizeof($fdm);$i++){
					$k_lij = 0;
					for($k=sizeof($fdm[0][0])-1;$k>=0;$k--){
						$n_fdm[$i][$j][$k_lij]=$lij_crit[$j]/$fdm[$i][$j][$k]; //swap place
						$k_lij++;
					}	
				}
			}

		}

		return $n_fdm;
		//return sizeof($fdm); //return i nya dia
		//return sizeof($fdm[0]); //return j nya dia
		//return sizeof($fdm[0][0]); //return k nya dia

	}

	function personalFuzzyWeight($myarray){
		$query_array = array();
		$weight_array = array();
		$index = 0;
		$index_column = 0;
		
		for($i=0;$i<sizeof($myarray);$i++){ 
			$this->db->select('l_w, m_w, u_w'); 
			$this->db->from('fuzzyweight');
			$this->db->where('id_fuzzyweight', $myarray[$i]);
			$query_array[$i] = $this->db->get_compiled_select(); //$this->db->get_compiled_select(); convert to String
			if($i==0){$sql = $query_array[$i];}
			if($i>0){$sql = $sql." UNION ALL ".$query_array[$i];}
		}

		$query = $this->db->query($sql);
		$sort = $query->result();

		foreach($sort as $row){
			$weight_array[$index][$index_column]=$row->l_w; $index_column++;
			$weight_array[$index][$index_column]=$row->m_w; $index_column++;
			$weight_array[$index][$index_column]=$row->u_w; $index_column++;
			$index++;
			$index_column=0;
		}

        return $weight_array;
	}

	function presetFuzzyWeight($usage, $price){

		$preset_weight = array();
		$criteria_crisp = array();
		$index = 0;
		$weight = array();
		//$criteria = sizeof($criteria_fuzzy) + sizeof($criteria_crisp);
		$criteria = array('cpu', 'gpu', 'battery', 
						'audio', 'keyboard', 'wifi', 
						'durability', 'warranty', 'cooling', 
						'ram', 'video_mem', 'storage', 
						'weight', 'price', 'screen_size');
		$j=0;  
		while($j<sizeof($criteria)){
			$this->db->from('preset_weight_lv');
			$this->db->join('us4ge', 'us4ge.id_usage = preset_weight_lv.id_usage');
			// $this->db->join('weighting', 'weighting.id_weighting = preset_weight_lv.id_weighting');
			// $this->db->join('us4ge', 'us4ge.id_usage = weighting.id_usage'); normalized form for write intensive
			$this->db->where('us4ge.ntbk_usage', $usage);
			$sql = $this->db->get();
			$sqli= $sql->result();
					foreach ($sqli as $row){
					if($j==0){$weight[$index]=$row->cpu; $index++;}
					if($j==1){$weight[$index]=$row->gpu; $index++;} 
					if($j==2){$weight[$index]=$row->battery; $index++;}
					if($j==3){$weight[$index]=$row->audio; $index++;}
					if($j==4){$weight[$index]=$row->keyboard; $index++;}
					if($j==5){$weight[$index]=$row->wifi; $index++;}
					if($j==6){$weight[$index]=$row->durability; $index++;}
					if($j==7){$weight[$index]=$row->warranty; $index++;}
					if($j==8){$weight[$index]=$row->cooling; $index++;}
					if($j==9){$weight[$index]=$row->ram; $index++;}
					if($j==10){$weight[$index]=$row->video_mem; $index++;}
					if($j==11){$weight[$index]=$row->storage; $index++;}
					if($j==12){$weight[$index]=$row->weight; $index++;}
					if($j==13){$weight[$index]=$price; $index++;} //ditentukan oleh user
					if($j==14){$weight[$index]=$row->weight;} //buat screen size
					}	
					$index=0;
					$preset_weight[$j] = $this->sortFuzzyWeightPreset($weight); //j for criteria
					$j++;
		}

		return $preset_weight;
		
	}

	function sortFuzzyWeightPreset($myarray){
		$query_array = array();
		$min_array = array();
		$avg_array = array();
		$max_array = array();
		$index = 0; 
		
		for($i=0;$i<sizeof($myarray);$i++){ 
			$this->db->select('l_w, m_w, u_w'); 
			$this->db->from('fuzzyweight');
			$this->db->where('id_fuzzyweight', $myarray[$i]);
			$query_array[$i] = $this->db->get_compiled_select(); //$this->db->get_compiled_select(); convert to String
			if($i==0){$sql = $query_array[$i];}
			if($i>0){$sql = $sql." UNION ALL ".$query_array[$i];}
		}

		$query = $this->db->query($sql);
		$sort = $query->result();

		foreach($sort as $row){
			$min_array[$index]=$row->l_w;
			$avg_array[$index]=$row->m_w;
			$max_array[$index]=$row->u_w; 
			$index++;
		}

		$weight_array = array(min($min_array), array_sum($avg_array)/count($avg_array), max($max_array));

        return $weight_array;
	}

	function weightFDM($n_fdm, $weight){
		$w_fdm = array();
		for($i=0;$i<sizeof($n_fdm);$i++){
			for($j=0;$j<sizeof($n_fdm[0]);$j++){
				for($k=0;$k<sizeof($n_fdm[0][0]);$k++){
					$w_fdm[$i][$j][$k]=$n_fdm[$i][$j][$k]*$weight[$j][$k];
				}	
			}
		}
		return $w_fdm;
	}

	function calculateDistance($w_fdm){
		$di_pos = array();
		$di_neg = array();
		$i = 0; $j = 0; $x =0; $y = 0;
		$fis_pos = array(1,1,1);
		$fis_neg = array(0,0,0);
		$sum_pos = 0;
		$sum_neg = 0;
		$sum_arr_pos = array();
		$sum_arr_neg = array();
		$types = $this->getCriteriaTypes();

		//Calculate The Distance of Each Alternative to FPIS & FNIS	
		while($j<sizeof($w_fdm[0])){

			while($i<sizeof($w_fdm)){ 
				$alt = array($w_fdm[$i][$j][0],$w_fdm[$i][$j][1],$w_fdm[$i][$j][2]);	
				$di_pos[$i][$j] = abs(array_sum($fis_pos)-array_sum($alt));
				$di_neg[$i][$j] = abs(array_sum($fis_neg)-array_sum($alt));
				$i++;
			}
		
			$i = 0;
			$j++;

		}

		//calculate relative closeness
		while($x<sizeof($di_pos)){  
			while($y<sizeof($di_pos[0])){
				$sum_pos = $di_pos[$x][$y] + $sum_pos;
				$sum_neg = $di_neg[$x][$y] + $sum_neg;
				$y++;
			}
			$sum_arr_pos[$x] = $sum_pos; 
			$sum_arr_neg[$x] = $sum_neg;		
			$sum_pos = 0;
			$sum_neg = 0;
			$y = 0;
			$x++;
		}

		return $this->scoreAlternatives($sum_arr_pos, $sum_arr_neg);
	}

	function scoreAlternatives($sum_arr_pos, $sum_arr_neg){
		//Si=di_neg/(di_pos+di_neg)
		$scoreAlt = array();
		$i = 0;

		while($i<sizeof($sum_arr_pos)){
			$scoreAlt[$i]=$sum_arr_neg[$i]/($sum_arr_pos[$i]+$sum_arr_neg[$i]);
			$i++;
		}

		return $scoreAlt;
	}

	function rankAlternatives($alternatives, $scores){
		//native sort algorithm, because it's the fastest according to the internet
		$rank_alt = array_combine($alternatives, $scores); //array_combine to make array($key => $value)
		return $rank_alt;
		//return arsort($alternatives);
	}


	function getSpecificValuesAssess($myarray){
		//$query = $this->db->query('SELECT * FROM laptops, products');
		//$this->db->select('*'); // <-- There is never any reason to write this line!
		
		//$newarray = implode(", ", $myarray); //makes format 'hi', 'there', 'everybody'
		// $this->db->select('l_a, m_a, u_a'); 
		// $this->db->from('fuzzyassess');
		// $this->db->where_in("id_fuzzyassess", $myarray);
		$query_array = array();
		
		for($i=0;$i<sizeof($myarray);$i++){ //next step: $i for scores $j for reviewers
			$this->db->select('l_a, m_a, u_a'); 
			$this->db->from('fuzzyassess');
			$this->db->where('id_fuzzyassess', $myarray[$i]);
			$query_array[$i] = $this->db->get_compiled_select(); //$this->db->get_compiled_select(); convert to String
			if($i==0){$sql = $query_array[$i];}
			if($i>0){$sql = $sql." UNION ALL ".$query_array[$i];}
		}

		$query = $this->db->query($sql);
		//$query = $this->db->query($query_array[1]." UNION ALL ".$query_array[2]);
		//SELECT l_a, m_a, u_a FROM `fuzzyassess` WHERE id_fuzzyassess ='A_G' UNION ALL SELECT l_a, m_a, u_a FROM `fuzzyassess` WHERE id_fuzzyassess ='A_G'
		//SELECT l_a, m_a, u_a FROM `fuzzyassess` WHERE id_fuzzyassess IN ('A_G', 'A_MG', 'A_VG', 'A_F')
		//SELECT l_a, m_a, u_a FROM `scores_lv`, `fuzzyassess` WHERE fuzzyassess.id_fuzzyassess=scores_lv.cpu_performance
		//$query = $this->db->get();

        return $query->result();
	}

	function getCriteriaTypes(){
		$combined_array = array();
		$array_fuzzy_n = array('cpu_performance', 'gpu_performance', 'battery_life', 'audio_quality', 'keyboard_quality',
			'wifi', 'durability', 'warranty', 'cooling_systems');
		$array_crisp_n = array('ram', 'video_mem', 'storage_capacity', 'weight', 'size', 'price', 'screen_size');

		$combined_array_n = array_merge($array_fuzzy_n, $array_crisp_n);

		$query_array = array();
		$index = 0;
		for($i=0;$i<sizeof($combined_array_n);$i++){ //next step: $i for scores $j for reviewers
			$this->db->select('type'); 
			$this->db->from('topsis_criteria_types');
			$this->db->where('criteria_id', $combined_array_n[$i]);
			$query_array[$i] = $this->db->get_compiled_select(); //$this->db->get_compiled_select(); convert to String
			if($i==0){$sql = $query_array[$i];}
			if($i>0){$sql = $sql." UNION ALL ".$query_array[$i];}
		}

		$query = $this->db->query($sql);
		$sqli = $query->result();

		foreach($sqli as $row){
			$array_type[$index]=$row->type;
			$index++;
		}

		return $array_type;

	}

	
	}

