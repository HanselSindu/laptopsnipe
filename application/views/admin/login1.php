<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laptop Advisor</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>gentelella/css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url()?>admin/Login/login_validation" >
              <h1>Admin LA</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="form-username" required="" />
                <!-- <span class = "text-danger"> <?php //echo form_error('form-username'); ?></span>  -->
                <!-- kalau ga ikut rule kena warning -->
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="form-password" required="" />
                <!-- <span class = "text-danger"> <?php //echo form_error('form-password'); ?></span>  -->
              </div>
              <div>
                <button class="btn btn-default submit" name="form-login" value="Submit">Log in</button>
                <?php echo 
                	$this->session->flashdata("error");
                ?>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
