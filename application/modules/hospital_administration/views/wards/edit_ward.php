<div class="row">
    <div class="col-md-12">

      <!-- Widget -->
      <div class="widget boxed">
        <!-- Widget head -->
        <div class="widget-head">
          <h4 class="pull-left"><i class="icon-reorder"></i><?php echo $title;?></h4>
          <div class="widget-icons pull-right">
            <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
            <a href="#" class="wclose"><i class="icon-remove"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>             

        <!-- Widget content -->
        <div class="widget-content">
          <div class="padd">
                	<div class="row" style="margin-bottom:20px;">
                        <div class="col-lg-12">
                            <a href="<?php echo site_url();?>hospital-administration/wards" class="btn btn-info pull-right">Back to wards</a>
                        </div>
                    </div>
                <!-- Adding Errors -->
            <?php
            if(isset($error)){
                echo '<div class="alert alert-danger"> Oh snap! '.$error.' </div>';
            }
			
			//the ward details
			$ward_name = $ward[0]->ward_name;
			$ward_status = $ward[0]->ward_status;
            
            $validation_errors = validation_errors();
            
            if(!empty($validation_errors))
            {
				$ward_name = set_value('ward_name');
				$ward_status = set_value('ward_status');
				
                echo '<div class="alert alert-danger"> Oh snap! '.$validation_errors.' </div>';
            }
			
            ?>
            
            <?php echo form_open($this->uri->uri_string(), array("class" => "form-horizontal", "role" => "form"));?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-lg-4 control-label">Ward name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="ward_name" placeholder="Ward name" value="<?php echo $ward_name;?>" required>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-lg-4 control-label">Activate ward?</label>
                        <div class="col-lg-4">
                            <div class="radio">
                                <label>
                                    <?php
                                    if($ward_status == 1){echo '<input id="optionsRadios1" type="radio" checked value="1" name="ward_status">';}
                                    else{echo '<input id="optionsRadios1" type="radio" value="1" name="ward_status">';}
                                    ?>
                                    Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <?php
                                    if($ward_status == 0){echo '<input id="optionsRadios1" type="radio" checked value="0" name="ward_status">';}
                                    else{echo '<input id="optionsRadios1" type="radio" value="0" name="ward_status">';}
                                    ?>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions center-align">
                <button class="submit btn btn-primary" type="submit">
                    Edit ward
                </button>
            </div>
            <br />
            <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>