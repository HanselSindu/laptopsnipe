<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laptop Advisor | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo base_url() ?>gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url('Home'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>User Webpage</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>gentelella/production/images/Hansel.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Hansel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin Panel</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('admin/Home/Dashboard'); ?>"><i class="fa fa-home"></i> Home </a>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/Form/formInputLaptop'); ?>">Input Laptop Data</a></li>
                      <li><a href="<?php echo site_url('admin/Form/formScoreLaptop'); ?>">Input Laptop Scores</a></li>
                      <li><a href="<?php echo site_url('admin/Form/formPresetWeight'); ?>">Input Preset Weights</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url('admin/Tables/dataLaptop'); ?>"><i class="fa fa-table"></i> Laptop Data</a>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Fuzzy TOPSIS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/Fuzzy/fuzzyEdit'); ?>">Edit Fuzzy Ratings</a></li>
                      <li><a href="<?php echo site_url('admin/MCDM_FTOPSIS/fuzzyTopsis'); ?>">Fuzzy TOPSIS Method configurations</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">HSL
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>FTOPSIS Method<small> in the making <strong>let's do this</strong></small></h3>
                <h4><small>This page is for debugging the FTOPSIS method </small></h4>
<!--                 <?php $n = 0;
$x = 0;
$w_array = array();
$a_array = array();?>

                        <?php foreach ($groups_w as $row): //store the chosen weight values to arrays
	$w_array[$n] = $row->l_w;
	$n++;
	$w_array[$n] = $row->m_w;
	$n++;
	$w_array[$n] = $row->u_w;
	$n++;
endforeach;?>

												<?php foreach ($groups_a as $row): //store the chosen assess values to arrays
	$a_array[$x] = $row->l_a;
	$x++;
	$a_array[$x] = $row->m_a;
	$x++;
	$a_array[$x] = $row->u_a;
	$x++;
endforeach;?> -->

							<!-- calling the arrays -->
              <br>
								<?php
echo 'fuzzy';
echo '<br>';
$counter = 0;
for ($i = 0; $i < 4; $i++) {
	//for($j=0;$j<14;$j++){ //ini ori
	for ($j = 0; $j < 3; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $groups_fuzzy[$i][$j][$k];
			if ($k == 2) {echo '<br>';} else {
				echo ' || ';
			}

		}
	}
}
?>
							<br>
                <?php
echo 'crisp';
echo '<br>';
$counter = 0;
for ($i = 0; $i < 4; $i++) {
	//for($j=0;$j<14;$j++){ //ini ori
	for ($j = 0; $j < 2; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $groups_crisp[$i][$j][$k];
			if ($k == 2) {echo '<br>';} else {
				echo ' || ';
			}

		}
	}
}
?>
              <br>
								<?php
echo 'combined';
echo '<br>';
$counter = 0;
for ($i = 0; $i < 4; $i++) {
	//for($j=0;$j<14;$j++){ //ini ori
	for ($j = 0; $j < 5; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $groups_combined[$i][$j][$k];
			if ($k == 2) {echo '<br>';} else {
				echo ' || ';
			}

		}
	}
}
?>
								<br>
                  <?php
echo 'normalized';
echo '<br>';
$counter = 0;
for ($i = 0; $i < 4; $i++) {
	//for($j=0;$j<14;$j++){ //ini ori
	for ($j = 0; $j < 5; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $groups_normalized[$i][$j][$k];
			if ($k == 2) {echo '<br>';} else {
				echo ' || ';
			}

		}
	}
}
?>
                <br>
                <?php
echo 'weight';
echo '<br>';
$counter = 0;
//for($j=0;$j<14;$j++){ //ini ori
for ($j = 0; $j < 5; $j++) {
	for ($k = 0; $k < 3; $k++) {
		echo $weight[$j][$k];
		if ($k == 2) {echo '<br>';} else {
			echo ' || ';
		}

	}
}
?>
                <br>
                  <?php
echo 'weighted';
echo '<br>';
$counter = 0;
for ($i = 0; $i < 4; $i++) {
	//for($j=0;$j<14;$j++){ //ini ori
	for ($j = 0; $j < 5; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $groups_weighted[$i][$j][$k];
			if ($k == 2) {echo '<br>';} else {
				echo ' || ';
			}

		}
	}
}
?>
                <br>
								<?php
echo 'scored';
echo '<br>';
//arsort($groups_ranking);
arsort($groups_rankings);
echo print_r($groups_rankings);
echo '<br>';
?>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url() ?>gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>gentelella/build/js/custom.min.js"></script>
  </body>
</html>
