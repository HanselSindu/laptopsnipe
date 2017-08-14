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
    <link href="<?php echo base_url()?>gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url()?>gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url()?>gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url()?>gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url()?>gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url()?>gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url('Home');?>" class="site_title"><i class="fa fa-paw"></i> <span>User Webpage</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>gentelella/production/images/Hansel.jpg" alt="..." class="img-circle profile_img">
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
                  <li><a href="<?php echo site_url('admin/Home/Dashboard');?>"><i class="fa fa-home"></i> Home </a>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/Form/formInputLaptop');?>">Input Laptop Data</a></li>
                      <li><a href="<?php echo site_url('admin/Form/formScoreLaptop');?>">Input Laptop Scores</a></li>
                      <li><a href="<?php echo site_url('admin/Form/formPresetWeight');?>">Input Preset Weights</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url('admin/Tables/dataLaptop');?>"><i class="fa fa-table"></i> Laptop Data</a>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Fuzzy TOPSIS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/Fuzzy/fuzzyEdit');?>">Edit Fuzzy Ratings</a></li>
                      <li><a href="<?php echo site_url('admin/MCDM_FTOPSIS/fuzzyTopsis');?>">Fuzzy TOPSIS Method configurations</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url()?>admin/Login/logout">
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
                <h3>Forms</h3>
              </div>

<!--               <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input Laptop <small>input the specifications and details about the laptop here</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>admin/Form/inputLaptop">
                    <!-- CSRF protection -->
                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());?> 
                    <!-- CSRF protection -->
<!-- form input utama -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand">Brand<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" input id="brand" required="required" name="brand">
            					<?php 
											foreach($groups as $row){ 
              					echo '<option value="'.$row->id_brand.'">'.$row->brand_name.'</option>';
            					} ?>
            					</select>
            					</div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="model-name">Model Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="model-name" name="model-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price($)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="price" name="price" step="any" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cpu" class="control-label col-md-3 col-sm-3 col-xs-12">CPU<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cpu" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="cpu">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RAM</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="ram" required="required" name="ram">
                            <option value= "1">1 GB</option>
                            <option value= "2">2 GB</option>
                            <option value= "4">4 GB</option>
                            <option value= "6">6 GB</option>
                            <option value= "8">8 GB</option>
                            <option value= "16">16 GB</option>
                            <option value= "24">24 GB</option>
                            <option value= "32">32 GB</option>
                            <option value= "64">64 GB</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="gpu" class="control-label col-md-3 col-sm-3 col-xs-12">GPU<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gpu" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="gpu">
                        </div>
                      </div>

											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Video Memory</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="video-memory" required="required" name="video-memory">
                            <option value= "0">On-board</option>
                            <option value= "0.256">256 MB</option>
                            <option value= "0.512">512 MB</option>
                            <option value= "1">1 GB</option>
                            <option value= "2">2 GB</option>
                            <option value= "3">3 GB</option>
                            <option value= "4">4 GB</option>
                            <option value= "6">6 GB</option>
                            <option value= "8">8 GB</option>
                            <option value= "16">16 GB</option>
                          </select>
                        </div>
                      </div>

											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">HDD/Flash Capacity</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="storage-capacity" required="required" name="storage-capacity">
                            <option value="0">None</option>
                            <option value="16">16 GB</option>
                            <option value="32">32 GB</option>
                            <option value="64">64 GB</option>
                            <option value="128">128 GB</option>
                            <option value="160">160 GB</option>
                            <option value="256">256 GB</option>
                            <option value="320">320 GB</option>
                            <option value="500">500 GB</option>
                            <option value="512">512 GB</option>
                            <option value="750">750 GB</option>
                            <option value="1000">1 TB</option>
                            <option value="2000">2 TB</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Screen Size(inch)</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="screen-size" value="10" step="any" name="screen-size" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Screen Resolution</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="screen-res" required="required" name="screen-res">
                            <option value="1024x768">1024x768</option>
                            <option value="1280x800">1280x800</option>
                            <option value="1360x768">1360x768</option>
                            <option value="1366x768">1366x768</option>
                            <option value="1440x900">1440x900</option>
                            <option value="1600x900">1600x900</option>
                            <option value="1660x960">1660x960</option>
                            <option value="1920x1080">1920x1080</option>
                            <option value="1920x1200">1920x1200</option>
                            <option value="2304x1440">2304x1440</option>
                            <option value="2560X1440">2560X1440</option>
														<option value="2880x1800">2880x1800</option>
                            <option value="3840x2160">3840x2160</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="audio" class="control-label col-md-3 col-sm-3 col-xs-12">Audio<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="audio" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="audio">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keyboard" class="control-label col-md-3 col-sm-3 col-xs-12">Keyboard<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="keyboard" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="keyboard">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="battery" class="control-label col-md-3 col-sm-3 col-xs-12">Battery<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="battery" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="battery">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="weight" class="control-label col-md-3 col-sm-3 col-xs-12">Weight (Kg)<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="weight" required="required" class="form-control col-md-7 col-xs-12" type="number" 
                          min="0" step="any" name="weight"> <!-- step="any" buat desimal -->
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SSD</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="ssd" required="required" name="ssd">
                            <option value="0">No SSD</option>
                            <option value="32">32 GB</option>
                            <option value="64">64 GB</option>
                            <option value="128">128 GB</option>
                            <option value="256">256 GB</option>
                            <option value="512">512 GB</option>
                            <option value="1000">1 TB</option>
                          </select>
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SSD</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="ssd" required="required" name="ssd">
                            <option value="0">No SSD</option>
                            <option value="16">16 GB</option>
                            <option value="32">32 GB</option>
                            <option value="64">64 GB</option>
                            <option value="128">128 GB</option>
                            <option value="160">160 GB</option>
                            <option value="256">256 GB</option>
                            <option value="320">320 GB</option>
                            <option value="500">500 GB</option>
                            <option value="512">512 GB</option>
                            <option value="750">750 GB</option>
                            <option value="1000">1 TB</option>
                            <option value="2000">2 TB</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Webcam</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="webcam" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="webcam" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="webcam" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Touchscreen</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="touchscreen" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="touchscreen" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="touchscreen" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bluetooth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="bluetooth" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="bluetooth" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="bluetooth" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">HDMI</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="hdmi" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="hdmi" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="hdmi" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LAN Port</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="lan" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="lan" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="lan" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SD Card Port</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="sdcard" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="sdcard" value="1"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="sdcard" value="0"> &nbsp; No &nbsp;
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand">Include OS<span class="required"></span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" input id="os" required="required" name="os">
                      <option value="0">DOS</option>
                      <?php 
                      foreach($os as $row){ 
                        echo '<option value="'.$row->os_id.'">'.$row->os_name.'</option>';
                      } ?>
                      </select>
                      </div>
                      </div>
<!-- class="btn btn-primary" -> blue button -->
<!-- form input utama -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
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
    <script src="<?php echo base_url()?>gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url()?>gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url()?>gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url()?>gentelella/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url()?>gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url()?>gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url()?>gentelella/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url()?>gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url()?>gentelella/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>gentelella/build/js/custom.min.js"></script>
	
  </body>
</html>
