<?php 
function requestProtect(){
	echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());
}
?>