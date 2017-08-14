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

<!-- 	<section class="bg-dark" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">We've got what you need!</h2>
					<hr class="light">
					<p class="text-faded">If you are not familiar with laptop specifications you may choose "Preset" option and select your needs or...</p><br>
					<p>if you want to customize your own specifications' importance level you may choose the "Advanced" option.
					</p>
					<hr class="light">
					<a onclick="displayOptions('advanced','preset')" href=#advanced class="btn btn-dark">Advanced</a>
					<a onclick="displayOptions('preset','advanced')" href=#preset class="btn btn-dark"> Preset </a>
				</div>
			</div>
		</div>
	</section> -->

	<section class="bg-dark" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h1 class="section-heading">You're nearly there!</h1>
					<hr class="light">
					<p class="text-light">Please select one of the options below to continue..</p>
					<br>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<!-- <div class="row no-gutter popup-gallery"> -->
			<div>
				<div class="col-lg-4 col-sm-6">
					<a onclick="displayOptions('advanced','preset')" href=#advanced
					class="portfolio-box">
						<img src="img/portfolio/thumbnails/code.png" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									ADVANCED
								</div>
								<div class="project-name">
									Have it your way by customizing your own specifications' importance level.
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a onclick="displayOptions('preset','advanced')" href=#preset class="portfolio-box">
						<img src="img/portfolio/thumbnails/presetlaptops.png" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									PRESET
								</div>
								<div class="project-name">
									Get expert recommendations with this option if you are not familiar with laptop specifications.
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="<?php echo base_url() ?>Services/browseLaptops" class="portfolio-box">
						<img src="img/portfolio/thumbnails/browselaptops.png_256" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									BROWSE for LAPTOPS
								</div>
								<div class="project-name">
									To see what laptops do we have in here, you may recommend new laptops to us or post comments for the laptops.
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<aside class="bg-dark">
		<div class="container text-center">
			<div class="call-to-action">
				<h2>Are you a Tech Reviewer?</h2>
				<a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Post a review!</a>
			</div>
		</div>
	</aside>
	</section>

	<!-- for security don't forget the &lt -->

		<section class="bg-light" id="advanced" style="display:none">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Advanced</h2>
					<hr class="dark">

					<hr class="light">
					<form id="advancedselection" action="<?php echo base_url() ?>Services/chooseLaptopAdvanced" method="post">
					<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
					<div align="center">
					<b><p align="center" style="vertical-align: middle; margin: 5px;">Main Criteria</p></b>
					<!-- <p class="text">Main Criteria</p> -->
					Please select the importance level of each criterion according to your preferences
					<br><br>
					<table align="center" style="float:center; table-layout: fixed; width: 100%;">
						<thead>
							<th style="width: 200px"><p align="center" style="vertical-align: middle; margin: 5px;">Specs</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Very Low</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Low</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Medium Low</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Medium</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Medium High</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">High</p></th>
							<th><p align="center" style="vertical-align: middle; margin: 5px;">Very High</p></th>
						</thead>
						<tbody>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">CPU</p></td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cpu" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">GPU</p></td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="gpu" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">RAM</p></td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="ram" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Storage Capacity</p></td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="storage" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Battery Life</p></td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="battery" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Audio Quality</p></td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="audio" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Keyboard Quality</p></td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="keyboard" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Wi-Fi Reception</p></td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="wifi" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Portability</p></td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="porty" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Durability</p></td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="durability" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Warranty</p></td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="warranty" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Cooling Systems</p></td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="cooling" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						<tr>
						<td><p align="center" style="vertical-align: middle; margin: 5px;">Price</p></td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_L" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_ML" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_M" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_MH" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_H" style="vertical-align: middle; margin: 0px;">
						</td>
						<td style="text-align: center;">
						<input type="radio" name="price" value="W_VH" style="vertical-align: middle; margin: 0px;">
						</td>
						</tr>
						</tbody>
					</table>
					<br>
					<b><p align="center" style="vertical-align: middle; margin: 5px;">Filter Criteria</p></b>
					These following criteria will filter the laptops we will recommend to you
					<table>
					<thead>
						<th style="width: 250px;"></th>
						<th></th>
					</thead>
						<tbody>
						<td style="text-align: center;">
							<p align="center" style="vertical-align: middle; margin: 5px;">Screen Size up to(inches):</p>
						</td>
						<td>
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="13" required="required" style="vertical-align: middle; margin: 0px;">13"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="14" style="vertical-align: middle; margin: 0px;">14"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="15" style="vertical-align: middle; margin: 0px;">15"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="16" style="vertical-align: middle; margin: 0px;">16"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="17" style="vertical-align: middle; margin: 0px;">17"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="18.4" style="vertical-align: middle; margin: 0px;">18.4"
						<span style="display:inline-block; width:5px;"></span>
						</td>
						</tbody>
					</table>

						<p align="center" style="vertical-align: middle; margin: 5px;">It must include:</p>
						<input type="checkbox" name="ssd" value="1" style="vertical-align: middle; margin: 0px;">SSD
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="webcam" value="1" style="vertical-align: middle; margin: 0px;">Webcam
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="touchscreen" value="1" style="vertical-align: middle; margin: 0px;">Touchscreen
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="hdmi" value="1" style="vertical-align: middle; margin: 0px;">HDMI
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="lan_port" value="1" style="vertical-align: middle; margin: 0px;">LAN Port
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="sd_card" value="1" style="vertical-align: middle; margin: 0px;">SD Card
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="include_os" value="1" style="vertical-align: middle; margin: 0px;">Operating System(OS)
						<span style="display:inline-block; width:5px;"></span>
						<br>
						<small>(if not selected they won't filter anything)</small>
					</div>
					<br>
					Budget up to ($): <input type="number" id="myBudgetAdv" name="budget" min="0" max="99999999999999" value="0" required="required">
					<span style="display:inline-block; width:5px;"></span>
					<button type="submit" class="btn btn-primary" form="advancedselection" value="Submit">Submit</button>
					<br>
					<a align="left" onclick="setBudget('myBudgetAdv')" style="vertical-align: left; margin: 5px;" class="btn btn-dark">I have infinite money</a>
					<!-- <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a> -->
					</form>
				</div>
			</div>
		</div>
	</section>

		<section class="bg-light" id="preset" style="display:none">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Preset</h2>
					<hr class="dark">
					<p class="text-dark">What is your primary needs of the laptop?</p>
					<hr class="light">
			<form name="presetselection" id='form-preset' action="<?php echo base_url() ?>Services/chooseLaptopPreset" method="POST">
			<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
 				<div id="preset_selection">
					<table align="center">
                      <tbody>
    					<tr>
    						<!-- onclick="loadText('programming')" -->
    						<td><button type="button" name="options" id="gaming" value="gaming" onclick="loadText(this.id)" class="btn btn-primary">GAMING</button></td>
    						<td><button type="button" name="options" id="multimedia" value="multimedia" onclick="loadText(this.id)" style="vertical-align: middle; margin: 20px;" class="btn btn-primary">MULTIMEDIA & DESIGN</button></td>
    						<td><button type="button" name="options" id="entertainment" value="entertainment" onclick="loadText(this.id)" class="btn btn-primary">ENTERTAINMENT</button></td>
    					</tr>
    					<tr>
    						<td><button type="button" name="options" id="programming" value="programming" onclick="loadText(this.id)" class="btn btn-primary">PROGRAMMING</button></td>
    						<td><button type="button" name="options" id="travelling" value="travelling" onclick="loadText(this.id)" class="btn btn-primary">TRAVELLING</button></td>
    						<td><button type="button" name="options" id="general" value="general" onclick="loadText(this.id)" class="btn btn-primary">GENERAL PURPOSE</button></td>
    					</tr>
                      </tbody>
                    </table>
					</div>
		<div><input type="hidden" id="usage" name="usage"></div>
		<!-- <form name="presetselection" id='form-preset' action="" method="POST" style="display:none"> -->
		<br>
		<!-- set input value here -->
			<div id="form-preset-sub" align="center">
						<p align="center" style="vertical-align: middle; margin: 5px;">How important is price for you? Higher level means <b>cheaper is better</b></p>
						<input type="radio" name="price" value="W_VL" required="required" style="vertical-align: middle; margin: 0px;">Very Low
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_L" style="vertical-align: middle; margin: 0px;">Low
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_ML" style="vertical-align: middle; margin: 0px;">Medium Low
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_M" style="vertical-align: middle; margin: 0px;">Medium
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_MH" style="vertical-align: middle; margin: 0px;">Medium High
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_H" style="vertical-align: middle; margin: 0px;">High
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="price" value="W_VH" style="vertical-align: middle; margin: 0px;">Very High
						<span style="display:inline-block; width:5px;"></span>
						<br><br>
								<b><p align="center" style="vertical-align: middle; margin: 5px;">Filter Criteria</p></b>
					These following criteria will filter the laptops we will recommend to you
					<table>
					<thead>
						<th style="width: 250px;"></th>
						<th></th>
					</thead>
						<tbody>
						<td style="text-align: center;">
							<p align="center" style="vertical-align: middle; margin: 5px;">Screen Size up to(inches):</p>
						</td>
						<td>
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="13" required="required" style="vertical-align: middle; margin: 0px;">13"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="14" style="vertical-align: middle; margin: 0px;">14"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="15" style="vertical-align: middle; margin: 0px;">15"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="16" style="vertical-align: middle; margin: 0px;">16"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="17" style="vertical-align: middle; margin: 0px;">17"
						<span style="display:inline-block; width:5px;"></span>
						<input type="radio" name="screen-size" value="18.4" style="vertical-align: middle; margin: 0px;">18.4"
						<span style="display:inline-block; width:5px;"></span>
						</td>
						</tbody>
					</table>

						<p align="center" style="vertical-align: middle; margin: 5px;">It must include:</p>
						<input type="checkbox" name="ssd" value="1" style="vertical-align: middle; margin: 0px;">SSD
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="webcam" value="1" style="vertical-align: middle; margin: 0px;">Webcam
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="touchscreen" value="1" style="vertical-align: middle; margin: 0px;">Touchscreen
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="hdmi" value="1" style="vertical-align: middle; margin: 0px;">HDMI
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="lan_port" value="1" style="vertical-align: middle; margin: 0px;">LAN Port
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="sd_card" value="1" style="vertical-align: middle; margin: 0px;">SD Card
						<span style="display:inline-block; width:5px;"></span>
						<input type="checkbox" name="include_os" value="1" style="vertical-align: middle; margin: 0px;">Operating System(OS)
						<span style="display:inline-block; width:5px;"></span>
						<br>
						<small>(if not selected they won't filter anything)</small>

					<br><br>
					Budget up to ($): <input type="number" id="myBudgetPreset" name="budget" min="0" max="99999999999999" value="0" required="required">
					<span style="display:inline-block; width:5px;"></span>
					<button type="submit" class="btn btn-dark" form="form-preset" value="Submit">Submit</button>
					<br>
					<a align="left" onclick="setBudget('myBudgetPreset')" style="vertical-align: left; margin: 5px;" class="btn btn-dark">I have infinite money</a>
			</div>
		</form>

				</div>
			</div>
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

	<!-- javascript -->
				<script>
					function displayOptions(id, id0){

					var divelement = document.getElementById(id); //selected
					var divelement0 = document.getElementById(id0);

						if(divelement0.style.display=='block'){
								divelement0.style.display='none';
								divelement.style.display='block';
							}

						else if(divelement.style.display=='none'){
							divelement.style.display='block';
						}

						resetInterface();
    				}

    				function loadText(mode){

    				var divelement = document.getElementById('form-preset-sub');

    					if(divelement.style.display=='none'){
    						divelement.style.display='block';
    					}

    					document.getElementById('usage').value=mode;
    					selectBtn(mode);
    				}

					function selectBtn(id) {
						  var sel = document.getElementById('preset_selection').getElementsByTagName('button');
  							for (var i=0; i<sel.length; i++) {
								sel[i].style.backgroundColor = '';
  							}

  						document.getElementById(id).style.backgroundColor = 'orange';

					}

					function resetInterface(){

						var divelement1 = document.getElementById('form-preset-sub');
						divelement1.style.display='none';

						var sel = document.getElementById('preset_selection').getElementsByTagName('button');
  							for (var i=0; i<sel.length; i++) {
								sel[i].style.backgroundColor = '';
		  					}

		  				document.getElementById('usage').value=null;
		  				document.getElementById('myBudgetAdv')="0";
		  				document.getElementById('myBudgetPreset')="0";

					}

					function setBudget(id){

						var divelement = document.getElementById(id);
  						divelement.value = divelement.max;

  					}
    			</script>

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
