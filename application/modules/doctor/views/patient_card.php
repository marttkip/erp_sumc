<?php
$data['visit_id'] = $visit_id;
$patient = $this->reception_model->patient_names2(NULL, $visit_id);
$patient_type = $patient['patient_type'];
$patient_othernames = $patient['patient_othernames'];
$patient_surname = $patient['patient_surname'];
$patient_type_id = $patient['visit_type_id'];
$account_balance = $patient['account_balance'];
$visit_type_name = $patient['visit_type_name'];
$patient_id = $patient['patient_id'];
$patient_date_of_birth = $patient['patient_date_of_birth'];
$age = $this->reception_model->calculate_age($patient_date_of_birth);
$visit_date = $this->reception_model->get_visit_date($visit_id);
$gender = $patient['gender'];
$visit_date = date('jS M Y',strtotime($visit_date));
$age = $age;
$visit_date = $visit_date;
$gender = $gender;

$visit_id = $visit_id;
$dental = 0;
?>
<section class="panel">
	<header class="panel-heading">
		<h2 class="panel-title"Patient card</h2>
	</header>
	
	<!-- Widget content -->
	
	<div class="panel-body">
		
		<div class="well well-sm info">
			<h5 style="margin:0;">
				<div class="row">
					<div class="col-md-2">
						<div class="row">
							<div class="col-lg-6">
								<strong>First name:</strong>
							</div>
							<div class="col-lg-6">
								<?php echo $patient_surname;?>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="row">
							<div class="col-lg-6">
								<strong>Other names:</strong>
							</div>
							<div class="col-lg-6">
								<?php echo $patient_othernames;?>
							</div>
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="row">
							<div class="col-lg-6">
								<strong>Gender:</strong>
							</div>
							<div class="col-lg-6">
								<?php echo $gender;?>
							</div>
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="row">
							<div class="col-lg-6">
								<strong>Age:</strong>
							</div>
							<div class="col-lg-6">
								<?php echo $age;?>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="row">
							<div class="col-lg-6">
								<strong>Account balance:</strong>
							</div>
							<div class="col-lg-6">
								Kes <?php echo number_format($account_balance, 2);?>
							</div>
						</div>
					</div>
				</div>
			</h5>
		</div>
        
        <div class="center-align">
        	<h4>Visit date: <?php echo $visit_date;?></h4>
          	<?php
              	$error = $this->session->userdata('error_message');
              	$validation_error = validation_errors();
        				$success = $this->session->userdata('success_message');
        				
        				if(!empty($error))
        				{
        					echo '<div class="alert alert-danger">'.$error.'</div>';
        					$this->session->unset_userdata('error_message');
        				}
        				
        				if(!empty($validation_error))
        				{
        					echo '<div class="alert alert-danger">'.$validation_error.'</div>';
        				}
        				
        				if(!empty($success))
        				{
        					echo '<div class="alert alert-success">'.$success.'</div>';
        					$this->session->unset_userdata('success_message');
        				}
      			?>
          </div>

		<div class="tabbable" style="margin-bottom: 18px;">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#vitals-pane<?php echo $visit_id;?>" data-toggle="tab">Vitals</a></li>
                <li><a href="#lifestyle<?php echo $visit_id;?>" data-toggle="tab">Lifestyle</a></li>
                <li><a href="#previous-vitals<?php echo $visit_id;?>" data-toggle="tab">Previous Vitals</a></li>
                <li><a href="#soap<?php echo $visit_id;?>" data-toggle="tab">SOAP</a></li>
            </ul>
            <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                <div class="tab-pane active" id="vitals-pane<?php echo $visit_id;?>">
                  <?php echo $this->load->view("patients/vitals_old", '', TRUE);?>
                </div>
                
                <div class="tab-pane" id="lifestyle<?php echo $visit_id;?>">
                	<?php echo $this->load->view("nurse/patients/lifestyle", '', TRUE); ?>
                </div>
                <div class="tab-pane" id="previous-vitals<?php echo $visit_id;?>">
                  
                  <?php echo $this->load->view("nurse/patient_previous_vitals", '', TRUE);?>
                  
                </div>
                <div class="tab-pane" id="soap<?php echo $visit_id;?>">
                  
                  <?php echo $this->load->view("patients/soap", '', TRUE);?>
                  
                </div>
                
            </div>
        </div>

    </div>
        
</section>

<script type="text/javascript">
	$(document).ready(function(){
		$('.patient_history_modal button').css('display', 'none');
		$('.patient_history_modal #soap div.alert').css('display', 'none');
		$('.patient_history_modal #vitals-pane #nurses-notes-div').css('display', 'none');
		$('.patient_history_modal a.btn').css('display', 'none');
		$('.patient_history_modal input.btn').css('display', 'none');
		$('.patient_history_modal input').prop('disabled', true);
		$('.patient_history_modal textarea').prop('disabled', true);
		$('.patient_history_modal select').prop('disabled', true);
	});
</script>