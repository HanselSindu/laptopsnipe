<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Laptop Snipe</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="<?php echo base_url() ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="<?php echo base_url() ?>css/creative.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top">

<!-- Navigator -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Laptop Snipe</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo site_url('Home'); ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url('About'); ?>">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
<!-- Navigator -->

	<!-- for security don't forget the &lt -->


	<section id="ranks" class="bg-dark" style="display:block">
		<div class="container" align="center">
		<a href="<?php echo site_url('Services'); ?>" class="btn btn-primary btn-xl page-scroll">Back</a>
		</div>
	</section>

	<section id="ranks" class="bg-light" style="display:block">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
				<!-- Tables -->
				<table id="datatable" style="float:center; table-layout: fixed; width: 100%; height: 100px;">
                      <thead>
                      	<?php $counter = 0;?>
                      	<?php foreach ($brands as $row): ?>
                        <th style="text-align:center;"><p><a href="https://www.youtube.com"><?php cetak($row->brand_name);?></a></p></th>
                        <?php $counter++; if($counter%3==0){?>
                        <tr></tr>
                        <?php }?>
                        <?php endforeach;?>
                      </thead>
                    </table>

                <!-- Tables -->
                <!-- https://drive.google.com/file/d/0BylYvHV6FRG9dGtleEVYU05ZRFU/view?usp=sharing -->
<!-- https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Lenovo-Logo.svg/2000px-Lenovo-Logo.svg.png -->
<!--                 <?php
//				$image = 'http://www.google.com/doodle4google/images/d4g_logo_global.jpg';
//				$imageData = base64_encode(file_get_contents($image));
//				echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
				?> -->
				<p>This feature is still under development :D</p>
				<?php
				$image = 'https://cdn2.iconfinder.com/data/icons/metro-uinvert-dock/256/Lenovo.png';
				$imageData = base64_encode(file_get_contents($image));
				echo '<img src="data:image/jpg;base64,'.$imageData.'">';
				?> 

				</div>
			</div>
		</div>
		<br>
		<div class="container" align="center">

		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="primary">
					<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
				</div>
				<div class="col-lg-4 col-lg-offset-2 text-center">
					<i class="fa fa-phone fa-3x sr-contact"></i>
					<p>123-456-6789</p>
				</div>
				<div class="col-lg-4 text-center">
					<i class="fa fa-envelope-o fa-3x sr-contact"></i>
					<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- jQuery -->
	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Theme JavaScript -->
	<script src="<?php echo base_url() ?>js/creative.min.js"></script>

</body>

</html>
