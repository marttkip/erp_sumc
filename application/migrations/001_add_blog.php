<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

	public function up()
	{
		//select visit notes
		$this->db->select('visit_id, visit_date, visit_symptoms, visit_objective_findings, visit_assessment, visit_plan, visit_time, personnel_id');
		
		$query = $this->db->get('visit');
		
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $res)
			{
				$visit_id = $res->visit_id;
				$visit_date = $res->visit_date;
				$visit_symptoms = $res->visit_symptoms;
				$visit_objective_findings = $res->visit_objective_findings;
				$visit_assessment = $res->visit_assessment;
				$visit_plan = $res->visit_plan;
				$visit_time = $res->visit_time;
				$personnel_id = $res->personnel_id;
				
				//update symptoms
				if(!empty($visit_symptoms) && ($visit_symptoms != NULL))
				{
					$symptoms_data = array(
						"notes_type_id" => 3,
						"visit_id" => $visit_id,
						"notes_name" => $visit_symptoms,
						"notes_time" => date('H:i:s', strtotime($visit_time)),
						"notes_date" => $visit_date,
						'created'=>date('Y-m-d H:i:s'),
						'created_by'=>$personnel_id,
						'modified_by'=>$personnel_id
					);
					
					if($this->db->insert('notes', $symptoms_data))
					{
					}
				}
				
				//update objective_findings
				if(!empty($visit_objective_findings) && ($visit_objective_findings != NULL))
				{
					$objective_findings_data = array(
							"notes_type_id" => 4,
							"visit_id" => $visit_id,
							"notes_name" => $visit_objective_findings,
							"notes_time" => date('H:i:s', strtotime($visit_time)),
							"notes_date" => $visit_date,
							'created'=>date('Y-m-d H:i:s'),
							'created_by'=>$personnel_id,
							'modified_by'=>$personnel_id
						);
			
					if($this->db->insert('notes', $objective_findings_data))
					{
					}
				}
				
				//update assessment
				if(!empty($visit_assessment) && ($visit_assessment != NULL))
				{
					$assessment_data = array(
							"notes_type_id" => 5,
							"visit_id" => $visit_id,
							"notes_name" => $visit_assessment,
							"notes_time" => date('H:i:s', strtotime($visit_time)),
							"notes_date" => $visit_date,
							'created'=>date('Y-m-d H:i:s'),
							'created_by'=>$personnel_id,
							'modified_by'=>$personnel_id
						);
			
					if($this->db->insert('notes', $assessment_data))
					{
					}
				}
				
				//update plan
				if(!empty($visit_plan) && ($visit_plan != NULL))
				{
					$plan_data = array(
							"notes_type_id" => 6,
							"visit_id" => $visit_id,
							"notes_name" => $visit_plan,
							"notes_time" => date('H:i:s', strtotime($visit_time)),
							"notes_date" => $visit_date,
							'created'=>date('Y-m-d H:i:s'),
							'created_by'=>$personnel_id,
							'modified_by'=>$personnel_id
						);
			
					if($this->db->insert('notes', $plan_data))
					{
					}
				}
			}
		}
	}

	public function down()
	{
		//$this->dbforge->drop_table('blog');
	}
}