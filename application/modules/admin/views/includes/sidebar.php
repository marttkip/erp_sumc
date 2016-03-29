<?php
	$personnel_id = $this->session->userdata('personnel_id');
	
	if($personnel_id == 0)
	{
		$parents = $this->sections_model->all_parent_sections('section_position');
	}
	
	else
	{
		$personnel_roles = $this->personnel_model->get_personnel_roles($personnel_id);
		
		$parents = $personnel_roles;
	}
	$children = $this->sections_model->all_child_sections();
	
	$sections = '';
	
	if($parents->num_rows() > 0)
	{
		foreach($parents->result() as $res)
		{
			$section_parent = $res->section_parent;
			$section_id = $res->section_id;
			$section_name = $res->section_name;
			$section_icon = $res->section_icon;
			
			if($section_parent == 0)
			{
				$web_name = strtolower($this->site_model->create_web_name($section_name));
				$link = site_url().$web_name;
				$section_children = $this->admin_model->check_children($children, $section_id, $web_name);
				$total_children = count($section_children);
				
				if($total_children == 0)
				{
					if($title == $section_name)
					{
						$sections .= '<li class="nav-active">';
					}
					
					else
					{
						$sections .= '<li>';
					}
					$sections .= '
						<a href="'.$link.'">
							<!--<span class="pull-right label label-primary">182</span>-->
							<i class="fa fa-'.$section_icon.'" ></i>'.$section_name.'
						</a>
					</li>
					';
				}
				
				else
				{
					if($title == $section_name)
					{
						$sections .= '<li class="nav-active has_submenu">';
					}
					
					else
					{
						$sections .= '<li class="has_submenu">';
					}
					$sections .= '
						
						 <a href="#">
		                    <!-- Menu name with icon -->
		                    <i class="fa fa-'.$section_icon.'"></i> '.$section_name.'
		                </a>
						<ul>';
					
					//children
					for($r = 0; $r < $total_children; $r++)
					{
						$name = $section_children[$r]['section_name'];
						$link = $section_children[$r]['link'];
						
						$sections .= '
							<li>
								<a href="'.$link.'">
									 '.$name.'
								</a>
							</li>
						';
					}
					
					$sections .= '
					</ul></li>
					';
				}
			}
			
			else
			{
				//get parent section
				$parent_query = $this->sections_model->get_section($section_parent);
				
				$parent_row = $parent_query->row();
				$parent_name = $parent_row->section_name;
				$section_icon = $parent_row->section_icon;
				
				$web_name = strtolower($this->site_model->create_web_name($parent_name));
				$link = site_url().$web_name.'/'.strtolower($this->site_model->create_web_name($section_name));
				
				$sections .= '
				<li>
					<a href="'.$link.'">
						<i class="fa fa-'.$section_icon.'"></i>'.$section_name.'
					</a>
				</li>
				';
			}
		}
	}
	
?>				


<div class="sidebar sidebar-fixed">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">
	
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <?php echo $sections;?>
        </ul>
    </div>
 </div>