<!DOCTYPE html>
<html>
	<head>
		<title>This is my the new IDE</title>
		<h1>PHP 7</h1>
	</head>
	<body>
		<?php
		echo 'Ready for Chapter 4';
		?>
	</body>
</html>

<!-- <span style="display:inline-block; width: YOURWIDTH;"> horizontal
						<span style="display:block; width: YOURWIDTH;"> vertical -->
						<!-- <br> buat ganti baris-->
						<!-- <input type="submit" value="Submit"> -->

<!-- function escapeHtml(text) { //ini javascript buat anti-XSS
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };

  return text.replace(/[&<>"']/g, function(m) { return map[m]; });
} -->

<!-- database to arrays -->
                <?php $n=0; $array=array();?>
                        <?php foreach ($groups as $row): //store the chosen weight values to arrays
        								$array[$n]=$row->l_w; $n++;
        								$array[$n]=$row->m_w; $n++;
        								$array[$n]=$row->u_w; $n++;
										endforeach; ?>
								<!-- calling the arrays -->
								<?php
									$counter=0; 
									for($i=0;$i<$n;$i++){
										echo $array[$i];
										echo " ";
										$counter++;
										if($counter%3==0)echo "<br>";
									}
								?>

<!-- 					<form name="presetselection" action="" method="POST">
					<div align="center">
						<script>
						function loadDoc(mode) {
 							var xhttp = new XMLHttpRequest();
  								xhttp.onreadystatechange = function() {
    								if (this.readyState == 4 && this.status == 200) {
      								document.getElementById("preset_selection").innerHTML = this.responseText;
    								}
  								};
  						if(mode=='gaming'){
  						xhttp.open("GET", "http://localhost/workspace/LaptopAdvisorBeta/ajax/preset_info_game.txt", true);
  						} 
  						if(mode=='multimedia'){
  						xhttp.open("GET", "http://localhost/workspace/LaptopAdvisorBeta/ajax/preset_info_multimedia.txt", true)
  						;} 
  						if(mode=='design'){
  						xhttp.open("GET", "http://localhost/workspace/LaptopAdvisorBeta/ajax/preset_info_design.txt", true);
  					 	} 
  						if(mode=='education'){
  						xhttp.open("GET", "http://localhost/workspace/LaptopAdvisorBeta/ajax/preset_info_education.txt", true);
  					 	} 
  						if(mode=='work'){
  						xhttp.open("GET", "http://localhost/workspace/LaptopAdvisorBeta/ajax/preset_info_work.txt", true);
  						}
  						xhttp.send();

							}
						</script>
					</div>
					</form>
 -->				