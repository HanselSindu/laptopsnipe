<!DOCTYPE html>
<html lang="en">
<head></head>
<body class="nav-md">
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>admin/Form/formInputLaptop">

                      <div class="form-group">
                        <label for="l-val" class="control-label col-md-3 col-sm-3 col-xs-12">L Value<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="l-val" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="l-val" value="abc">
                        </div>
                      </div>
<br><br>
		      <div class="form-group">
                        <label for="m-val" class="control-label col-md-3 col-sm-3 col-xs-12">M Value<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="m-val" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="m-val">
                        </div>
                      </div>
<br><br>
		      <div class="form-group">
                        <label for="u-val" class="control-label col-md-3 col-sm-3 col-xs-12">U Value<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="u-val" required="required" class="form-control col-md-7 col-xs-12" type="text" 
                          name="u-val">
                        </div>
                      </div>
<br><br>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-dark" type="button">Cancel</button>
                          <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                      </div>

	</form>                                                                                                                                                    
 </body>
</html>
