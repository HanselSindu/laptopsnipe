<?php

function cetak($str){
	echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}
//jgn lupa tambahain ke autoload php di config jadi gini:
//$autoload['helper'] = array('url','cookie','form','xss');
?>