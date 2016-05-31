<?php
$personnel_type_id = $this->session->userdata('personnel_type_id');

if(!empty($personnel_type_id) && ($personnel_type_id != 1))
{
?>

<div class="row">
    <div class="col-md-12">

      <!-- Widget -->
      <div class="widget boxed">
        <!-- Widget head -->
        <div class="widget-head">
          <h4 class="pull-left"><i class="icon-reorder"></i>Timesheet</h4>
          <div class="widget-icons pull-right">
            <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
            <a href="#" class="wclose"><i class="icon-remove"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>             

        <!-- Widget content -->
        <div class="widget-content">
          <div class="padd">
    	<div class="alert alert-info center-align">
        	Please fill in your timesheet in order to complete your monthly invoices online
        </div>
        
        <?php echo form_open('human-resource/fill-timesheet/3/'.$this->session->userdata('personnel_id'), array(''));?>
        	<div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Date : </label>
                    
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input data-format="yyyy-MM-dd" type="text" data-plugin-datepicker class="form-control" name="date" placeholder="Date" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Start time : </label>
                    
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <input type="text" class="form-control" data-plugin-timepicker="" name="start_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-md-12 control-label">End time : </label>
                        
                        <div class="col-md-12">		
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <input type="text" class="form-control" data-plugin-timepicker="" name="end_time">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-top:10px;">
                <div class="col-md-3 col-md-offset-5">
                    <button type="submit" class="btn btn-primary">Add hours</button>
                </div>
            </div>
        <?php echo form_close();?>
    </div>
    </div>
    </div>
</div>
</div>

<?php }?>
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
            <!-- Below line produces calendar. I am using FullCalendar plugin. -->
            <div id="appointments"></div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	var config_url = $('#config_url').val();
	var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
  $.ajax({
	type:'POST',
	url: config_url+"hr/schedules/get_schedules/<?php echo $schedule_id;?>",
	cache:false,
	contentType: false,
	processData: false,
	dataType: "json",
	success:function(data)
	{
		var appointments = [];
		var total_events = parseInt(data.total_events, 10);

		for(i = 0; i < total_events; i++)
		{
			var data_array = [];
			
			data_title = data.title[i];
			data_start = data.start[i];
			data_end = data.end[i];
			data_backgroundColor = data.backgroundColor[i];
			data_borderColor = data.borderColor[i];
			data_allDay = data.allDay[i];
			data_url = data.url[i];
			
			//add the items to an array
			data_array.title = data_title;
			data_array.start = data_start;
			data_array.end = data_end;
			data_array.backgroundColor = data_backgroundColor;
			data_array.borderColor = data_borderColor;
			data_array.allDay = data_allDay;
			data_array.url = data_url;
			//console.log(data_array);
			appointments.push(data_array);
		}
		console.log(appointments);
		/*for(var i in data){
			appointments.push([i, data [i]]);alert(data[i]);
		}*/
		
		$('#appointments').fullCalendar({
			  header: {
				left: 'prev',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,next'
			  },
			  editable: true,
			  events: appointments
			});
	},
	error: function(xhr, status, error) {
		alert("XMLHttpRequest=" + xhr.responseText + "\ntextStatus=" + status + "\nerrorThrown=" + error);
	}
});

});
</script>