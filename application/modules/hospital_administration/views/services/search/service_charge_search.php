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
          
			<?php echo form_open("hospital_administration/services/service_charge_search/".$service_id, array("class" => "form-horizontal"));?>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-4 control-label">Service charge name: </label>
                        
                        <div class="col-lg-8">
                          	 <input type="text" class="form-control" name="service_charge_name" placeholder=" Service charge name">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                	<div class="form-group">
                        <label class="col-lg-4 control-label">Patient type: </label>
                        
                        <div class="col-lg-8">
                            <select class="form-control" name="visit_type_id">
                            	<option value="">-- Select patient type --</option>
                                <?php
                                    if($visit_types->num_rows() > 0)
                                    {
                                        foreach($visit_types->result() as $res)
                                        {
                                            $visit_type_id = $res->visit_type_id;
                                            $visit_type_name = $res->visit_type_name;
                                            
                                            if($visit_type_id == set_value("visit_type_id"))
                                            {
                                                echo '<option value="'.$visit_type_id.'" selected>'.$visit_type_name.'</option>';
                                            }
                                            
                                            else
                                            {
                                                echo '<option value="'.$visit_type_id.'">'.$visit_type_name.'</option>';
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="center-align">
                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </div>
            <?php
            echo form_close();
            ?>
            </div>
        </div>
    </div>
</div>
</div>
