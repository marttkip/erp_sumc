 <!-- Widget -->
      <div class="widget boxed">
        <!-- Widget head -->
        <div class="widget-head">
          <h4 class="pull-left"><i class="icon-reorder"></i>Search Containers</h4>
          <div class="widget-icons pull-right">
            <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
            <a href="#" class="wclose"><i class="icon-remove"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>             

        <!-- Widget content -->
        <div class="widget-content">
          <div class="padd">
		<?php
        echo form_open("pharmacy/search_container_type", array("class" => "form-horizontal"));
        ?>
        <div class="row">
            <div class="col-md-10">
                
                <div class="form-group">
                    <label class="col-lg-4 control-label">Container type name: </label>
                    
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="container_type_name" placeholder="Container types name">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                
                <div class="center-align">
                    <button type="submit" class="btn btn-info btn-sm">Search containers</button>
                </div>
            </div>
        </div>
        
        <?php
        echo form_close();
        ?>
    </div>
</div>
</div>
