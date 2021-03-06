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
                            <a href="<?php echo site_url();?>hospital-administration/insurance-companies" class="btn btn-info pull-right">Back to companies</a>
                        </div>
                    </div>
                        
                    <!-- Adding Errors -->
                    <?php
                    if(isset($error)){
                        echo '<div class="alert alert-danger"> Oh snap! '.$error.'. </div>';
                    }
                    
                    $validation_errors = validation_errors();
                    
                    if(!empty($validation_errors))
                    {
                        echo '<div class="alert alert-danger"> Oh snap! '.$validation_errors.' </div>';
                    }
                    ?>
                    
                    <?php echo form_open($this->uri->uri_string(), array("class" => "form-horizontal", "role" => "form"));?>
                    <div class="row">
                    	<div class="col-sm-6">
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Company Name</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_name" placeholder="Company Name" value="<?php echo set_value('insurance_company_name');?>">
                                </div>
                            </div>
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Concact Person Name</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_contact_person_name" placeholder="Concact Person Name" value="<?php echo set_value('insurance_company_contact_person_name');?>">
                                </div>
                            </div>
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Contact Person Phone 1</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_contact_person_phone1" placeholder="Contact Person Phone 1" value="<?php echo set_value('insurance_company_contact_person_phone1');?>">
                                </div>
                            </div>
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Contact Person Phone 2</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_contact_person_phone2" placeholder="Contact Person Phone 2" value="<?php echo set_value('insurance_company_contact_person_phone2');?>">
                                </div>
                            </div>
                             <!-- Activate checkbox -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Activate Company?</label>
                                <div class="col-lg-8">
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios1" type="radio" checked value="1" name="insurance_company_status">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios2" type="radio" value="0" name="insurance_company_status">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    	<div class="col-sm-6">
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Contact Person email 1</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_contact_person_email1" placeholder="Contact Person email 1" value="<?php echo set_value('insurance_company_contact_person_email1');?>">
                                </div>
                            </div>
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Contact Person email 2</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="insurance_company_contact_person_email2" placeholder="Contact Person email 2" value="<?php echo set_value('insurance_company_contact_person_email2');?>">
                                </div>
                            </div>
                            
                            <!-- Company Name -->
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Insurance Company Description</label>
                                <div class="col-lg-8">
                                	<textarea name="insurance_company_description" class="form-control" rows="5" placeholder="Insurance Company Description"><?php echo set_value('insurance_company_description');?></textarea>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Pricing rate?</label>
                                <div class="col-lg-8">
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios1" type="radio" checked value="2" name="pricing_rate">
                                            Insuarance Rate
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios2" type="radio" value="1" name="pricing_rate">
                                            Cash paying Rate
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-actions center-align">
                        <button class="submit btn btn-primary" type="submit">
                            Add insurance company
                        </button>
                    </div>
                    <br />
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>
