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
			<?php echo form_open("hospital_administration/services/service_search/", array("class" => "form-horizontal"));?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-lg-4 control-label">Service  name: </label>
                        
                        <div class="col-lg-8">
                          	 <input type="text" class="form-control" name="service_name" placeholder=" Service name">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                	<div class="form-group">
                        <label class="col-lg-4 control-label">Depatment: </label>
                        
                        <div class="col-lg-8">
                            <select class="form-control" name="department_id">
                            	<option value="">--Select depatment</option>
                                <?php
                                    if($departments->num_rows() > 0)
                                    {
                                        foreach($departments->result() as $res)
                                        {
                                            $department_id = $res->department_id;
                                            $department_name = $res->department_name;
                                            
                                           echo '<option value="'.$department_id.'">'.$department_name.'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
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
