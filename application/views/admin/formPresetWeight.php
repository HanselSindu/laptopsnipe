<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url()?>gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url()?>gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                <h3>Preset Weighting <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Laptop Usage Weightings<small>for preset weighting</small></h2>
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
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                       <thead>
                        <tr>
                          <th>Usage</th>
                          <th>Input</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($groups as $row): ?>
                        <tr>
                        <td><?php echo $row->ntbk_usage;?></td>
                        <?php
                          $id = (string)$row->id_usage;
                          $usage = (string)$row->ntbk_usage;
                        ?>
                        <td><a onclick="inputUsage('<?php echo $id ?>', '<?php echo $usage ?>')" class="btn btn-dark">Weigh</a></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Importance Level for Criteria</h2>
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
                    <form id="ReviewInput" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>admin/Form/inputPresetWeight">
                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());?>
                      <div class="form-group">
                        <label for="ling-var" class="control-label col-md-3 col-sm-3 col-xs-12">Reviewer<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="rev-name" required="required" name="rev-name">
                          <?php 
                            foreach($users as $row){ 
                            echo '<option value="'.$row->id.'">'.$row->username.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>          
                      <div class="form-group">
                        <label for="prod-name" class="control-label col-md-3 col-sm-3 col-xs-12">Usage<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="usage-name" disabled="disabled" selected="selected" required="required" class="form-control col-md-7 col-xs-12" type="text" name="usage-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cpu" class="control-label col-md-3 col-sm-3 col-xs-12">CPU Performance<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="cpu" required="required" name="cpu">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gpu" class="control-label col-md-3 col-sm-3 col-xs-12">GPU Performance<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="gpu" required="required" name="gpu">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="battery" class="control-label col-md-3 col-sm-3 col-xs-12">Battery Life<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="battery" required="required" name="battery">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="audio" class="control-label col-md-3 col-sm-3 col-xs-12">Audio Quality<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="audio" required="required" name="audio">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keyboard" class="control-label col-md-3 col-sm-3 col-xs-12">Keyboard Quality<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="keyboard" required="required" name="keyboard">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="wifi" class="control-label col-md-3 col-sm-3 col-xs-12">Wi-Fi Connectivity<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="wifi" required="required" name="wifi">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="durability" class="control-label col-md-3 col-sm-3 col-xs-12">Durability<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="durability" required="required" name="durability">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="warranty" class="control-label col-md-3 col-sm-3 col-xs-12">Warranty<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="warranty" required="required" name="warranty">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cooling" class="control-label col-md-3 col-sm-3 col-xs-12">Cooling System<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="cooling" required="required" name="cooling">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cooling" class="control-label col-md-3 col-sm-3 col-xs-12">RAM<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="ram" required="required" name="ram">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cooling" class="control-label col-md-3 col-sm-3 col-xs-12">Video Memory<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="video-mem" required="required" name="video-mem">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cooling" class="control-label col-md-3 col-sm-3 col-xs-12">Storage<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="storage" required="required" name="storage">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cooling" class="control-label col-md-3 col-sm-3 col-xs-12">Weight<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" input id="weight" required="required" name="weight">
                          <?php 
                            foreach($fuzzy as $row){ 
                            echo '<option value="'.$row->id_fuzzyweight.'">'.$row->linguistic_var_w.'</option>';
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="id-usage" class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="id-usage" required="required" class="form-control col-md-7 col-xs-12" type="hidden" name="id-usage">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-dark" type="button">Cancel</button>
                          <button id='submit-preset' disabled='true' type="submit" class="btn btn-dark">Submit</button>
                        </div>
                      </div>
                </form>
                  </div>
                </div>
              </div> 
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Usage <small>Preset Weightings</small></h2>
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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Reviewer</th>
                        	<th>Usage</th>
                        	<th>CPU</th>
                          <th>GPU</th>
                          <th>Battery</th>
                          <th>Audio</th>
                          <th>Keyboard</th>
                          <th>Wi-Fi</th>
                          <th>Durability</th>
                          <th>Warranty</th>
                          <th>Cooling Systems</th>
                          <th>RAM</th>
                          <th>Video Memory</th>
                          <th>Storage</th>
                          <th>Weight</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($weight as $row): ?>
    										<tr>
                        <td><?php cetak($row->username);?></td>
    										<td><?php cetak($row->ntbk_usage);?></td>
    										<td><?php cetak($row->cpu);?></td>
        								<td><?php cetak($row->gpu);?></td>
        								<td><?php cetak($row->battery);?></td>
        								<td><?php cetak($row->audio);?></td>
        								<td><?php cetak($row->keyboard);?></td>
        								<td><?php cetak($row->wifi);?></td>
        								<td><?php cetak($row->durability);?></td>
        								<td><?php cetak($row->warranty);?></td>
        								<td><?php cetak($row->cooling);?></td>
                        <td><?php cetak($row->ram);?></td>
                        <td><?php cetak($row->video_mem);?></td>
                        <td><?php cetak($row->storage);?></td>
                        <td><?php cetak($row->weight);?></td>
    										</tr>
												<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

        <!-- Javascript -->
            <script>
              function inputUsage(id, usage){

                var divelement = document.getElementById('usage-name');
                var divelement1 = document.getElementById('id-usage');
                
                divelement.value=usage;
                divelement1.value=id;

                document.getElementById('submit-preset').disabled=false;
                //divelement.value = id;
                //alert(brandname);
                
              }

              function reviewProducts(id){

                //var divelement = document.getElementById('prod-name');
                
                //divelement.value = id;
                alert('cyka blyat');
                
              }
            </script>
        <!-- Javascript -->

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
    <!-- iCheck -->
    <script src="<?php echo base_url()?>gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>gentelella/build/js/custom.min.js"></script>

  </body>
</html>
