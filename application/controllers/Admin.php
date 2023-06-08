<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
		if( ! $this->session->userdata('login_id'))
		return redirect('Login/adminLogin');
        $this->load->model('Login_model','lm');
		$this->load->model('Admin_model','am');
		$this->load->model('Employee_model','em');
		$this->load->library('pagination');
		$this->load->library('form_validation');
    }

	public function logout(){
		$this->session->unset_userdata('login_id');
		return redirect('Login/adminLogin');
	}

	public function index(){
	 	$data['emptotal'] = $this->am->getTotalEmp();
		$data['deptotal'] = $this->am->getTotalDepartment();
		$data['destotal'] = $this->am->getTotalDesignation();
		$data['performancetotal'] = $this->am->getTotalPerformance();
		$data['topper'] = $this->am->getTopPerformance();
		$data['lowper'] = $this->am->getLowPerformance();
		$data['performancedash'] = $this->am->PerformanceResultDashboard();
		$data['grateful'] = $this->am->getGratefulPerformance();
		$data['good'] = $this->am->getGoodPerformance();
		$data['average'] = $this->am->getAveragePerformance();
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/include/footer', $data);
	}
	
	/*--------------------------------------------------------*/


	/**********Add Employee Start **********/

	public function addEmployees(){

		$data['departments'] = $this->am->getEmpDepartment();
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/add-employees', $data);
		$this->load->view('admin/include/footer');
	}

	function fetchDepartmentDrop(){
		if($this->input->post('department_id')){
		 echo $this->am->fetchDepartmentList($this->input->post('department_id'));
		}
	}

	public function postEmployeeData(){

			$config = [
				'upload_path' => './upload',
				'allowed_type' => 'jpg|png|jpeg',
				'quality' => '50%',
				'width' => '1600',
				'height' => '800'
			];

			$emailID = $this->input->post('employee_email');
			$eValid = $this->am->checkEmailValid($emailID);

			if(($eValid)==1){
					$this->session->set_flashdata('email_not_vaild', 'This email Id already exist!! please add other email Id.');
					redirect('Admin/addEmployees');
			}else{

				$data['employee_first_name'] = $this->input->post('employee_first_name');
				$data['employee_last_name'] = $this->input->post('employee_last_name');
				$data['employee_email'] = $this->input->post('employee_email');
				$data['employee_number'] = $this->input->post('employee_number');
				$data['employee_address'] = $this->input->post('employee_address');
				$data['employee_city'] = $this->input->post('employee_city');
				$data['employee_country'] = $this->input->post('employee_country');
				$data['employee_department'] = $this->input->post('employee_department');
				$data['employee_designation'] = $this->input->post('employee_designation');
				$data['employee_doj'] = $this->input->post('employee_doj');
				$data['employee_dot'] = $this->input->post('employee_dot');
				$data['emp_password'] = $this->input->post('emp_password');
				$data['emp_level'] = $this->input->post('emp_level');
	
				if((!empty($_FILES['employee_image']['name']))){
					$check = uploadimgfile("employee_image",$folder="upload",$prefix="proimg_");
					$link  = $check['data']['name'];
					$data['employee_image'] = $link;
				}
	
				$this->load->library('upload', $config);
				$this->upload->do_upload();
	
				if($this->am->uploadEmpDetails($data)){
					$this->session->set_flashdata('emp_upload_success', 'Employee Uploaded Successfully!!!');
					redirect('Admin/employeesList');
				}else{
					$this->session->set_flashdata('emp_not_uploaded', 'Please Try Again!');
					redirect('Admin/addEmployees');
				}

			}
	}

	public function employeesList(){
		$config=[
			'base_url' => base_url('Admin/employeesList'),
			'per_page' =>25,
			'total_rows' => $this->am->num_rows_employees(),
			'full_tag_open'=>"<ul class='pagination'>",
			'full_tag_close'=>"</ul>",
			'next_tag_open' =>"<li>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='active'><a>",
			'cur_tag_close' =>"</a></li>"
		  ];
	
		  $this->pagination->initialize($config);
		  $data['empdata'] = $this->am->employeesListData($config['per_page'],$this->uri->segment(3));
		  $this->load->view('admin/include/header');
		  $this->load->view('admin/include/menu');
		  $this->load->view('admin/employees-list', $data);
		  $this->load->view('admin/include/footer');
	}

		public function deleteEmpData(){
			$id = $this->input->post('main_employee_id');
			$result = $this->am->deleteEmpDB($id);
			if($result){
				$this->session->set_flashdata('emp_delete_success', 'Employee Detail Deleted Successfully!!!');
				redirect('Admin/employeesList');
			}else{
				$this->session->set_flashdata('emp_not_uploaded', 'Please Try Again!');
				redirect('Admin/employeesList');
			}
		}


		public function editEmpData(){

			$data['employee_first_name'] = $this->input->post('employee_first_name');
			$data['employee_last_name'] = $this->input->post('employee_last_name');
			$data['employee_email'] = $this->input->post('employee_email');
			$data['employee_number'] = $this->input->post('employee_number');
			$data['employee_address'] = $this->input->post('employee_address');
			$data['employee_city'] = $this->input->post('employee_city');


			if($this->input->post('employee_country')){
				$data['employee_country'] = $this->input->post('employee_country');
			}else{
				$data['employee_country'] = $this->input->post('old_country');
			}
			
			if($this->input->post('employee_department')){
				$data['employee_department'] = $this->input->post('employee_department');
			}else{
				$data['employee_department'] = $this->input->post('old_department');
			}

			if($this->input->post('employee_designation')){
				$data['employee_designation'] = $this->input->post('employee_designation');
			}else{
				$data['employee_designation'] = $this->input->post('old_employee_designation');
			}

			$data['employee_doj'] = $this->input->post('employee_doj');
			$data['employee_dot'] = $this->input->post('employee_dot');

			if($this->input->post('emp_level')){
				$data['emp_level'] = $this->input->post('emp_level');
			}else{
				$data['emp_level'] = $this->input->post('old_emp_level');
			}

			$empID = $this->input->post('main_employee_id');
			if(!empty($_FILES['employee_image']['name'])){
			$upload = $this->am->get_empImg_id($empID);
			if(file_exists($upload->employee_image)) {
					if(unlink($upload->employee_image)) {
						$check = uploadimgfile("employee_image",$folder="upload",$prefix="proimg_");
						$link = $check['data']['name'];
						$data['employee_image'] = $link;
					}
				}
			}
			
			if($this->am->updateEmpInfo($data, $empID)){
				$this->session->set_flashdata('emp_update_success', 'Employee Detail Updated Successfully!!!');
				return redirect('Admin/showEmployeeInfo/'.$empID);
			}else{
				$this->session->set_flashdata('emp_not_updated', 'Please Try Again!');
				return redirect('Admin/showEmployeeInfo/'.$empID);
			}
		}

		public function UpdateStatusEmp(){
			$empId = $this->input->post('main_employee_id');
			$employee_status = $this->input->post('employee_status');
		 	$res = $this->am->updateEMPStatus($employee_status, $empId);
			if($res){
				$this->session->set_flashdata('emp_update_status_success', 'Employee Status Updated Successfully!!!');
				return redirect('Admin/employeesList');
			}else{
				$this->session->set_flashdata('emp_update_status_not', 'Please Try Again!');
				return redirect('Admin/employeesList');
			}
		}

	
	/*********Employee Details Page ***********/

		public function showEmployeeScoreInfo($per_id){
			$data['per_info'] = $this->am->getEmployeesPerformanceInfo($per_id);
			$data['emp_avg'] = $this->am->getEmployeesAVG($per_id);

			$this->load->view('admin/include/header');
			$this->load->view('admin/include/menu');
			$this->load->view('admin/employee-score-details', $data);
			$this->load->view('admin/include/footer');

		}

		public function seeEmpPerList($id){
			
			$data['emp_per_list'] = $this->am->getEmployeesPerformanceList($id);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/menu');
			$this->load->view('admin/employee-performance-history', $data);
			$this->load->view('admin/include/footer');
		}

	    public function showEmployeeInfo($id){

			$data['empdata'] = $this->am->getEmpDetails($id);
			$data['departments'] = $this->am->getEmpDepartment();
			$data['per_history_check'] = $this->am->getCheckHistory($id);
			$data['emp_avg'] = $this->am->getEmployeesAVG($id);
            $skills = $this->em->getEmpSkills($id);

            if($skills){
                $data['skills'] = $skills;
            }else{
                $data['skills'] = 0;
            }
            $status = $this->em->getEmpStatus($id);
            if($status){
                $data['status'] = $status;
            }else{
                $data['status'] = 0;
            }

			$goals = $this->em->getEmpGoals($id);
            if($goals){
                $data['goal'] = $goals;
            }else{
                $data['goal'] = 0;
            }

            $experience = $this->em->getEmpExperience($id);
            if($experience){
                $data['experience'] = $experience;
            }else{
                $data['experience'] = 0;
            }

            $salary = $this->em->getEmpSalary($id);
            if($salary){
                $data['salary'] = $salary;
            }else{
                $data['salary'] = 0;
            }

            $qualification = $this->em->getEmpQualification($id);
            if($qualification){
                $data['qualification'] = $qualification;
            }else{
                $data['qualification'] = 0;
            }
            $individual = $this->em->getEmpIndividual($id);
            if($individual){
                $data['individual'] = $individual;
            }else{
                $data['individual'] = 0;
            }
            $personality = $this->em->getEmpPersonality($id);
            if($personality){
                $data['personality'] = $personality;
            }else{
                $data['personality'] = 0;
            }
            $software = $this->em->getEmpSoftware($id);
            if($software){
                $data['software'] = $software;
            }else{
                $data['software'] = 0;
            }

			$ManagerSignature = $this->am->getManagerSignature($id);

			if($ManagerSignature){
				$data['signature_img'] = $this->am->getManagerSignature($id);
			}else{
				$data['signature_img'] = 0;
			}

			$this->load->view('admin/include/header');
			$this->load->view('admin/include/menu');
			$this->load->view('admin/employee-details', $data);
			$this->load->view('admin/include/footer');
		}


	// Edit Full Details for employee


	public function editProfileEmployee($empID){

        $data['empdata'] = $this->am->getEmpDetails($empID);
        $data['departments'] = $this->am->getEmpDepartment();
        $data['empinfo'] = $this->am->getEmployeesPerformanceInfo($empID);

        $data['skills'] = $this->am->getEmpSkills($empID);
        $data['status'] = $this->am->getEmpStatus($empID);
        $data['experience'] = $this->am->getEmpExperience($empID);
        $data['salary'] = $this->am->getEmpSalary($empID);
        $data['qualification'] = $this->am->getEmpQualification($empID);
        $data['individual'] = $this->am->getEmpIndividual($empID);
        $data['personality'] = $this->am->getEmpPersonality($empID);
        $data['software'] = $this->am->getEmpSoftware($empID);

        $this->load->view('admin/include/header');
        $this->load->view('admin/include/menu');
        $this->load->view('admin/edit-employee-details', $data);
        $this->load->view('admin/include/footer', $data);
    }

	public function addSalaryHistory(){

		$empId = $this->input->post('employee_id');
		$salary['employee_id'] = $this->input->post('employee_id');

		$salary['ed_salary_currency'] = $this->input->post('ed_salary_currency');
        $salary['ed_salary_date'] = $this->input->post('ed_salary_date');
        $salary['ed_salary_date2'] = $this->input->post('ed_salary_date2');
        $salary['ed_salary_date3'] = $this->input->post('ed_salary_date3');
        $salary['ed_salary_date4'] = $this->input->post('ed_salary_date4');

        $salary['ed_salary_amount'] = $this->input->post('ed_salary_amount');
        $salary['ed_salary_amount2'] = $this->input->post('ed_salary_amount2');
        $salary['ed_salary_amount3'] = $this->input->post('ed_salary_amount3');
        $salary['ed_salary_amount4'] = $this->input->post('ed_salary_amount4');

		$res = $this->am->postEmpSalary($salary);

		if($res){
			$this->session->set_flashdata('emp_addsalary_success', 'Employee Salary Added Successfully!!!');
			return redirect('Admin/showEmployeeInfo/'.$empId);
		}else{
			$this->session->set_flashdata('emp_addsalary_not', 'Please Try Again!');
			return redirect('Admin/showEmployeeInfo/'.$empId);
		}

	}


	public function submitEditEMPProfile(){

        $id = $this->input->post('employee_id');

        // Employee Personal 

        $personal['employee_first_name'] = $this->input->post('employee_first_name');
        $personal['employee_last_name'] = $this->input->post('employee_last_name');
        
        if($this->input->post('employee_department')){
            $personal['employee_department'] = $this->input->post('employee_department');
        }else{
            $personal['employee_department'] = $this->input->post('old_employee_department');
        }

        if($this->input->post('employee_designation')){
            $personal['employee_designation'] = $this->input->post('employee_designation');
        }else{
            $personal['employee_designation'] = $this->input->post('old_employee_designation');
        }



        if(!empty($_FILES['employee_image']['name'])){

        $upload = $this->em->get_empImg_id($id);

        if(file_exists($upload->employee_image)) {
                if(unlink($upload->employee_image)) {
                    $check = uploadimgfile("employee_image",$folder="upload",$prefix="proimg_");
                    $link = $check['data']['name'];
                    $personal['employee_image'] = $link;
                }
            }
        }

		
		// Level

		if($this->input->post('emp_level')){
			$personal['emp_level'] = $this->input->post('emp_level');
		}else{
			$personal['emp_level'] = $this->input->post('old_emp_level');
		}

		//End Level

        $this->am->updateM_EMPPersonal($personal, $id);

        // Skills

        $skills['ed_arc'] = $this->input->post('ed_arc');
        $skills['ed_str'] = $this->input->post('ed_str');
        $skills['ed_mep'] = $this->input->post('ed_mep');
        $skills['ed_mgmt'] = $this->input->post('ed_mgmt');
        $skills['ed_docs'] = $this->input->post('ed_docs');
        $skills['ed_4d'] = $this->input->post('ed_4d');
        $skills['ed_clash'] = $this->input->post('ed_clash');
        $skills['ed_dyna'] = $this->input->post('ed_dyna');
        $skills['ed_rndr'] = $this->input->post('ed_rndr');
        $skills['ed_mrkt'] = $this->input->post('ed_mrkt');
        $skills['ed_bd'] = $this->input->post('ed_bd');

        $this->am->updateM_EMPSkills($skills, $id);

        // End Skills

        // Status

        $status['ed_part_full'] = $this->input->post('ed_part_full');
        $this->am->updateM_EMPStatus($status, $id);

        //End Status


		 // Goals

         if($this->input->post('goals_description')){
            $goals['goals_type'] = $this->input->post('goals_type');
            $goals['goals_description'] = $this->input->post('goals_description');
            $this->am->updateM_EMPGoals($goals, $id);
         }

        //End Goals

        //Experience

        $experience['ed_experience'] = $this->input->post('ed_experience');
        $this->am->updateM_EMPExperience($experience, $id);

        //End Experience

        //Salary

        $salary['ed_salary_currency'] = $this->input->post('ed_salary_currency');
        $salary['ed_salary_date'] = $this->input->post('ed_salary_date');
        $salary['ed_salary_date2'] = $this->input->post('ed_salary_date2');
        $salary['ed_salary_date3'] = $this->input->post('ed_salary_date3');
        $salary['ed_salary_date4'] = $this->input->post('ed_salary_date4');

        $salary['ed_salary_amount'] = $this->input->post('ed_salary_amount');
        $salary['ed_salary_amount2'] = $this->input->post('ed_salary_amount2');
        $salary['ed_salary_amount3'] = $this->input->post('ed_salary_amount3');
        $salary['ed_salary_amount4'] = $this->input->post('ed_salary_amount4');

        $this->am->updateM_EMPSalary($salary, $id);

        //End Salary

        // Qualification
            $qualification['ed_qualification_text'] = $this->input->post('ed_qualification_text');
            $this->am->updateM_EMPQualification($qualification, $id);
         // End Qualification

         // Individual Profile
         $individual['ed_individual_profile_email'] = $this->input->post('ed_individual_profile_email');
         $individual['ed_individual_profile_contact'] = $this->input->post('ed_individual_profile_contact');
         $individual['ed_individual_profile_age'] = $this->input->post('ed_individual_profile_age');
         $individual['ed_individual_profile_intrest'] = $this->input->post('ed_individual_profile_intrest');
         $individual['ed_individual_profile_address'] = $this->input->post('ed_individual_profile_address');
         $individual['ed_individual_profile_city'] = $this->input->post('ed_individual_profile_city');


         $individual['ed_individual_profile_country'] = $this->input->post('ed_individual_profile_country');

		if($this->input->post('ed_individual_profile_country')){
            $individual['ed_individual_profile_country'] = $this->input->post('ed_individual_profile_country');
        }else{
            $individual['ed_individual_profile_country'] = $this->input->post('old_country');
        }


         $individual['ed_individual_profile_doj'] = $this->input->post('ed_individual_profile_doj');

         $individual['ed_individual_profile_movie'] = $this->input->post('ed_individual_profile_movie');
         $individual['ed_individual_profile_book'] = $this->input->post('ed_individual_profile_book');
         $individual['ed_individual_profile_tvshow'] = $this->input->post('ed_individual_profile_tvshow');
         $individual['ed_individual_profile_color'] = $this->input->post('ed_individual_profile_color');

         $individual['ed_individual_profile_music'] = $this->input->post('ed_individual_profile_music');
         $individual['ed_individual_profile_food'] = $this->input->post('ed_individual_profile_food');


         $emp_data['employee_email'] = $this->input->post('ed_individual_profile_email');
         $emp_data['employee_number'] = $this->input->post('ed_individual_profile_contact');
         $emp_data['employee_address'] = $this->input->post('ed_individual_profile_address');
         $emp_data['employee_city'] = $this->input->post('ed_individual_profile_city');

        if($this->input->post('ed_individual_profile_country')){
            $emp_data['employee_country'] = $this->input->post('ed_individual_profile_country');
        }else{
            $emp_data['employee_country'] = $this->input->post('old_country');
        }


         $emp_data['employee_doj'] = $this->input->post('ed_individual_profile_doj');

         $this->am->updateM_EMPIndividualProfile($individual, $id);
         $this->am->updateM_EMPProfileSet($emp_data, $id);
        // End Individual Profile

        // Personality
         $personality['ed_personality_type'] = $this->input->post('ed_personality_type');
         $personality['ed_personality_role'] = $this->input->post('ed_personality_role');
         $personality['ed_personality_code'] = $this->input->post('ed_personality_code');
         $personality['ed_personality_strategy'] = $this->input->post('ed_personality_strategy');

		//  -------

		if($this->input->post('min_value_mind')){
            $personality['min_value_mind'] = $this->input->post('min_value_mind');
        }else{
			$personality['min_value_mind'] = $this->input->post('min_value_mind_old');
        }

		if($this->input->post('max_value_mind')){
			$personality['max_value_mind'] = $this->input->post('max_value_mind');
        }else{
			$personality['max_value_mind'] = $this->input->post('max_value_mind_old');
        }

		//  ------- /

		if($this->input->post('min_value_energy')){
            $personality['min_value_energy'] = $this->input->post('min_value_energy');
        }else{
			$personality['min_value_energy'] = $this->input->post('min_value_energy_old');
        }

		if($this->input->post('max_value_energy')){
			$personality['max_value_energy'] = $this->input->post('max_value_energy');
        }else{
			$personality['max_value_energy'] = $this->input->post('max_value_energy_old');
        }

		// -----------

		if($this->input->post('min_value_nature')){
            $personality['min_value_nature'] = $this->input->post('min_value_nature');
        }else{
			$personality['min_value_nature'] = $this->input->post('min_value_nature_old');
        }

		if($this->input->post('max_value_nature')){
			$personality['max_value_nature'] = $this->input->post('max_value_nature');
        }else{
			$personality['max_value_nature'] = $this->input->post('max_value_nature_old');
        }


		// -----------

				
		if($this->input->post('min_value_tactics')){
            $personality['min_value_tactics'] = $this->input->post('min_value_tactics');
        }else{
			$personality['min_value_tactics'] = $this->input->post('min_value_tactics_old');
        }

		if($this->input->post('max_value_tactics')){
			$personality['max_value_tactics'] = $this->input->post('max_value_tactics');
        }else{
			$personality['max_value_tactics'] = $this->input->post('max_value_tactics_old');
        }


		// -------------


		 if($this->input->post('min_value_identity')){
            $personality['min_value_identity'] = $this->input->post('min_value_identity');
        }else{
			$personality['min_value_identity'] = $this->input->post('min_value_identity_old');
        }

		if($this->input->post('max_value_identity')){
			$personality['max_value_identity'] = $this->input->post('max_value_identity');
        }else{
			$personality['max_value_identity'] = $this->input->post('max_value_identity_old');
        }


		// -------------


         $this->am->updateM_EMPPersonality($personality, $id);

        // End Personality

        // Software 

        $software['ed_software_revit'] = $this->input->post('ed_software_revit');
        $software['ed_software_navisworks'] = $this->input->post('ed_software_navisworks');
        $software['ed_software_autocad'] = $this->input->post('ed_software_autocad');
        $software['ed_software_rhinoceros'] = $this->input->post('ed_software_rhinoceros');
        $software['ed_software_3dsmax'] = $this->input->post('ed_software_3dsmax');
        $software['ed_software_iconodynmad'] = $this->input->post('ed_software_iconodynmad');
        $software['ed_software_enscape'] = $this->input->post('ed_software_enscape');
        $software['ed_software_agacad'] = $this->input->post('ed_software_agacad');

        $software['ed_software_sketchup'] = $this->input->post('ed_software_sketchup');
        $software['ed_software_msword'] = $this->input->post('ed_software_msword');
        $software['ed_software_msexcel'] = $this->input->post('ed_software_msexcel');
        $software['ed_software_photoshop'] = $this->input->post('ed_software_photoshop');
        $software['ed_software_ai'] = $this->input->post('ed_software_ai');
        $software['ed_software_indesign'] = $this->input->post('ed_software_indesign');
        $software['ed_software_ae'] = $this->input->post('ed_software_ae');

        $this->am->updateM_EMPSoftware($software, $id);

        // End Software 

        $this->session->set_flashdata('emp_profile_updated_success', 'Your profile updated successfully!!!');
	    return redirect('Admin/showEmployeeInfo/'.$id);

    }




	/*********Update Employee Score Details Page ***********/

	public function showEmployeeScores($id){
		$data['re_evaluate'] = $this->am->getEmployeesPerformanceInfo($id);

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/employee-score-edit', $data);
		$this->load->view('admin/include/footer');
	}

	public function submitEditEmpScore(){

		$per_id = $this->input->post('performance_id');

		/* communication */
		$communication_data['employee_id'] = $this->input->post('main_employee_id');
		$communication_data['communication_proactively_asking'] = $this->input->post('communication_proactively_asking');
		$communication_data['communication_responds_to_messages'] = $this->input->post('communication_responds_to_messages');
		$communication_data['communication_proactively_informing'] = $this->input->post('communication_proactively_informing');
		$communication_data['communication_level_of_english'] = $this->input->post('communication_level_of_english');
		$communication_data['communication_team_client'] = $this->input->post('communication_team_client');
		$communication_data['communication_Informs_the_supervisor'] = $this->input->post('communication_Informs_the_supervisor');

		$communication_data['communication_comments'] = $this->input->post('communication_comments');

		$communicationTotal = $communication_data['communication_proactively_asking'] + $communication_data['communication_responds_to_messages'] + $communication_data['communication_proactively_informing'] + $communication_data['communication_level_of_english'] + $communication_data['communication_team_client'] + $communication_data['communication_Informs_the_supervisor']; 
		$communicationAvgTotal = $communicationTotal / 6;
		$communication_data['communication_emp_avg'] = number_format((float)$communicationAvgTotal, 2, '.', '');

		$this->am->updateEmployeeCommunication($communication_data, $per_id);

		/* communication */

		// /* productivity */
		$productivity_data['employee_id'] = $this->input->post('main_employee_id');
		$productivity_data['productivity_speed_of_modelling'] = $this->input->post('productivity_speed_of_modelling');
		$productivity_data['productivity_absence_or_minimum'] = $this->input->post('productivity_absence_or_minimum');
		$productivity_data['productivity_timelines_and_deadlines'] = $this->input->post('productivity_timelines_and_deadlines');

		$productivity_data['productivity_comments'] = $this->input->post('productivity_comments');

		$productivityTotal = $productivity_data['productivity_speed_of_modelling'] + $productivity_data['productivity_absence_or_minimum'] + $productivity_data['productivity_timelines_and_deadlines']; 
		$productivityAvgTotal = $productivityTotal / 3;
		$productivity_data['productivity_emp_avg'] = number_format((float)$productivityAvgTotal, 2, '.', '');

		$this->am->updateEmployeeProductivity($productivity_data, $per_id);

		// /* productivity */

		/* quality */
		$quality_data['employee_id'] = $this->input->post('main_employee_id');
		$quality_data['quality_attention_to_details'] = $this->input->post('quality_attention_to_details');
		$quality_data['quality_mistakes_requiring_correction'] = $this->input->post('quality_mistakes_requiring_correction');
		$quality_data['quality_meets_the_expectations'] = $this->input->post('quality_meets_the_expectations');
		$quality_data['quality_conducts_qa_qc'] = $this->input->post('quality_conducts_qa_qc');
		$quality_data['quality_follows_the_correct_workflow_set'] = $this->input->post('quality_follows_the_correct_workflow_set');

		$quality_data['quality_comments'] = $this->input->post('quality_comments');

		$qualityTotal = $quality_data['quality_attention_to_details'] + $quality_data['quality_mistakes_requiring_correction'] + $quality_data['quality_meets_the_expectations'] + $quality_data['quality_conducts_qa_qc'] + $quality_data['quality_follows_the_correct_workflow_set']; 
		$qualityAvgTotal = $qualityTotal / 5;
		$quality_data['quality_emp_avg'] = number_format((float)$productivityAvgTotal, 2, '.', '');

		$this->am->updateEmployeeQuality($quality_data, $per_id);

		/* quality */

		/* knowledge */

		$knowledge_data['employee_id'] = $this->input->post('main_employee_id');
		$knowledge_data['knowledge_standards_and_portfolio'] = $this->input->post('knowledge_standards_and_portfolio');
		$knowledge_data['knowledge_bim_project_requirements'] = $this->input->post('knowledge_bim_project_requirements');
		$knowledge_data['knowledge_of_the_construction_industry'] = $this->input->post('knowledge_of_the_construction_industry');
		
		$knowledge_data['knowledge_comments'] = $this->input->post('knowledge_comments');

		$knowledgeTotal = $knowledge_data['knowledge_standards_and_portfolio'] + $knowledge_data['knowledge_bim_project_requirements'] + $knowledge_data['knowledge_of_the_construction_industry']; 
		$knowledgeAvgTotal = $knowledgeTotal / 3;
		$knowledge_data['knowledge_emp_avg'] = number_format((float)$knowledgeAvgTotal, 2, '.', '');

		$this->am->updateEmployeeKnowledge($knowledge_data, $per_id);

		/* knowledge */

		/* software */

		$software_data['employee_id'] = $this->input->post('main_employee_id');
		$software_data['software_bitrix_tasks_and_leaves'] = $this->input->post('software_bitrix_tasks_and_leaves');
		$software_data['software_digital_tools_production_communication'] = $this->input->post('software_digital_tools_production_communication');
		
		$software_data['software_comments'] = $this->input->post('software_comments');

		$softwareTotal = $software_data['software_bitrix_tasks_and_leaves'] + $software_data['software_digital_tools_production_communication']; 
		$softwareAvgTotal = $softwareTotal / 2;
		$software_data['software_emp_avg'] = number_format((float)$softwareAvgTotal, 2, '.', '');

		$this->am->updateEmployeeSoftware($software_data, $per_id);

		/* software */

		/* dependability */

		$dependability_data['employee_id'] = $this->input->post('main_employee_id');
		$dependability_data['dependability_handle_a_team'] = $this->input->post('dependability_handle_a_team');
		$dependability_data['dependability_handle_a_project'] = $this->input->post('dependability_handle_a_project');
		$dependability_data['dependability_the_set_deadlines'] = $this->input->post('dependability_the_set_deadlines');

		$dependability_data['dependability_comments'] = $this->input->post('dependability_comments');

		$dependabilityTotal = $dependability_data['dependability_handle_a_team'] + $dependability_data['dependability_handle_a_project'] + $dependability_data['dependability_the_set_deadlines']; 
		$dependabilityAvgTotal = $dependabilityTotal / 3;
		$dependability_data['dependability_emp_avg'] = number_format((float)$dependabilityAvgTotal, 2, '.', '');

		$this->am->updateEmployeeDependability($dependability_data, $per_id);

		/* dependability */

		/* time management */

		$time_management_data['employee_id'] = $this->input->post('main_employee_id');
		$time_management_data['time_management_scheduled_work_shift'] = $this->input->post('time_management_scheduled_work_shift');
		$time_management_data['time_management_required_working_hours'] = $this->input->post('time_management_required_working_hours');
		$time_management_data['time_management_deadlinesclearly_with_your_teammates'] = $this->input->post('time_management_deadlinesclearly_with_your_teammates');

		$time_management_data['time_management_comments'] = $this->input->post('time_management_comments');

		$time_managementTotal = $time_management_data['time_management_scheduled_work_shift'] + $time_management_data['time_management_required_working_hours'] + $time_management_data['time_management_deadlinesclearly_with_your_teammates']; 
		$time_managementAvgTotal = $time_managementTotal / 3;
		$time_management_data['time_management_emp_avg'] = number_format((float)$time_managementAvgTotal, 2, '.', '');

		$this->am->updateEmployeeTimeManagement($time_management_data, $per_id);

		/* time management */

		/* adaptability */

		$adaptability_data['employee_id'] = $this->input->post('main_employee_id');
		$adaptability_data['adaptability_short_amount_of_time'] = $this->input->post('adaptability_short_amount_of_time');
		$adaptability_data['adaptability_ability_to_adjust_depending'] = $this->input->post('adaptability_ability_to_adjust_depending');
		$adaptability_data['adaptability_work_on_multiple_projects'] = $this->input->post('adaptability_work_on_multiple_projects');
		$adaptability_data['adaptability_learn_new_disciplines_software'] = $this->input->post('adaptability_learn_new_disciplines_software');

		$adaptability_data['adaptability_comments'] = $this->input->post('adaptability_comments');

		$adaptabilityTotal = $adaptability_data['adaptability_short_amount_of_time'] + $adaptability_data['adaptability_ability_to_adjust_depending'] + $adaptability_data['adaptability_work_on_multiple_projects'] + $adaptability_data['adaptability_learn_new_disciplines_software']; 
		$adaptabilityAvgTotal = $adaptabilityTotal / 4;
		$adaptability_data['p_adaptability_emp_avg'] = number_format((float)$adaptabilityAvgTotal, 2, '.', '');

		$this->am->updateEmployeeAdaptability($adaptability_data, $per_id);

		/* adaptability */

		/* initiative proactive */

		$initiative_proactive_data['employee_id'] = $this->input->post('main_employee_id');
		$initiative_proactive_data['initiative_proactive_ability_to_learn_new_project'] = $this->input->post('initiative_proactive_ability_to_learn_new_project');
		$initiative_proactive_data['initiative_proactive_adjust_depending_on_the_project'] = $this->input->post('initiative_proactive_adjust_depending_on_the_project');
		$initiative_proactive_data['initiative_proactive_work_on_multiple_projects'] = $this->input->post('initiative_proactive_work_on_multiple_projects');
		$initiative_proactive_data['initiative_proactive_learn_new_disciplines_software'] = $this->input->post('initiative_proactive_learn_new_disciplines_software');

		$initiative_proactive_data['initiative_proactive_comments'] = $this->input->post('initiative_proactive_comments');

		$initiative_proactiveTotal = $initiative_proactive_data['initiative_proactive_ability_to_learn_new_project'] + $initiative_proactive_data['initiative_proactive_adjust_depending_on_the_project'] + $initiative_proactive_data['initiative_proactive_work_on_multiple_projects'] + $initiative_proactive_data['initiative_proactive_learn_new_disciplines_software']; 
		$initiative_proactiveAvgTotal = $initiative_proactiveTotal / 4;
		$initiative_proactive_data['p_initiative_proactive_emp_avg'] = number_format((float)$initiative_proactiveAvgTotal, 2, '.', '');

		$this->am->updateEmployeeInitiativeProactive($initiative_proactive_data, $per_id);

		/* initiative proactive */

		/* creativity problem solving */

		$creativity_problem_solving_data['employee_id'] = $this->input->post('main_employee_id');
		$creativity_problem_solving_data['creativity_problem_solving_learn_new_project'] = $this->input->post('creativity_problem_solving_learn_new_project');
		$creativity_problem_solving_data['creativity_problem_solving_depending_project_needs'] = $this->input->post('creativity_problem_solving_depending_project_needs');
		$creativity_problem_solving_data['creativity_problem_solving_work_multiple_projects'] = $this->input->post('creativity_problem_solving_work_multiple_projects');
		$creativity_problem_solving_data['creativity_problem_solving_knowledge_to_new_challenges'] = $this->input->post('creativity_problem_solving_knowledge_to_new_challenges');

		$creativity_problem_solving_data['creativity_problem_solving_comments'] = $this->input->post('creativity_problem_solving_comments');

		$creativity_problem_solvingTotal = $creativity_problem_solving_data['creativity_problem_solving_learn_new_project'] + $creativity_problem_solving_data['creativity_problem_solving_depending_project_needs'] + $creativity_problem_solving_data['creativity_problem_solving_work_multiple_projects'] + $creativity_problem_solving_data['creativity_problem_solving_knowledge_to_new_challenges']; 
		$creativity_problem_solvingAvgTotal = $creativity_problem_solvingTotal / 4;
		$creativity_problem_solving_data['p_creativity_problem_solving_emp_avg'] = number_format((float)$creativity_problem_solvingAvgTotal, 2, '.', '');

		$this->am->updateEmployeeCreativityProblemSolving($creativity_problem_solving_data, $per_id);

		/* creativity problem solving */
		$performance_data['evaluate_date_category'] = $this->input->post('evaluate_date_category');
		$performance_data['emp_performance_start_date'] = $this->input->post('performance_start_date');
        $performance_data['emp_performance_end_date'] = $this->input->post('performance_end_date');

        $res = $this->am->updateASEPerformance($performance_data, $per_id);

		$sumTotal = $communication_data['communication_emp_avg'] + $productivity_data['productivity_emp_avg'] + $quality_data['quality_emp_avg'] + $knowledge_data['knowledge_emp_avg'] + $software_data['software_emp_avg'] + $dependability_data['dependability_emp_avg'] + $time_management_data['time_management_emp_avg'] + $adaptability_data['p_adaptability_emp_avg'] + $initiative_proactive_data['p_initiative_proactive_emp_avg'] + $creativity_problem_solving_data['p_creativity_problem_solving_emp_avg']; 
		$avgTotal = $sumTotal / 10;

		$data['total_emp_avg'] = number_format((float)$avgTotal, 2, '.', '');

		$res = $this->am->updateEmpMainAvg($data, $per_id);

		if($res){
			$this->session->set_flashdata('emp_update_score_success', 'Employee Score Updated Successfully!!!');
			return redirect('Admin/showEmployeeScoreInfo/'.$per_id);
		}else{
			$this->session->set_flashdata('emp_update_score_not', 'Please Try Again!');
			return redirect('Admin/showEmployeeScoreInfo/'.$per_id);
		}

	}


	/*********Departments ***********/

	public function addDepartments(){
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/add-departments');
		$this->load->view('admin/include/footer');
	}

	public function postDepartmentData(){

		$data['department_name'] = $this->input->post('department_name');
		$data['	department_status'] = $this->input->post('department_status');

		if($this->am->uploadDepartment($data)){
			$this->session->set_flashdata('department_upload_success', 'Uploaded Successfully!!!');
			redirect('Admin/addDepartments');
		}else{
			$this->session->set_flashdata('department_not_uploaded', 'Please Try Again!');
			redirect('Admin/addDepartments');
		}
	}

	public function departmentsList(){
		$config=[
			'base_url' => base_url('Admin/departmentsList'),
			'per_page' =>25,
			'total_rows' => $this->am->num_rows_departments(),
			'full_tag_open'=>"<ul class='pagination'>",
			'full_tag_close'=>"</ul>",
			'next_tag_open' =>"<li>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='active'><a>",
			'cur_tag_close' =>"</a></li>"
		  ];
	
		  $this->pagination->initialize($config);
		  $data['departmentdata'] = $this->am->departmentsListData($config['per_page'],$this->uri->segment(3));
		  $this->load->view('admin/include/header');
		  $this->load->view('admin/include/menu');
		  $this->load->view('admin/departments-list', $data);
		  $this->load->view('admin/include/footer');
	}

	public function deleteDepartmentData(){
		$id = $this->input->post('department_id');
		$result = $this->am->deleteDepDB($id);
		if($result){
			$this->session->set_flashdata('dep_delete_success', 'Department Detail Deleted Successfully!!!');
			redirect('Admin/departmentsList');
		}else{
			$this->session->set_flashdata('dep_not_deleted', 'Please Try Again!');
			redirect('Admin/departmentsList');
		}
	}

	public function updateDepartmentData(){

		$department_id = $this->input->post('department_id');
		$data = $this->input->post();

		$res = $this->am->updateDepartmentInfo($department_id, $data);
		if($res){
			$this->session->set_flashdata('dep_update_success', 'Department Details Update Successfully!!!');
			redirect('Admin/departmentsList');
		}else{
			$this->session->set_flashdata('dep_update_try_again', 'Please Try Again!');
			redirect('Admin/departmentsList');
		}

	}

	/************************Designation******************/


	public function addDesignation(){


		$data['departments'] = $this->am->getDepartmentsList();
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/add-designation', $data);
		$this->load->view('admin/include/footer');
	}

	public function postDesignationData(){

		$data['designation_name'] = $this->input->post('designation_name');
		$data['designation_name'] = $this->input->post('designation_name');
		$data['f_department_id'] = $this->input->post('f_department_id');

		$data['designation_status'] = $this->input->post('designation_status');

		if($this->am->uploadDesignation($data)){
			$this->session->set_flashdata('designation_upload_success', 'Uploaded Successfully!!!');
			redirect('Admin/addDesignation');
		}else{
			$this->session->set_flashdata('designation_not_uploaded', 'Please Try Again!');
			redirect('Admin/addDesignation');
		}
	}

	public function designationList(){
		$config=[
			'base_url' => base_url('Admin/designationList'),
			'per_page' =>25,
			'total_rows' => $this->am->num_rows_designation(),
			'full_tag_open'=>"<ul class='pagination'>",
			'full_tag_close'=>"</ul>",
			'next_tag_open' =>"<li>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='active'><a>",
			'cur_tag_close' =>"</a></li>"
		  ];
	
		  $this->pagination->initialize($config);
		  $data['designationdata'] = $this->am->designationListData($config['per_page'],$this->uri->segment(3));
		  $data['departments'] = $this->am->getEmpDepartment();
		  $this->load->view('admin/include/header');
		  $this->load->view('admin/include/menu');
		  $this->load->view('admin/designation-list', $data);
		  $this->load->view('admin/include/footer');
	}

	public function deleteDesignationData(){

		$id = $this->input->post('designation_id');
		$result = $this->am->deleteDesDB($id);
		if($result){
			$this->session->set_flashdata('des_delete_success', 'Designation Detail Deleted Successfully!!!');
			redirect('Admin/designationList');
		}else{
			$this->session->set_flashdata('des_not_deleted', 'Please Try Again!');
			redirect('Admin/designationList');
		}

	}

	public function updateDesignationData(){

		$Id = $this->input->post('designation_id');
		$data = $this->input->post();

		$res = $this->am->updateDesignationInfo($Id, $data);
		if($res){
			$this->session->set_flashdata('des_update_success', 'Designation Details Update Successfully!!!');
			redirect('Admin/designationList');
		}else{
			$this->session->set_flashdata('des_update_try_again', 'Please Try Again!');
			redirect('Admin/designationList');
		}

	}

	/*********************Employee Performance ***************/

	public function addEmployeesPerformance(){

		$data['emplist'] = $this->am->getEmpNameList();

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/menu');
		$this->load->view('admin/add-employees-performance', $data);
		$this->load->view('admin/include/footer');
	}

	public function fetchDDInput(){
		if($this->input->post('employee_id')){
			echo $this->am->fetchDDList($this->input->post('employee_id'));
		}
	}

	public function fetchDesiInput(){
		if($this->input->post('employee_id')){
			echo $this->am->fetchDesiList($this->input->post('employee_id'));
		}
	}

	public function employeesPerformanceResultList(){
		$config=[
			'base_url' => base_url('Admin/employeesPerformanceResultList'),
			'per_page' =>25,
			'total_rows' => $this->am->num_rows_PerformanceResult(),
			'full_tag_open'=>"<ul class='pagination'>",
			'full_tag_close'=>"</ul>",
			'next_tag_open' =>"<li>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='active'><a>",
			'cur_tag_close' =>"</a></li>"
		  ];
	
		  $this->pagination->initialize($config);
		  $data['rerformancedata'] = $this->am->PerformanceResultData($config['per_page'],$this->uri->segment(3));

		  $this->load->view('admin/include/header');
		  $this->load->view('admin/include/menu');
		  $this->load->view('admin/employees-performance-result-list', $data);
		  $this->load->view('admin/include/footer');
	}


	// Print Employee Details

	public function printEmpDetails($per_id){

		$data['avg_data'] = $this->em->getEMPDataPrint($per_id);
        $emp_id = $this->am->getEMPID($per_id);
        $review['last_review_count'] = $this->em->countLastReview($emp_id);
		if(($review['last_review_count'])==1){
			$data['last_reviews'] = false;
		}else{
			$current_review_data = $this->em->getCurrentReview($per_id);
            $lastReviewID = $current_review_data - 1;
            $data['last_reviews'] = $this->em->getLastReview($lastReviewID);
		}

		$data['perf_data'] = $this->am->getEmployeesPerformanceInfo($per_id);

		$this->load->view('admin/include/header');
		$this->load->view('admin/print-employee-details', $data);
		$this->load->view('admin/include/footer');
	}

	// Manager Upload Signature

	public function uploadManagerSignature(){

		$id = $this->input->post('employee_id');
		$data['employee_id'] = $this->input->post('employee_id');

		$config = [
			'upload_path' => './upload',
			'allowed_type' => 'jpg|png|jpeg',
			'quality' => '50%',
			'width' => '1600',
			'height' => '800'
		];

		if((!empty($_FILES['p_signature_img']['name']))){
			$check = uploadimgfile("p_signature_img",$folder="upload",$prefix="proimg_");
			$link  = $check['data']['name'];
			$data['p_signature_img'] = $link;
		}

		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$data['employee_id'] = $this->input->post('employee_id');
        $data['performance_id'] = $this->input->post('performance_id');

		$res = $this->am->postManagerSignature($data);

		if($res){
			$this->session->set_flashdata('signature_upload_success', 'Signature Uploaded Successfully!!!');
			redirect('Admin/showEmployeeInfo/'.$id);
		}else{
			$this->session->set_flashdata('signature_not_uploaded', 'Please Try Again!');
			redirect('Admin/showEmployeeInfo/'.$id);
		}
	}


	public function deleteManagerSignature(){
			$id = $this->input->post('employee_id');
			$result = $this->am->deleteSignatureDB($id);
			if($result){
				$this->session->set_flashdata('signature_delete_success', 'Signature Deleted Successfully!!!');
				redirect('Admin/showEmployeeInfo/'.$id);
			}else{
				$this->session->set_flashdata('signature_not_uploaded', 'Please Try Again!');
				redirect('Admin/showEmployeeInfo/'.$id);
			}
	}

	// ----------------------------------------------------------------------------------------


	public function postEmployeePerformance(){

		$data['employee_id'] = $this->input->post('main_employee_id');
		$data['emp_performance_start_date'] = $this->input->post('emp_performance_start_date');
		$data['emp_performance_end_date'] = $this->input->post('emp_performance_end_date');

		/* communication */
		$communication_data['employee_id'] = $this->input->post('main_employee_id');
		$communication_data['communication_proactively_asking'] = $this->input->post('communication_proactively_asking');
		$communication_data['communication_responds_to_messages'] = $this->input->post('communication_responds_to_messages');
		$communication_data['communication_proactively_informing'] = $this->input->post('communication_proactively_informing');
		$communication_data['communication_level_of_english'] = $this->input->post('communication_level_of_english');
		$communication_data['communication_team_client'] = $this->input->post('communication_team_client');
		$communication_data['communication_Informs_the_supervisor'] = $this->input->post('communication_Informs_the_supervisor');

		$communication_data['communication_comments'] = $this->input->post('communication_comments');

		$communicationTotal = $communication_data['communication_proactively_asking'] + $communication_data['communication_responds_to_messages'] + $communication_data['communication_proactively_informing'] + $communication_data['communication_level_of_english'] + $communication_data['communication_team_client'] + $communication_data['communication_Informs_the_supervisor']; 
		$communicationAvgTotal = $communicationTotal / 6;
		$communication_data['communication_emp_avg'] = number_format((float)$communicationAvgTotal, 2, '.', '');

		$this->am->postEmployeeCommunication($communication_data);
		
		/* communication */

		// /* productivity */
		$productivity_data['employee_id'] = $this->input->post('main_employee_id');
		$productivity_data['productivity_speed_of_modelling'] = $this->input->post('productivity_speed_of_modelling');
		$productivity_data['productivity_absence_or_minimum'] = $this->input->post('productivity_absence_or_minimum');
		$productivity_data['productivity_timelines_and_deadlines'] = $this->input->post('productivity_timelines_and_deadlines');

		$productivity_data['productivity_comments'] = $this->input->post('productivity_comments');

		$productivityTotal = $productivity_data['productivity_speed_of_modelling'] + $productivity_data['productivity_absence_or_minimum'] + $productivity_data['productivity_timelines_and_deadlines']; 
		$productivityAvgTotal = $productivityTotal / 3;
		$productivity_data['productivity_emp_avg'] = number_format((float)$productivityAvgTotal, 2, '.', '');

		$this->am->postEmployeeProductivity($productivity_data);

		// /* productivity */

		/* quality */
		$quality_data['employee_id'] = $this->input->post('main_employee_id');
		$quality_data['quality_attention_to_details'] = $this->input->post('quality_attention_to_details');
		$quality_data['quality_mistakes_requiring_correction'] = $this->input->post('quality_mistakes_requiring_correction');
		$quality_data['quality_meets_the_expectations'] = $this->input->post('quality_meets_the_expectations');
		$quality_data['quality_conducts_qa_qc'] = $this->input->post('quality_conducts_qa_qc');
		$quality_data['quality_follows_the_correct_workflow_set'] = $this->input->post('quality_follows_the_correct_workflow_set');

		$quality_data['quality_comments'] = $this->input->post('quality_comments');

		$qualityTotal = $quality_data['quality_attention_to_details'] + $quality_data['quality_mistakes_requiring_correction'] + $quality_data['quality_meets_the_expectations'] + $quality_data['quality_conducts_qa_qc'] + $quality_data['quality_follows_the_correct_workflow_set']; 
		$qualityAvgTotal = $qualityTotal / 5;
		$quality_data['quality_emp_avg'] = number_format((float)$productivityAvgTotal, 2, '.', '');

		$this->am->postEmployeeQuality($quality_data);

		/* quality */

		/* knowledge */

		$knowledge_data['employee_id'] = $this->input->post('main_employee_id');
		$knowledge_data['knowledge_standards_and_portfolio'] = $this->input->post('knowledge_standards_and_portfolio');
		$knowledge_data['knowledge_bim_project_requirements'] = $this->input->post('knowledge_bim_project_requirements');
		$knowledge_data['knowledge_of_the_construction_industry'] = $this->input->post('knowledge_of_the_construction_industry');
		
		$knowledge_data['knowledge_comments'] = $this->input->post('knowledge_comments');

		$knowledgeTotal = $knowledge_data['knowledge_standards_and_portfolio'] + $knowledge_data['knowledge_bim_project_requirements'] + $knowledge_data['knowledge_of_the_construction_industry']; 
		$knowledgeAvgTotal = $knowledgeTotal / 3;
		$knowledge_data['knowledge_emp_avg'] = number_format((float)$knowledgeAvgTotal, 2, '.', '');

		$this->am->postEmployeeKnowledge($knowledge_data);


		/* knowledge */

		/* software */

		$software_data['employee_id'] = $this->input->post('main_employee_id');
		$software_data['software_bitrix_tasks_and_leaves'] = $this->input->post('software_bitrix_tasks_and_leaves');
		$software_data['software_digital_tools_production_communication'] = $this->input->post('software_digital_tools_production_communication');
		
		$software_data['software_comments'] = $this->input->post('software_comments');

		$softwareTotal = $software_data['software_bitrix_tasks_and_leaves'] + $software_data['software_digital_tools_production_communication']; 
		$softwareAvgTotal = $softwareTotal / 3;
		$software_data['software_emp_avg'] = number_format((float)$softwareAvgTotal, 2, '.', '');

		$this->am->postEmployeeSoftware($software_data);


		/* software */

		/* dependability */

		$dependability_data['employee_id'] = $this->input->post('main_employee_id');
		$dependability_data['dependability_handle_a_team'] = $this->input->post('dependability_handle_a_team');
		$dependability_data['dependability_handle_a_project'] = $this->input->post('dependability_handle_a_project');
		$dependability_data['dependability_the_set_deadlines'] = $this->input->post('dependability_the_set_deadlines');

		$dependability_data['dependability_comments'] = $this->input->post('dependability_comments');

		$dependabilityTotal = $dependability_data['dependability_handle_a_team'] + $dependability_data['dependability_handle_a_project'] + $dependability_data['dependability_the_set_deadlines']; 
		$dependabilityAvgTotal = $dependabilityTotal / 3;
		$dependability_data['dependability_emp_avg'] = number_format((float)$dependabilityAvgTotal, 2, '.', '');

		$this->am->postEmployeeDependability($dependability_data);

		/* dependability */

		/* time management */

		$time_management_data['employee_id'] = $this->input->post('main_employee_id');
		$time_management_data['time_management_scheduled_work_shift'] = $this->input->post('time_management_scheduled_work_shift');
		$time_management_data['time_management_required_working_hours'] = $this->input->post('time_management_required_working_hours');
		$time_management_data['time_management_deadlinesclearly_with_your_teammates'] = $this->input->post('time_management_deadlinesclearly_with_your_teammates');

		$time_management_data['time_management_comments'] = $this->input->post('time_management_comments');

		$time_managementTotal = $time_management_data['time_management_scheduled_work_shift'] + $time_management_data['time_management_required_working_hours'] + $time_management_data['time_management_deadlinesclearly_with_your_teammates']; 
		$time_managementAvgTotal = $time_managementTotal / 3;
		$time_management_data['time_management_emp_avg'] = number_format((float)$time_managementAvgTotal, 2, '.', '');

		$this->am->postEmployeeTimeManagement($time_management_data);

		/* time management */

		/* adaptability */

		$adaptability_data['employee_id'] = $this->input->post('main_employee_id');
		$adaptability_data['adaptability_short_amount_of_time'] = $this->input->post('adaptability_short_amount_of_time');
		$adaptability_data['adaptability_ability_to_adjust_depending'] = $this->input->post('adaptability_ability_to_adjust_depending');
		$adaptability_data['adaptability_work_on_multiple_projects'] = $this->input->post('adaptability_work_on_multiple_projects');
		$adaptability_data['adaptability_learn_new_disciplines_software'] = $this->input->post('adaptability_learn_new_disciplines_software');

		$adaptability_data['adaptability_comments'] = $this->input->post('adaptability_comments');

		$adaptabilityTotal = $adaptability_data['adaptability_short_amount_of_time'] + $adaptability_data['adaptability_ability_to_adjust_depending'] + $adaptability_data['adaptability_work_on_multiple_projects'] + $adaptability_data['adaptability_learn_new_disciplines_software']; 
		$adaptabilityAvgTotal = $adaptabilityTotal / 3;
		$adaptability_data['p_adaptability_emp_avg'] = number_format((float)$adaptabilityAvgTotal, 2, '.', '');

		$this->am->postEmployeeAdaptability($adaptability_data);

		/* adaptability */

		/* initiative proactive */

		$initiative_proactive_data['employee_id'] = $this->input->post('main_employee_id');
		$initiative_proactive_data['initiative_proactive_ability_to_learn_new_project'] = $this->input->post('initiative_proactive_ability_to_learn_new_project');
		$initiative_proactive_data['initiative_proactive_adjust_depending_on_the_project'] = $this->input->post('initiative_proactive_adjust_depending_on_the_project');
		$initiative_proactive_data['initiative_proactive_work_on_multiple_projects'] = $this->input->post('initiative_proactive_work_on_multiple_projects');
		$initiative_proactive_data['initiative_proactive_learn_new_disciplines_software'] = $this->input->post('initiative_proactive_learn_new_disciplines_software');

		$initiative_proactive_data['initiative_proactive_comments'] = $this->input->post('initiative_proactive_comments');

		$initiative_proactiveTotal = $initiative_proactive_data['initiative_proactive_ability_to_learn_new_project'] + $initiative_proactive_data['initiative_proactive_adjust_depending_on_the_project'] + $initiative_proactive_data['initiative_proactive_work_on_multiple_projects'] + $initiative_proactive_data['initiative_proactive_learn_new_disciplines_software']; 
		$initiative_proactiveAvgTotal = $initiative_proactiveTotal / 3;
		$initiative_proactive_data['p_initiative_proactive_emp_avg'] = number_format((float)$initiative_proactiveAvgTotal, 2, '.', '');

		$this->am->postEmployeeInitiativeProactive($initiative_proactive_data);

		/* initiative proactive */

		/* creativity problem solving */

		$creativity_problem_solving_data['employee_id'] = $this->input->post('main_employee_id');
		$creativity_problem_solving_data['creativity_problem_solving_learn_new_project'] = $this->input->post('creativity_problem_solving_learn_new_project');
		$creativity_problem_solving_data['creativity_problem_solving_depending_project_needs'] = $this->input->post('creativity_problem_solving_depending_project_needs');
		$creativity_problem_solving_data['creativity_problem_solving_work_multiple_projects'] = $this->input->post('creativity_problem_solving_work_multiple_projects');
		$creativity_problem_solving_data['creativity_problem_solving_knowledge_to_new_challenges'] = $this->input->post('creativity_problem_solving_knowledge_to_new_challenges');

		$creativity_problem_solving_data['creativity_problem_solving_comments'] = $this->input->post('creativity_problem_solving_comments');

		$creativity_problem_solvingTotal = $creativity_problem_solving_data['creativity_problem_solving_learn_new_project'] + $creativity_problem_solving_data['creativity_problem_solving_depending_project_needs'] + $creativity_problem_solving_data['creativity_problem_solving_work_multiple_projects'] + $creativity_problem_solving_data['creativity_problem_solving_knowledge_to_new_challenges']; 
		$creativity_problem_solvingAvgTotal = $creativity_problem_solvingTotal / 3;
		$creativity_problem_solving_data['p_creativity_problem_solving_emp_avg'] = number_format((float)$creativity_problem_solvingAvgTotal, 2, '.', '');

		$this->am->postEmployeeCreativityProblemSolving($creativity_problem_solving_data);

		/* creativity problem solving */

		$sumTotal = $communication_data['communication_emp_avg'] + $productivity_data['productivity_emp_avg'] + $quality_data['quality_emp_avg'] + $knowledge_data['knowledge_emp_avg'] + $software_data['software_emp_avg'] + $dependability_data['dependability_emp_avg'] + $time_management_data['time_management_emp_avg'] + $adaptability_data['p_adaptability_emp_avg'] + $initiative_proactive_data['p_initiative_proactive_emp_avg'] + $creativity_problem_solving_data['p_creativity_problem_solving_emp_avg']; 
		$avgTotal = $sumTotal / 10;
		$data['main_emp_avg'] = number_format((float)$avgTotal, 2, '.', '');

		if($this->am->postEmployeePerformance($data)){
			$this->session->set_flashdata('performance_upload_success', 'Uploaded Successfully!!!');
			redirect('Admin/addEmployeesPerformance');
		}else{
			$this->session->set_flashdata('performance_not_uploaded', 'Please Try Again!');
			redirect('Admin/addEmployeesPerformance');
		}

	}
	
	public function fetchGoal1(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden1 = $this->input->post('goals_hidden1');
        $res = $this->am->fatchGoalsText($employee_id, $goals_hidden1);
        echo json_encode($res);
    }

    public function fetchGoal2(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden2 = $this->input->post('goals_hidden2');
        $res = $this->am->fatchGoalsText($employee_id, $goals_hidden2);
        echo json_encode($res);
    }

    public function fetchGoal3(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden3 = $this->input->post('goals_hidden3');
        $res = $this->am->fatchGoalsText($employee_id, $goals_hidden3);
        echo json_encode($res);
    }

    public function fetchGoal4(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden4 = $this->input->post('goals_hidden4');
        $res = $this->am->fatchGoalsText($employee_id, $goals_hidden4);
        echo json_encode($res);
    }

	public function checkValidAccount(){
		$this->form_validation->set_rules('email','Email Id','is_unique[employee_table.employee_email]');
		if($this->form_validation->run()==FALSE){
			echo json_encode(1);
		}else{
			echo json_encode(2);
		}
	}
}
?>