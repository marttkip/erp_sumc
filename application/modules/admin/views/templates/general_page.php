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
		

		<!-- Script for this page -->
		<script type="text/javascript">
		$(function () {

		    

		});
		</script>
        
<link rel="stylesheet" href="<?php echo base_url()."assets/themes/bluish";?>/style/jquery.cleditor.css"> 
<script src="<?php echo base_url()."assets/themes/bluish";?>/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/themes/tinymce/tinymce.min.js"></script>
		 <script src='<?php echo base_url()."assets/bluish/"?>src/jquery-customselect.js'></script>
	    <link href='<?php echo base_url()."assets/bluish/"?>src/jquery-customselect.css' rel='stylesheet' />
        <script type="text/javascript">
            tinymce.init({
                selector: ".cleditor"
            });
        </script>
	</body>
</html>


