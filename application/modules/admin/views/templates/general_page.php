<?php 
	
	if(!isset($contacts))
	{
		$contacts = $this->site_model->get_contacts();
	}
	$data['contacts'] = $contacts; 

?>
<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>
        <?php echo $this->load->view('admin/includes/header', $contacts, TRUE); ?>
    </head>

	<body>
    	<input type="hidden" id="base_url" value="<?php echo site_url();?>">
    	<input type="hidden" id="config_url" value="<?php echo site_url();?>">
    	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
    	
        <input type="hidden" id="config_url" value="<?php echo site_url();?>"/>
		<?php echo $this->load->view('admin/includes/navigation');?>

	    <!-- Main content starts -->
	    
	    <div class="content">
	    
	        <!-- Sidebar -->
	        <?php echo $this->load->view('admin/includes/sidebar', '', TRUE); ?>
	        <!-- Sidebar ends -->
	        
	        <!-- Main bar -->
	        <div class="mainbar">
	        
	            <!-- Page heading -->
	            <?php //echo $this->load->view('includes/breadcrumbs');?>
	            <!-- Page heading ends -->
	            
	            <!-- Matter -->
	            
	            <div class="matter">
	                <div class="container" style="padding-top:20px;">
	                	
							<?php echo $content;?>
		                			  
	                </div>
	            </div>
	            
	            <!-- Matter ends -->
	        
	        </div>
	        
	        <!-- Mainbar ends -->	    	
	        <div class="clearfix"></div>
	    
	    </div>
        
        <div class="modal fade bs-example-modal-lg" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <?php echo form_open('auth/modal_login_user', array('id' => 'modal_login_user', 'class' => 'form-horizontal'));?>
                    <div class="modal-header">
                    	<h4 class="modal-title" id="gridSystemModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                        <p class="alert alert-warning center-align">You have been logged out. Please log in again</p>
                        <div id="login_modal_error"></div>
                        <div class="row">
                            <div class="col-md-12">
                            	<div class="form-group">
                                    <i class="icon-user"></i>
                                    <input type="text" class="form-control" id="modal_personnel_username" name="personnel_username" placeholder="Username" required>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <i class="icon-lock"></i>
                                    <input type="password" class="form-control" id="modal_personnel_password" name="personnel_password" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <?php echo form_close();?>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      <!-- JS -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/bootstrap.js"></script> <!-- Bootstrap -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery-ui-1.10.2.custom.min.js"></script> <!-- jQuery UI -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

		<!-- jQuery Flot -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/excanvas.min.js"></script>
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.flot.js"></script>
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.flot.axislabels.js"></script>
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.flot.stack.js"></script>

		<!--<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.gritter.min.js"></script>--> <!-- jQuery Gritter -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/sparklines.js"></script> <!-- Sparklines -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/filter.js"></script> <!-- Filter for support page -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/custom.js"></script> <!-- Custom codes -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/charts.js"></script> <!-- Custom chart codes -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.mousewheel.js"></script> <!-- Mouse Wheel -->
		<script src="<?php echo base_url()."assets/bluish/"?>js/jquery.horizontal.scroll.js"></script> <!-- horizontall scroll with mouse wheel -->
		<script type="text/javascript" src="<?php echo base_url()."assets/bluish/"?>js/jquery.slimscroll.min.js"></script> <!-- vertical scroll with mouse wheel -->
		<!-- Theme Custom -->
		<script src="<?php echo base_url()."assets/themes/porto-admin/1.4.1/";?>assets/javascripts/theme.custom.js"></script>
		
<link rel="stylesheet" href="<?php echo base_url()."assets/themes/bluish";?>/style/jquery.cleditor.css"> 
<!--<script src="<?php echo base_url()."assets/themes/bluish";?>/js/jquery.cleditor.min.js"></script> --> <!-- CLEditor -->
		 <script src='<?php echo base_url()."assets/bluish/"?>src/jquery-customselect.js'></script>
	    <link href='<?php echo base_url()."assets/bluish/"?>src/jquery-customselect.css' rel='stylesheet' />
        <script type="text/javascript">
		
		//initiate WYSIWYG editors
		tinymce.init({
			selector: ".cleditor",
			height : "300"
		});
		
		$( document ).ready(function() {
			$('#nurse_date').datetimepicker({
				pickTime: false
			});
			
			$('#nurse_time').datetimepicker({
				pickDate: false
			});
			
			//Check if user is logged in
			(function is_logged_in() {
        
				$.ajax({
					url: base_url+'auth/is_logged_in',
					cache:false,
					contentType: false,
					processData: false,
					dataType: 'text',
					statusCode: {
						302: function() {
							//alert('302');
						}
					},
					success: function(data) 
					{
						if(data === 'false')
						{
							$('#login_modal').modal('show');
						}
					},
					complete: function(data) 
					{
						setTimeout(is_logged_in, 3000);
					}
				});
			})();
		});
		
		//modal login
		$(document).on("submit", "form#modal_login_user", function (e) 
		{
			e.preventDefault();
			var config_url = $('#config_url').val();
			var data_url = config_url+"auth/modal_login_user";
			var username = $('#modal_personnel_username').val();
			var password = $('#modal_personnel_password').val();
			$.ajax({
				type:'POST',
				url: data_url,
				data:{personnel_username: username, personnel_password: password},
				dataType: 'json',
				success:function(data)
				{
					if(data.result == 'success')
					{
						$('#modal_login_user')[0].reset();
						$('#login_modal').modal('hide');
					}
					else
					{
						$('#login_modal_error').html('<div class="alert alert-danger center-align">'+data.message+'</div>');
					}
				},
				error: function(xhr, status, error) 
				{
					$('#login_modal_error').html('<div class="alert alert-danger center-align">'+error+'</div>');
				}
			
			});
			return false;
		})
		</script>
	</body>
</html>
