 <section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Search General queue Patients for <?php echo date('jS M Y',strtotime(date('Y-m-d'))); ?></h2>
    </header>
    <!-- Widget content -->
         <div class="panel-body">
    	<div class="padd">
			<?php
			
			
			echo form_open("reception/search_general_queue/".$page_name, array("class" => "form-horizontal"));
			
            
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Patient Type: </label>
                        
                        <div class="col-md-8">
                            <select class="form-control" name="visit_type_id">
                            	<option value="">---Select Visit Type---</option>
                                <?php
                                    if(count($type) > 0){
                                        foreach($type as $row):
                                            $type_name = $row->visit_type_name;
                                            $type_id= $row->visit_type_id;
                                            ?><option value="<?php echo $type_id; ?>" ><?php echo $type_name ?></option>
                                        <?php	
                                        endforeach;
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Patient number: </label>
                        
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="patient_number" placeholder="Patient number">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">I.D. No.: </label>
                        
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="patient_national_id" placeholder="I.D. No.">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">First name: </label>
                        
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="surname" placeholder="First name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Other Names: </label>
                        
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="othernames" placeholder="Other Names">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <div class="center-align">
                                <button type="submit" class="btn btn-info">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            echo form_close();
            ?>
    	</div>
</section>