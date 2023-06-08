<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct() {
        parent::__construct();
		if( ! $this->session->userdata('emp_login_id'))
		return redirect('Login/employeeLogin');
        $this->load->model('Login_model','lm');
        $this->load->model('Admin_model','am');
		$this->load->model('Employee_model','em');
		$this->load->library('pagination');
    }

	public function empLogout(){
		$this->session->unset_userdata('emp_login_id');
		return redirect('Login/employeeLogin');
	}

    function fetchDepartmentDrop(){
		if($this->input->post('department_id')){
		 echo $this->am->fetchDepartmentList($this->input->post('department_id'));
		}
	}

    public function index(){
       $empID = $this->session->userdata('emp_login_id');
       $data['empinfo'] = $this->em->getEmpInfo($empID);
       $data['check'] = $this->em->getVerifyAdd($empID);

       $data['check2'] = $this->em->checkVerifyAllScores($empID);
       $data['check3'] = $this->em->showAVGin_EMP_Dash($empID);

        $data['topper'] = $this->am->getTopPerformance();
        $data['lowper'] = $this->am->getLowPerformance();
        $data['performancedash'] = $this->am->PerformanceResultDashboard();

        $data['grateful'] = $this->am->getGratefulPerformance();
        $data['good'] = $this->am->getGoodPerformance();
        $data['average'] = $this->am->getAveragePerformance();

       $this->load->view('employee/include/header');
       $this->load->view('employee/include/menu', $data);
       $this->load->view('employee/index', $data);
       $this->load->view('employee/include/footer', $data);

   }


   public function showEmployeeInfo($id){
            $empID = $this->session->userdata('emp_login_id');
            $menu['empinfo'] = $this->em->getEmpInfo($empID);
            $data['emp_check_level'] = $this->em->getEmpInfo($empID);

            $data['empdata'] = $this->am->getEmpDetails($id);
            $data['departments'] = $this->am->getEmpDepartment();
            $data['empinfo'] = $this->am->getEmployeesPerformanceInfo($id);

            $data['skills'] = $this->em->getEmpSkills($id);
            $data['status'] = $this->em->getEmpStatus($id);
            $data['experience'] = $this->em->getEmpExperience($id);
            $data['salary'] = $this->em->getEmpSalary($id);
            $data['qualification'] = $this->em->getEmpQualification($id);
            $data['individual'] = $this->em->getEmpIndividual($id);
            $data['personality'] = $this->em->getEmpPersonality($id);
            $data['software'] = $this->em->getEmpSoftware($id);

            $this->load->view('employee/include/header');
            $this->load->view('employee/include/menu', $menu);
            $this->load->view('employee/employee-details-page', $data);
            $this->load->view('employee/include/footer');
        }

   public function empDetailsPage(){

        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['emp_check_level'] = $this->em->getEmpInfo($empID);

        $data['empdata'] = $this->am->getEmpDetails($empID);
        $data['departments'] = $this->am->getEmpDepartment();

        $empinfos = $this->am->getEmployeesPerformanceInfo($empID);

        if($empinfos){
            $data['empinfo'] = $empinfos;
        }else{
            $data['empinfo'] = 0;
        }

        $skills = $this->em->getEmpSkills($empID);
        if($skills){
            $data['skills'] = $skills;
        }else{
            $data['skills'] = 0;
        }

        $status = $this->em->getEmpStatus($empID);
        if($status){
            $data['status'] = $status;
        }else{
            $data['status'] = 0;
        }

        $goals = $this->em->getEmpGoals($empID);
        if($goals){
            $data['goal'] = $goals;
        }else{
            $data['goal'] = 0;
        }

        $experience = $this->em->getEmpExperience($empID);
        if($experience){
            $data['experience'] = $experience;
        }else{
            $data['experience'] = 0;
        }

        $salary = $this->em->getEmpSalary($empID);
        if($salary){
            $data['salary'] = $salary;
        }else{
            $data['salary'] = 0;
        }

        $qualification = $this->em->getEmpQualification($empID);
        if($qualification){
            $data['qualification'] = $qualification;
        }else{
            $data['qualification'] = 0;
        }
        $individual = $this->em->getEmpIndividual($empID);
        if($individual){
            $data['individual'] = $individual;
        }else{
            $data['individual'] = 0;
        }
        $personality = $this->em->getEmpPersonality($empID);
        if($personality){
            $data['personality'] = $personality;
        }else{
            $data['personality'] = 0;
        }
        $software = $this->em->getEmpSoftware($empID);
        if($software){
            $data['software'] = $software;
        }else{
            $data['software'] = 0;
        }

    $this->load->view('employee/include/header');
    $this->load->view('employee/include/menu', $menu);
    $this->load->view('employee/employee-details-page', $data);
    $this->load->view('employee/include/footer');

   }


   public function UpdateEmpData(){

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
        
        $empID = $this->input->post('main_employee_id');

        if(!empty($_FILES['employee_image']['name'])){

        $upload = $this->em->get_empImg_id($empID);

        if(file_exists($upload->employee_image)) {
                if(unlink($upload->employee_image)) {
                    $check = uploadimgfile("employee_image",$folder="upload",$prefix="proimg_");
                    $link = $check['data']['name'];
                    $data['employee_image'] = $link;
                }
            }
        }
        
        if($this->em->selfUpdateEmpInfo($data, $empID)){
            $this->session->set_flashdata('self_emp_update_success', 'Your Detail Updated Successfully!!!');
            return redirect('Employee/empDetailsPage');
        }else{
            $this->session->set_flashdata('self_emp_not_updated', 'Please Try Again!');
            return redirect('Employee/empDetailsPage');
        }
   }

   public function setEmpPerformance(){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empdata'] = $this->em->getEmpDetails($empID);
        $data['check'] = $this->em->getVerifyAdd($empID);
        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/set-employees-performance', $data);
        $this->load->view('employee/include/footer');
   }

//    Employee Performance List

   // For Employee    

   public function showEmpPerformanceList(){

        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empdata'] = $this->em->getEmpInfo($empID);

        $config=[
            'base_url' => base_url('Employee/showEmpPerformanceList'),
            'per_page' =>25,
            'total_rows' => $this->em->num_rows_EmployeesPerformanceList(),
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
        $data['emp_per_list'] = $this->em->getEmployeesPerformanceList($config['per_page'],$this->uri->segment(3), $empID);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/employee-performance-list', $data);
        $this->load->view('employee/include/footer');
   }


    // For Employee & Manager    

   public function seeEmpPerList($id){

        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['emp_per_list'] = $this->em->getEMPPerList($id);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/employee-performance-history-manager', $data);
        $this->load->view('employee/include/footer');
   }


//    Employee View Single the proformance

   public function showEmpPerformance($per_id){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empdata'] = $this->em->getEmpDetails($empID);
        $data['departments'] = $this->em->getEmpDepartment();

        $data['empinfo'] = $this->em->getEmployeesPerformanceInfo($per_id);
        $data['emp_avg'] = $this->am->getEmployeesAVG($per_id);

        $data['check'] = $this->em->getVerifyAdd($empID);
        $data['check2'] = $this->em->checkVerifyAllScores($empID);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/show-employees-performance', $data);
        $this->load->view('employee/include/footer');
   }

//    Employee Performance

  public function postEmployeePerformance(){

    $data['employee_id'] = $this->input->post('employee_id');
    $data['evaluate_date_category'] = $this->input->post('evaluate_date_category');
    $data['emp_performance_start_date'] = $this->input->post('emp_performance_start_date');
    $data['emp_performance_end_date'] = $this->input->post('emp_performance_end_date');

    $performance_id = $this->em->setEmpMainAvgRating($data);

    if($performance_id){

                /* communication */
                $communication_data['employee_id'] = $this->input->post('employee_id');
                $communication_data['performance_id'] =  $performance_id;
                $communication_data['communication_question_1'] = $this->input->post('communication_question_1');
                $communication_data['communication_question_2'] = $this->input->post('communication_question_2');
                $communication_data['communication_question_3'] = $this->input->post('communication_question_3');
                $communication_data['communication_question_4'] = $this->input->post('communication_question_4');
                $communication_data['communication_question_5'] = $this->input->post('communication_question_5');
                $communication_data['communication_comments'] = $this->input->post('communication_comments');

                $communicationTotal = $communication_data['communication_question_1'] + $communication_data['communication_question_2'] + $communication_data['communication_question_3'] + $communication_data['communication_question_4'] + $communication_data['communication_question_5']; 
                $communicationAvgTotal = $communicationTotal / 5;
                $communication_data['communication_emp_avg'] = number_format((float)$communicationAvgTotal, 2, '.', '');

                $this->em->setEmployeeCommunication($communication_data);
                
                /* communication */

                // /* Knowledge & Performance */

                $knowledge_performance_data['employee_id'] = $this->input->post('employee_id');
                $knowledge_performance_data['performance_id'] = $performance_id;

                $knowledge_performance_data['knowledge_performance_question_1'] = $this->input->post('knowledge_performance_question_1');
                $knowledge_performance_data['knowledge_performance_question_2'] = $this->input->post('knowledge_performance_question_2');
                $knowledge_performance_data['knowledge_performance_question_3'] = $this->input->post('knowledge_performance_question_3');
                $knowledge_performance_data['knowledge_performance_question_4'] = $this->input->post('knowledge_performance_question_4');
                $knowledge_performance_data['knowledge_performance_question_5'] = $this->input->post('knowledge_performance_question_5');

                $knowledge_performance_data['knowledge_performance_comments'] = $this->input->post('knowledge_performance_comments');

                $knowledge_performanceTotal = $knowledge_performance_data['knowledge_performance_question_1'] + $knowledge_performance_data['knowledge_performance_question_2'] + $knowledge_performance_data['knowledge_performance_question_3'] + $knowledge_performance_data['knowledge_performance_question_4'] + $knowledge_performance_data['knowledge_performance_question_5']; 
                $knowledge_performanceAvgTotal = $knowledge_performanceTotal / 5;
                $knowledge_performance_data['knowledge_performance_emp_avg'] = number_format((float)$knowledge_performanceAvgTotal, 2, '.', '');

                $this->em->setEmployeeKnowledgePerformance($knowledge_performance_data);

                // /* Knowledge & Performance */

                /*  Quality & Organization */

                $quality_data['employee_id'] = $this->input->post('employee_id');
                $quality_data['performance_id'] = $performance_id;

                $quality_data['quality_question_1'] = $this->input->post('quality_question_1');
                $quality_data['quality_question_2'] = $this->input->post('quality_question_2');
                $quality_data['quality_question_3'] = $this->input->post('quality_question_3');
                $quality_data['quality_question_4'] = $this->input->post('quality_question_4');
                $quality_data['quality_question_5'] = $this->input->post('quality_question_5');

                $quality_data['quality_comments'] = $this->input->post('quality_comments');

                $qualityTotal = $quality_data['quality_question_1'] + $quality_data['quality_question_2'] + $quality_data['quality_question_3'] + $quality_data['quality_question_4'] + $quality_data['quality_question_5']; 
                $qualityAvgTotal = $qualityTotal / 5;
                $quality_data['quality_emp_avg'] = number_format((float)$qualityAvgTotal, 2, '.', '');

                $this->em->setEmployeeQuality($quality_data);

                /* Quality & Organization */

               
                /* Knowledge of job */

                $knowledge_data['employee_id'] = $this->input->post('employee_id');
                $knowledge_data['performance_id'] = $performance_id;
                $knowledge_data['knowledge_standards_and_portfolio'] = $this->input->post('knowledge_standards_and_portfolio');
                $knowledge_data['knowledge_bim_project_requirements'] = $this->input->post('knowledge_bim_project_requirements');
                $knowledge_data['knowledge_of_the_construction_industry'] = $this->input->post('knowledge_of_the_construction_industry');
                
                $knowledge_data['knowledge_comments'] = $this->input->post('knowledge_comments');

                $knowledgeTotal = $knowledge_data['knowledge_standards_and_portfolio'] + $knowledge_data['knowledge_bim_project_requirements'] + $knowledge_data['knowledge_of_the_construction_industry']; 
                $knowledgeAvgTotal = $knowledgeTotal / 3;
                $knowledge_data['knowledge_emp_avg'] = number_format((float)$knowledgeAvgTotal, 2, '.', '');

                $this->em->setEmployeeKnowledge($knowledge_data);


                /* knowledge of job */

                /* Knowledge of Software */

                $software_data['employee_id'] = $this->input->post('employee_id');
                $software_data['performance_id'] = $performance_id;

                $software_data['software_question_1'] = $this->input->post('software_question_1');
                $software_data['software_question_2'] = $this->input->post('software_question_2');
                $software_data['software_question_3'] = $this->input->post('software_question_3');
                $software_data['software_question_4'] = $this->input->post('software_question_4');
                $software_data['software_question_5'] = $this->input->post('software_question_5');
                
                $software_data['software_comments'] = $this->input->post('software_comments');

                $softwareTotal = $software_data['software_question_1'] + $software_data['software_question_2'] + $software_data['software_question_3'] + $software_data['software_question_4'] + $software_data['software_question_5']; 
                $softwareAvgTotal = $softwareTotal / 5;
                $software_data['software_emp_avg'] = number_format((float)$softwareAvgTotal, 2, '.', '');

                $this->em->setEmployeeSoftware($software_data);

                /* Knowledge of Software */

                /* Reliability & Professionalism */

                $reliability_data['employee_id'] = $this->input->post('employee_id');
                $reliability_data['performance_id'] = $performance_id;

                $reliability_data['reliability_question_1'] = $this->input->post('reliability_question_1');
                $reliability_data['reliability_question_2'] = $this->input->post('reliability_question_2');
                $reliability_data['reliability_question_3'] = $this->input->post('reliability_question_3');
                $reliability_data['reliability_question_4'] = $this->input->post('reliability_question_4');
                $reliability_data['reliability_question_5'] = $this->input->post('reliability_question_5');
                $reliability_data['reliability_question_6'] = $this->input->post('reliability_question_6');

                $reliability_data['reliability_comments'] = $this->input->post('reliability_comments');

                $reliabilityTotal = $reliability_data['reliability_question_1'] + $reliability_data['reliability_question_2'] + $reliability_data['reliability_question_3'] + $reliability_data['reliability_question_4'] + $reliability_data['reliability_question_5'] + $reliability_data['reliability_question_6']; 
                $reliabilityAvgTotal = $reliabilityTotal / 6;
                $reliability_data['reliability_emp_avg'] = number_format((float)$reliabilityAvgTotal, 2, '.', '');

                $this->em->setEmployeeReliabilityProfessionalism($reliability_data);

                /* Reliability & Professionalism */

                /* Task & Time management */

                $time_management_data['employee_id'] = $this->input->post('employee_id');
                $time_management_data['performance_id'] = $performance_id;
                $time_management_data['time_management_question_1'] = $this->input->post('time_management_question_1');
                $time_management_data['time_management_question_2'] = $this->input->post('time_management_question_2');
                $time_management_data['time_management_question_3'] = $this->input->post('time_management_question_3');
                $time_management_data['time_management_question_4'] = $this->input->post('time_management_question_4');
                $time_management_data['time_management_question_5'] = $this->input->post('time_management_question_5');

                $time_management_data['time_management_comments'] = $this->input->post('time_management_comments');

                $time_managementTotal = $time_management_data['time_management_question_1'] + $time_management_data['time_management_question_2'] + $time_management_data['time_management_question_3'] + $time_management_data['time_management_question_4'] + $time_management_data['time_management_question_5']; 
                $time_managementAvgTotal = $time_managementTotal / 5;
                $time_management_data['time_management_emp_avg'] = number_format((float)$time_managementAvgTotal, 2, '.', '');

                $this->em->setEmployeeTimeManagement($time_management_data);

                /* Task & Time management */

                /* Adaptability & Proactivity */

                $adaptability_data['employee_id'] = $this->input->post('employee_id');
                $adaptability_data['performance_id'] = $performance_id;

                $adaptability_data['adaptability_productivity_question_1'] = $this->input->post('adaptability_productivity_question_1');
                $adaptability_data['adaptability_productivity_question_2'] = $this->input->post('adaptability_productivity_question_2');
                $adaptability_data['adaptability_productivity_question_3'] = $this->input->post('adaptability_productivity_question_3');
                $adaptability_data['adaptability_productivity_question_4'] = $this->input->post('adaptability_productivity_question_4');
                $adaptability_data['adaptability_productivity_question_5'] = $this->input->post('adaptability_productivity_question_5');

                $adaptability_data['productivity_comments'] = $this->input->post('productivity_comments');

                $adaptabilityTotal = $adaptability_data['adaptability_productivity_question_1'] + $adaptability_data['adaptability_productivity_question_2'] + $adaptability_data['adaptability_productivity_question_3'] + $adaptability_data['adaptability_productivity_question_4'] + $adaptability_data['adaptability_productivity_question_5']; 
                $adaptabilityAvgTotal = $adaptabilityTotal / 5;
                $adaptability_data['productivity_emp_avg'] = number_format((float)$adaptabilityAvgTotal, 2, '.', '');

                $this->em->setEmployeeProductivity($adaptability_data);

                /* Adaptability & Proactivity */

                /* initiative proactive */

                $initiative_proactive_data['employee_id'] = $this->input->post('employee_id');
                $initiative_proactive_data['performance_id'] = $performance_id;
                $initiative_proactive_data['initiative_proactive_question_1'] = $this->input->post('initiative_proactive_question_1');
                $initiative_proactive_data['initiative_proactive_question_2'] = $this->input->post('initiative_proactive_question_2');
                $initiative_proactive_data['initiative_proactive_question_3'] = $this->input->post('initiative_proactive_question_3');

                $initiative_proactive_data['initiative_proactive_comments'] = $this->input->post('initiative_proactive_comments');

                $initiative_proactiveTotal = $initiative_proactive_data['initiative_proactive_question_1'] + $initiative_proactive_data['initiative_proactive_question_2'] + $initiative_proactive_data['initiative_proactive_question_3']; 
                $initiative_proactiveAvgTotal = $initiative_proactiveTotal / 3;
                $initiative_proactive_data['p_initiative_proactive_emp_avg'] = number_format((float)$initiative_proactiveAvgTotal, 2, '.', '');

                $this->em->setEmployeeInitiativeProactive($initiative_proactive_data);

                /* initiative proactive */

                /* creativity problem solving */

                $creativity_problem_solving_data['employee_id'] = $this->input->post('employee_id');
                $creativity_problem_solving_data['performance_id'] = $performance_id;
                $creativity_problem_solving_data['creativity_problem_question_1'] = $this->input->post('creativity_problem_question_1');
                $creativity_problem_solving_data['creativity_problem_question_2'] = $this->input->post('creativity_problem_question_2');
                $creativity_problem_solving_data['creativity_problem_question_3'] = $this->input->post('creativity_problem_question_3');

                $creativity_problem_solving_data['creativity_problem_solving_comments'] = $this->input->post('creativity_problem_solving_comments');

                $creativity_problem_solvingTotal = $creativity_problem_solving_data['creativity_problem_question_1'] + $creativity_problem_solving_data['creativity_problem_question_2'] + $creativity_problem_solving_data['creativity_problem_question_3']; 
                $creativity_problem_solvingAvgTotal = $creativity_problem_solvingTotal / 3;
                $creativity_problem_solving_data['p_creativity_problem_solving_emp_avg'] = number_format((float)$creativity_problem_solvingAvgTotal, 2, '.', '');

                $this->em->setEmployeeCreativityProblemSolving($creativity_problem_solving_data);

                /* creativity problem solving */

                $main_avg['employee_id'] = $this->input->post('employee_id');
                $main_avg['performance_id'] =  $performance_id;
                
                // $main_avg['total_emp_avg'] = number_format((float)$avgTotal, 2, '.', '');

                $main_avg['total_emp_avg'] = 0;

                if($this->em->setEmpMainAvg($main_avg)){
                    $this->session->set_flashdata('performance_upload_success', 'Submit Score Successfully!!!');
                    redirect('Employee/showEmpPerformanceList');
                }else{
                    $this->session->set_flashdata('performance_not_uploaded', 'Please Try Again!');
                    redirect('Employee/showEmpPerformanceList');
                }
        
                }else{

                    $this->session->set_flashdata('performance_not_uploaded', 'Please Try Again!');
                    redirect('Employee/showEmpPerformanceList');  
                }

}

    public function displayEmployeeScores($id){

        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empinfo'] = $this->em->getPerformanceByEdit($id);

		$this->load->view('employee/include/header');
		$this->load->view('employee/include/menu', $menu);
		$this->load->view('employee/employee-performance-edit', $data);
		$this->load->view('employee/include/footer');
    }

    public function updateEmpPerformance(){

        $per_id = $this->input->post('performance_id');
    
		/* communication */

		$communication_data['employee_id'] = $this->input->post('main_employee_id');

        $communication1 = $this->input->post('communication_question_1');
        $communication1_emp = $this->input->post('e_communication_question_1');

        $communication2 = $this->input->post('communication_question_2');
        $communication2_emp = $this->input->post('e_communication_question_2');

        $communication3 = $this->input->post('communication_question_3');
        $communication3_emp = $this->input->post('e_communication_question_3');

        $communication4 = $this->input->post('communication_question_4');
        $communication4_emp = $this->input->post('e_communication_question_4');

        $communication5 = $this->input->post('communication_question_5');
        $communication5_emp = $this->input->post('e_communication_question_5');

        if($communication1){
            $communication_data['communication_question_1'] = $communication1;
            $avg_communication1 = intval($communication1);
        }
        else{
            $communication_data['communication_question_1'] = $communication1_emp;
            $avg_communication1 = intval($communication1_emp);
        }

        if($communication2){
            $communication_data['communication_question_2'] = $communication2;
            $avg_communication2 = intval($communication2);
        }
        else{
            $communication_data['communication_question_2'] = $communication2_emp;
            $avg_communication2 = intval($communication2_emp);
        }

        if($communication3){
            $communication_data['communication_question_3'] = $communication3;
            $avg_communication3 = intval($communication3);
        }
        else{
            $communication_data['communication_question_3'] = $communication3_emp;
            $avg_communication3 = intval($communication3_emp);
        }

        if($communication4){
            $communication_data['communication_question_4'] = $communication4;
            $avg_communication4 = intval($communication4);
        }
        else{
            $communication_data['communication_question_4'] = $communication4_emp;
            $avg_communication4 = intval($communication4_emp);
        }

        if($communication5){
            $communication_data['communication_question_5'] = $communication5;
            $avg_communication5 = intval($communication5);
        }
        else{
            $communication_data['communication_question_5'] = $communication5_emp;
            $avg_communication5 = intval($communication5_emp);
        }

		$communication_data['communication_comments'] = $this->input->post('communication_comments');

		$communicationTotal = $avg_communication1 + $avg_communication2 + $avg_communication3 + $avg_communication4 + $avg_communication5;
		$communicationAvgTotal = $communicationTotal / 5;
		$communication_data['communication_emp_avg'] = number_format((float)$communicationAvgTotal, 2, '.', '');

		/* communication */

		// /* Knowledge & Performance */

        $knowledge_performance_data['employee_id'] = $this->input->post('employee_id');

        $knowledge_performance1 = $this->input->post('knowledge_performance_question_1');
        $knowledge_performance1_emp = $this->input->post('e_knowledge_performance_question_1');

        $knowledge_performance2 = $this->input->post('knowledge_performance_question_2');
        $knowledge_performance2_emp = $this->input->post('e_knowledge_performance_question_2');

        $knowledge_performance3 = $this->input->post('knowledge_performance_question_3');
        $knowledge_performance3_emp = $this->input->post('e_knowledge_performance_question_3');

        $knowledge_performance4 = $this->input->post('knowledge_performance_question_4');
        $knowledge_performance4_emp = $this->input->post('e_knowledge_performance_question_4');

        $knowledge_performance5 = $this->input->post('knowledge_performance_question_5');
        $knowledge_performance5_emp = $this->input->post('e_knowledge_performance_question_5');


        if($knowledge_performance1){
            $knowledge_performance_data['knowledge_performance_question_1'] = $knowledge_performance1;
            $avg_knowledge_performance1 = intval($knowledge_performance1);
        }
        else{
            $knowledge_performance_data['knowledge_performance_question_1'] = $knowledge_performance1_emp;
            $avg_knowledge_performance1 = intval($knowledge_performance1_emp);
        }

        if($knowledge_performance2){
            $knowledge_performance_data['knowledge_performance_question_2'] = $knowledge_performance2;
            $avg_knowledge_performance2 = intval($knowledge_performance2);
        }
        else{
            $knowledge_performance_data['knowledge_performance_question_2'] = $knowledge_performance2_emp;
            $avg_knowledge_performance2 = intval($knowledge_performance2_emp);
        }

        if($knowledge_performance3){
            $knowledge_performance_data['knowledge_performance_question_3'] = $knowledge_performance3;
            $avg_knowledge_performance3 = intval($knowledge_performance3);
        }
        else{
            $knowledge_performance_data['knowledge_performance_question_3'] = $knowledge_performance3_emp;
            $avg_knowledge_performance3 = intval($knowledge_performance3_emp);
        }

        if($knowledge_performance4){
            $knowledge_performance_data['knowledge_performance_question_4'] = $knowledge_performance4;
            $avg_knowledge_performance4 = intval($knowledge_performance4);
        }
        else{
            $knowledge_performance_data['knowledge_performance_question_4'] = $knowledge_performance4_emp;
            $avg_knowledge_performance4 = intval($knowledge_performance4_emp);
        }

        if($knowledge_performance5){
            $knowledge_performance_data['knowledge_performance_question_5'] = $knowledge_performance5;
            $avg_knowledge_performance5 = intval($knowledge_performance5);
        }
        else{
            $knowledge_performance_data['knowledge_performance_question_5'] = $knowledge_performance5_emp;
            $avg_knowledge_performance5 = intval($knowledge_performance5_emp);
        }

        $knowledge_performance_data['knowledge_performance_comments'] = $this->input->post('knowledge_performance_comments');

        $knowledge_performanceTotal = $avg_knowledge_performance1 + $avg_knowledge_performance2 + $avg_knowledge_performance3 + $avg_knowledge_performance4 + $avg_knowledge_performance5;
        $knowledge_performanceAvgTotal = $knowledge_performanceTotal / 5;
        $knowledge_performance_data['knowledge_performance_emp_avg'] = number_format((float)$knowledge_performanceAvgTotal, 2, '.', '');

		// /* Knowledge & Performance */

		/* Quality & Organization */

		$quality_data['employee_id'] = $this->input->post('employee_id');

        $quality_question1 = $this->input->post('quality_question_1');
        $quality_question1_emp = $this->input->post('e_quality_question_1');

        $quality_question2 = $this->input->post('quality_question_2');
        $quality_question2_emp = $this->input->post('e_quality_question_2');

        $quality_question3 = $this->input->post('quality_question_3');
        $quality_question3_emp = $this->input->post('e_quality_question_3');

        $quality_question4 = $this->input->post('quality_question_4');
        $quality_question4_emp = $this->input->post('e_quality_question_4');

        $quality_question5 = $this->input->post('quality_question_5');
        $quality_question5_emp = $this->input->post('e_quality_question_5');

        if($quality_question1){
            $quality_data['quality_question_1'] = $quality_question1;
            $avg_quality1 = intval($quality_question1);
        }else{
            $quality_data['quality_question_1'] = $quality_question1_emp;
            $avg_quality1 = intval($quality_question1_emp);
        }

        if($quality_question2){
            $quality_data['quality_question_2'] = $quality_question2;
            $avg_quality2 = intval($quality_question2);
        }else{
            $quality_data['quality_question_2'] = $quality_question2_emp;
            $avg_quality2 = intval($quality_question2_emp);
        }

        if($quality_question3){
            $quality_data['quality_question_3'] = $quality_question3;
            $avg_quality3 = intval($quality_question3);
        }else{
            $quality_data['quality_question_3'] = $quality_question3_emp;
            $avg_quality3 = intval($quality_question3_emp);
        }

        if($quality_question4){
            $quality_data['quality_question_4'] = $quality_question4;
            $avg_quality4 = intval($quality_question4);
        }else{
            $quality_data['quality_question_4'] = $quality_question4_emp;
            $avg_quality4 = intval($quality_question4_emp);
        }

        if($quality_question5){
            $quality_data['quality_question_5'] = $quality_question5;
            $avg_quality5 = intval($quality_question5);
        }else{
            $quality_data['quality_question_5'] = $quality_question5_emp;
            $avg_quality5 = intval($quality_question5_emp);
        }

        $quality_data['quality_comments'] = $this->input->post('quality_comments');

        $qualityTotal = $avg_quality1 + $avg_quality2 + $avg_quality3 + $avg_quality4 + $avg_quality5; 
        $qualityAvgTotal = $qualityTotal / 5;
        $quality_data['quality_emp_avg'] = number_format((float)$qualityAvgTotal, 2, '.', '');

		/* Quality & Organization */

		/* Knowledge of job */

		$knowledge_data['employee_id'] = $this->input->post('main_employee_id');

        $knowledgejob1 = $this->input->post('knowledge_standards_and_portfolio');
        $knowledgejob1_emp = $this->input->post('e_knowledge_standards_and_portfolio');

        $knowledgejob2 = $this->input->post('knowledge_bim_project_requirements');
        $knowledgejob2_emp = $this->input->post('e_knowledge_bim_project_requirements');

        $knowledgejob3 = $this->input->post('knowledge_of_the_construction_industry');
        $knowledgejob3_emp = $this->input->post('e_knowledge_of_the_construction_industry');


        if($knowledgejob1){
            $knowledgejob_data['knowledge_standards_and_portfolio'] = $knowledgejob1;
            $avg_knowledgejob1 = intval($knowledgejob1);
        }else{
            $knowledgejob_data['knowledge_standards_and_portfolio'] = $knowledgejob1_emp;
            $avg_knowledgejob1 = intval($knowledgejob1_emp);
        }

        if($knowledgejob2){
            $knowledgejob_data['knowledge_bim_project_requirements'] = $knowledgejob2;
            $avg_knowledgejob2 = intval($knowledgejob2);
        }else{
            $knowledgejob_data['knowledge_bim_project_requirements'] = $knowledgejob2_emp;
            $avg_knowledgejob2 = intval($knowledgejob2_emp);
        }

        if($knowledgejob3){
            $knowledgejob_data['knowledge_of_the_construction_industry'] = $knowledgejob3;
            $avg_knowledgejob3 = intval($knowledgejob3);
        }else{
            $knowledgejob_data['knowledge_of_the_construction_industry'] = $knowledgejob3_emp;
            $avg_knowledgejob3 = intval($knowledgejob3_emp);
        }

		
		$knowledgejob_data['knowledge_comments'] = $this->input->post('knowledge_comments');

		$knowledgeTotal = $avg_knowledgejob1 + $avg_knowledgejob2 + $avg_knowledgejob3; 
		$knowledgeAvgTotal = $knowledgeTotal / 3;
		$knowledgejob_data['knowledge_emp_avg'] = number_format((float)$knowledgeAvgTotal, 2, '.', '');

		/* Knowledge of job */

		/* Knowledge of Software */

		$software_data['employee_id'] = $this->input->post('employee_id');

        $software_data1 = $this->input->post('software_question_1');
        $software_data1_emp = $this->input->post('e_software_question_1');

        $software_data2 = $this->input->post('software_question_2');
        $software_data2_emp = $this->input->post('e_software_question_2');

        $software_data3 = $this->input->post('software_question_3');
        $software_data3_emp = $this->input->post('e_software_question_3');

        $software_data4 = $this->input->post('software_question_4');
        $software_data4_emp = $this->input->post('e_software_question_4');

        $software_data5 = $this->input->post('software_question_5');
        $software_data5_emp = $this->input->post('e_software_question_5');


        if($software_data1){
            $software_data['software_question_1'] = $software_data1;
            $avg_software1 = intval($software_data1);
        }else{
            $software_data['software_question_1'] = $software_data1_emp;
            $avg_software1 = intval($software_data1_emp);
        }

        if($software_data2){
            $software_data['software_question_2'] = $software_data2;
            $avg_software2 = intval($software_data2);
        }else{
            $software_data['software_question_2'] = $software_data2_emp;
            $avg_software2 = intval($software_data2_emp);
        }

        if($software_data3){
            $software_data['software_question_3'] = $software_data3;
            $avg_software3 = intval($software_data3);
        }else{
            $software_data['software_question_3'] = $software_data3_emp;
            $avg_software3 = intval($software_data3_emp);
        }

        if($software_data4){
            $software_data['software_question_4'] = $software_data4;
            $avg_software4 = intval($software_data4);
        }else{
            $software_data['software_question_4'] = $software_data4_emp;
            $avg_software4 = intval($software_data4_emp);
        }

        if($software_data5){
            $software_data['software_question_5'] = $software_data5;
            $avg_software5 = intval($software_data5);
        }else{
            $software_data['software_question_5'] = $software_data5_emp;
            $avg_software5 = intval($software_data5_emp);
        }

        
        $software_data['software_comments'] = $this->input->post('software_comments');

        $softwareTotal = $avg_software1 + $avg_software2 + $avg_software3 + $avg_software4 + $avg_software5; 
        $softwareAvgTotal = $softwareTotal / 5;
        $software_data['software_emp_avg'] = number_format((float)$softwareAvgTotal, 2, '.', '');


		/* Knowledge of Software */


        /* Reliability & Professionalism */

        $reliability_data['employee_id'] = $this->input->post('employee_id');

        $reliability_data1 = $this->input->post('reliability_question_1');
        $reliability_data1_emp = $this->input->post('e_reliability_question_1');

        $reliability_data2 = $this->input->post('reliability_question_2');
        $reliability_data2_emp = $this->input->post('e_reliability_question_2');

        $reliability_data3 = $this->input->post('reliability_question_3');
        $reliability_data3_emp = $this->input->post('e_reliability_question_3');

        $reliability_data4 = $this->input->post('reliability_question_4');
        $reliability_data4_emp = $this->input->post('e_reliability_question_4');

        $reliability_data5 = $this->input->post('reliability_question_5');
        $reliability_data5_emp = $this->input->post('e_reliability_question_5');

        $reliability_data6 = $this->input->post('reliability_question_6');
        $reliability_data6_emp = $this->input->post('e_reliability_question_6');

        if($reliability_data1){
            $reliability_data['reliability_question_1'] = $reliability_data1;
            $avg_reliability1 = intval($reliability_data1);
        }else{
            $reliability_data['reliability_question_1'] = $reliability_data1_emp;
            $avg_reliability1 = intval($reliability_data1_emp);
        }

        if($reliability_data2){
            $reliability_data['reliability_question_2'] = $reliability_data2;
            $avg_reliability2 = intval($reliability_data2);
        }else{
            $reliability_data['reliability_question_2'] = $reliability_data2_emp;
            $avg_reliability2 = intval($reliability_data2_emp);
        }

        if($reliability_data3){
            $reliability_data['reliability_question_3'] = $reliability_data3;
            $avg_reliability3 = intval($reliability_data3);
        }else{
            $reliability_data['reliability_question_3'] = $reliability_data3_emp;
            $avg_reliability3 = intval($reliability_data3_emp);
        }

        if($reliability_data4){
            $reliability_data['reliability_question_4'] = $reliability_data4;
            $avg_reliability4 = intval($reliability_data4);
        }else{
            $reliability_data['reliability_question_4'] = $reliability_data4_emp;
            $avg_reliability4 = intval($reliability_data4_emp);
        }

        if($reliability_data5){
            $reliability_data['reliability_question_5'] = $reliability_data5;
            $avg_reliability5 = intval($reliability_data5);
        }else{
            $reliability_data['reliability_question_5'] = $reliability_data5_emp;
            $avg_reliability5 = intval($reliability_data5_emp);
        }

        if($reliability_data6){
            $reliability_data['reliability_question_6'] = $reliability_data6;
            $avg_reliability6 = intval($reliability_data6);
        }else{
            $reliability_data['reliability_question_6'] = $reliability_data6_emp;
            $avg_reliability6 = intval($reliability_data6_emp);
        }

        $reliability_data['reliability_comments'] = $this->input->post('reliability_comments');

        $reliabilityTotal = $avg_reliability1 + $avg_reliability2 + $avg_reliability3 + $avg_reliability4 + $avg_reliability5 + $avg_reliability6; 
        $reliabilityAvgTotal = $reliabilityTotal / 6;
        $reliability_data['reliability_emp_avg'] = number_format((float)$reliabilityAvgTotal, 2, '.', '');

		/* Reliability & Professionalism */

		/* Time Management */

        $time_management_data['employee_id'] = $this->input->post('employee_id');

        $time_management_data1 = $this->input->post('time_management_question_1');
        $time_management_data1_emp = $this->input->post('e_time_management_question_1');

        $time_management_data2 = $this->input->post('time_management_question_2');
        $time_management_data2_emp = $this->input->post('e_time_management_question_2');

        $time_management_data3 = $this->input->post('time_management_question_3');
        $time_management_data3_emp = $this->input->post('e_time_management_question_3');

        $time_management_data4 = $this->input->post('time_management_question_4');
        $time_management_data4_emp = $this->input->post('e_time_management_question_4');

        $time_management_data5 = $this->input->post('time_management_question_5');
        $time_management_data5_emp = $this->input->post('e_time_management_question_5');

        if($time_management_data1){
            $time_management_data['time_management_question_1'] = $time_management_data1;
            $avg_time_management1 = intval($time_management_data1);
        }else{
            $time_management_data['time_management_question_1'] = $time_management_data1_emp;
            $avg_time_management1 = intval($time_management_data1_emp);
        }

        if($time_management_data2){
            $time_management_data['time_management_question_2'] = $time_management_data2;
            $avg_time_management2 = intval($time_management_data2);
        }else{
            $time_management_data['time_management_question_2'] = $time_management_data2_emp;
            $avg_time_management2 = intval($time_management_data2_emp);
        }

        if($time_management_data3){
            $time_management_data['time_management_question_3'] = $time_management_data3;
            $avg_time_management3 = intval($time_management_data3);
        }else{
            $time_management_data['time_management_question_3'] = $time_management_data3_emp;
            $avg_time_management3 = intval($time_management_data3_emp);
        }

        if($time_management_data4){
            $time_management_data['time_management_question_4'] = $time_management_data4;
            $avg_time_management4 = intval($time_management_data4);
        }else{
            $time_management_data['time_management_question_4'] = $time_management_data4_emp;
            $avg_time_management4 = intval($time_management_data4_emp);
        }

        if($time_management_data5){
            $time_management_data['time_management_question_5'] = $time_management_data5;
            $avg_time_management5 = intval($time_management_data5);
        }else{
            $time_management_data['time_management_question_5'] = $time_management_data5_emp;
            $avg_time_management5 = intval($time_management_data5_emp);
        }


        $time_management_data['time_management_comments'] = $this->input->post('time_management_comments');

        $time_managementTotal = $avg_time_management1 + $avg_time_management2 + $avg_time_management3 + $avg_time_management4 + $avg_time_management5; 
        $time_managementAvgTotal = $time_managementTotal / 5;
        $time_management_data['time_management_emp_avg'] = number_format((float)$time_managementAvgTotal, 2, '.', '');


		/* Time Management */

		/* Adaptability & Proactivity */

		$adaptability_data['employee_id'] = $this->input->post('employee_id');

        $adaptability_productivity_data1 = $this->input->post('adaptability_productivity_question_1_new');
        $adaptability_productivity_data1_emp = $this->input->post('e_adaptability_productivity_question_1');

        $adaptability_productivity_data2 = $this->input->post('adaptability_productivity_question_2_new');
        $adaptability_productivity_data2_emp = $this->input->post('e_adaptability_productivity_question_2');

        $adaptability_productivity_data3 = $this->input->post('adaptability_productivity_question_3_new');
        $adaptability_productivity_data3_emp = $this->input->post('e_adaptability_productivity_question_3');

        $adaptability_productivity_data4 = $this->input->post('adaptability_productivity_question_4_new');
        $adaptability_productivity_data4_emp = $this->input->post('e_adaptability_productivity_question_4');

        $adaptability_productivity_data5 = $this->input->post('adaptability_productivity_question_5_new');
        $adaptability_productivity_data5_emp = $this->input->post('e_adaptability_productivity_question_5');

        if($adaptability_productivity_data1){
            $adaptability_productivity_data['adaptability_productivity_question_1'] = $adaptability_productivity_data1;
            $avg_adaptability_productivity1 = intval($adaptability_productivity_data1);
        }else{
            $adaptability_productivity_data['adaptability_productivity_question_1'] = $adaptability_productivity_data1_emp;
            $avg_adaptability_productivity1 = intval($adaptability_productivity_data1_emp);
        }

        if($adaptability_productivity_data2){
            $adaptability_productivity_data['adaptability_productivity_question_2'] = $adaptability_productivity_data2;
            $avg_adaptability_productivity2 = intval($adaptability_productivity_data2);
        }else{
            $adaptability_productivity_data['adaptability_productivity_question_2'] = $adaptability_productivity_data2_emp;
            $avg_adaptability_productivity2 = intval($adaptability_productivity_data2_emp);
        }

        if($adaptability_productivity_data3){
            $adaptability_productivity_data['adaptability_productivity_question_3'] = $adaptability_productivity_data3;
            $avg_adaptability_productivity3 = intval($adaptability_productivity_data3);
        }else{
            $adaptability_productivity_data['adaptability_productivity_question_3'] = $adaptability_productivity_data3_emp;
            $avg_adaptability_productivity3 = intval($adaptability_productivity_data3_emp);
        }

        if($adaptability_productivity_data4){
            $adaptability_productivity_data['adaptability_productivity_question_4'] = $adaptability_productivity_data4;
            $avg_adaptability_productivity4 = intval($adaptability_productivity_data4);
        }else{
            $adaptability_productivity_data['adaptability_productivity_question_4'] = $adaptability_productivity_data4_emp;
            $avg_adaptability_productivity4 = intval($adaptability_productivity_data4_emp);
        }

        if($adaptability_productivity_data5){
            $adaptability_productivity_data['adaptability_productivity_question_5'] = $adaptability_productivity_data5;
            $avg_adaptability_productivity5 = intval($adaptability_productivity_data5);
        }else{
            $adaptability_productivity_data['adaptability_productivity_question_5'] = $adaptability_productivity_data5_emp;
            $avg_adaptability_productivity5 = intval($adaptability_productivity_data5_emp);
        }


        $adaptability_productivity_data['productivity_comments'] = $this->input->post('productivity_comments');

        $adaptabilityTotal = $avg_adaptability_productivity1 + $avg_adaptability_productivity2 + $avg_adaptability_productivity3 + $avg_adaptability_productivity4 + $avg_adaptability_productivity5; 
        $adaptabilityAvgTotal = $adaptabilityTotal / 5;
        $adaptability_productivity_data['productivity_emp_avg'] = number_format((float)$adaptabilityAvgTotal, 2, '.', '');


		/* Adaptability & Proactivity */

		/* initiative proactive */

		$initiative_proactive_data['employee_id'] = $this->input->post('main_employee_id');

        $initiative_proactive_data1 = $this->input->post('initiative_proactive_question_1_new');
        $initiative_proactive_data1_emp = $this->input->post('e_initiative_proactive_question_1');

        $initiative_proactive_data2 = $this->input->post('initiative_proactive_question_2_new');
        $initiative_proactive_data2_emp = $this->input->post('e_initiative_proactive_question_2');

        $initiative_proactive_data3 = $this->input->post('initiative_proactive_question_3_new');
        $initiative_proactive_data3_emp = $this->input->post('e_initiative_proactive_question_3');


        if($initiative_proactive_data1){
            $initiative_proactive_data['initiative_proactive_question_1'] = $initiative_proactive_data1;
            $avg_initiative_proactive1 = intval($initiative_proactive_data1);
        }else{
            $initiative_proactive_data['initiative_proactive_question_1'] = $initiative_proactive_data1_emp;
            $avg_initiative_proactive1 = intval($initiative_proactive_data1_emp);
        }

        if($initiative_proactive_data2){
            $initiative_proactive_data['initiative_proactive_question_2'] = $initiative_proactive_data2;
            $avg_initiative_proactive2 = intval($initiative_proactive_data2);
        }else{
            $initiative_proactive_data['initiative_proactive_question_2'] = $initiative_proactive_data2_emp;
            $avg_initiative_proactive2 = intval($initiative_proactive_data2_emp);
        }

        if($initiative_proactive_data3){
            $initiative_proactive_data['initiative_proactive_question_3'] = $initiative_proactive_data3;
            $avg_initiative_proactive3 = intval($initiative_proactive_data3);
        }else{
            $initiative_proactive_data['initiative_proactive_question_3'] = $initiative_proactive_data3_emp;
            $avg_initiative_proactive3 = intval($initiative_proactive_data3_emp);
        }


		$initiative_proactive_data['initiative_proactive_comments'] = $this->input->post('initiative_proactive_comments');

		$initiative_proactiveTotal = $avg_initiative_proactive1 + $avg_initiative_proactive2 + $avg_initiative_proactive3; 
		$initiative_proactiveAvgTotal = $initiative_proactiveTotal / 3;
		$initiative_proactive_data['p_initiative_proactive_emp_avg'] = number_format((float)$initiative_proactiveAvgTotal, 2, '.', '');

		/* initiative proactive */

		/* creativity problem solving */

		$creativity_problem_solving_data['employee_id'] = $this->input->post('main_employee_id');

        $creativity_problem_data1 = $this->input->post('creativity_problem_question_1_new');
        $creativity_problem_data1_emp = $this->input->post('e_creativity_problem_question_1');

        $creativity_problem_data2 = $this->input->post('creativity_problem_question_2_new');
        $creativity_problem_data2_emp = $this->input->post('e_creativity_problem_question_2');

        $creativity_problem_data3 = $this->input->post('creativity_problem_question_3_new');
        $creativity_problem_data3_emp = $this->input->post('e_creativity_problem_question_3');


        if($creativity_problem_data1){
            $creativity_problem_data['creativity_problem_question_1'] = $creativity_problem_data1;
            $avg_creativity_problem1 = intval($creativity_problem_data1);
        }else{
            $creativity_problem_data['creativity_problem_question_1'] = $creativity_problem_data1_emp;
            $avg_creativity_problem1 = intval($creativity_problem_data1_emp);
        }

        if($creativity_problem_data2){
            $creativity_problem_data['creativity_problem_question_2'] = $creativity_problem_data2;
            $avg_creativity_problem2 = intval($creativity_problem_data2);
        }else{
            $creativity_problem_data['creativity_problem_question_2'] = $creativity_problem_data2_emp;
            $avg_creativity_problem2 = intval($creativity_problem_data2_emp);
        }

        if($creativity_problem_data3){
            $creativity_problem_data['creativity_problem_question_3'] = $creativity_problem_data3;
            $avg_creativity_problem3 = intval($creativity_problem_data3);
        }else{
            $creativity_problem_data['creativity_problem_question_3'] = $creativity_problem_data3_emp;
            $avg_creativity_problem3 = intval($creativity_problem_data3_emp);
        }


		$creativity_problem_data['creativity_problem_solving_comments'] = $this->input->post('creativity_problem_solving_comments');

		$creativity_problem_solvingTotal = $avg_creativity_problem1 + $avg_creativity_problem2 + $avg_creativity_problem3; 
		$creativity_problem_solvingAvgTotal = $creativity_problem_solvingTotal / 3;
		$creativity_problem_data['p_creativity_problem_solving_emp_avg'] = number_format((float)$creativity_problem_solvingAvgTotal, 2, '.', '');

		/* creativity problem solving */
        $performance_data['evaluate_date_category'] = $this->input->post('evaluate_date_category');
        $performance_data['emp_performance_start_date'] = $this->input->post('performance_start_date');
        $performance_data['emp_performance_end_date'] = $this->input->post('performance_end_date');

        $res1 = $this->em->updateEmployeeCommunication($communication_data, $per_id);
        $res2 = $this->em->updateEmployeeKnowledgePerformance($knowledge_performance_data, $per_id);
        $res3 = $this->em->updateEmployeeQuality($quality_data, $per_id);
        $res4 = $this->em->updateEmployeeKnowledgeJob($knowledgejob_data, $per_id);
        $res5 = $this->em->updateEmployeeSoftware($software_data, $per_id);
        $res6 = $this->em->updateEmployeeReliabilityProfessionalism($reliability_data, $per_id);
        $res7 = $this->em->updateEmployeeTimeManagement($time_management_data, $per_id);
        $res8 = $this->em->updateEmployeeAdaptabilityProactivity($adaptability_productivity_data, $per_id);
        $res9 = $this->em->updateEmployeeInitiativeProactive($initiative_proactive_data, $per_id);
        $res10 = $this->em->updateEmployeeCreativityProblemSolving($creativity_problem_data, $per_id);
        $res11 = $this->em->updateSEPerformance($performance_data, $per_id);
     

		if($res1||$res2||$res3||$res4||$res5||$res6||$res7||$res8||$res9||$res10||$res11){
			$this->session->set_flashdata('emp_update_score_success', 'Your Score Updated Successfully!!!');
			return redirect('Employee/showEmpPerformance/'.$per_id);
		}else{
			$this->session->set_flashdata('emp_update_score_not', 'Please Try Again!');
			return redirect('Employee/showEmpPerformance/'.$per_id);
		}

    }

    public function getEvaluatedEmployee(){
        $config=[
			'base_url' => base_url('Employee/getEvaluatedEmployee'),
			'per_page' =>25,
			'total_rows' => $this->em->num_rows_EvaluatedEmployeeResult(),
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
		  $data['rerformancedata'] = $this->em->EvaluatedEmployeeList($config['per_page'],$this->uri->segment(3));
          $empID = $this->session->userdata('emp_login_id');
          $menu['empinfo'] = $this->em->getEmpInfo($empID);
          $data['empdata'] = $this->em->getEmpInfo($empID);

		  $this->load->view('employee/include/header');
		  $this->load->view('employee/include/menu', $menu);
		  $this->load->view('employee/evaluated-employee-list', $data);
		  $this->load->view('employee/include/footer');

    }

    public function ReEvaluateForm($id){

            $empID = $this->session->userdata('emp_login_id');
            $menu['empinfo'] = $this->em->getEmpInfo($empID);
			$data['re_evaluate'] = $this->em->ReEvaluatePerformanceInfo($id);
            $data['emp_avg'] = $this->am->getEmployeesAVG($id);

			$this->load->view('employee/include/header');
			$this->load->view('employee/include/menu', $menu);
			$this->load->view('employee/re-evaluate-details', $data);
			$this->load->view('employee/include/footer');
    }

    public function updateReEvalution($id){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empinfo'] = $this->em->ReEvaluatePerformanceInfo($id);
		$this->load->view('employee/include/header');
		$this->load->view('employee/include/menu', $menu);
		$this->load->view('employee/re-evaluate-update', $data);
		$this->load->view('employee/include/footer');
    }


    public function checkAndUpdate($id){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empdata'] = $this->em->getEmpDetails($empID);
        $data['empinfo'] = $this->em->getEmployeesPerformanceInfo($id);
        $data['check2'] = $this->em->checkVerifyAllScores($id);
        $data['emp_avg'] = $this->am->getEmployeesAVG($id);
		$this->load->view('employee/include/header');
		$this->load->view('employee/include/menu', $menu);
		$this->load->view('employee/check-update', $data);
		$this->load->view('employee/include/footer');
    }

    public function submitByEmployeePerformance(){
        $per_id = $this->input->post('performance_id');
        $res = $this->em->submitByEmployeeScore($per_id);
        if($res){
            $this->session->set_flashdata('emp_submit_score_success', 'Submit Score Successfully!!!');
			return redirect('Employee/showEmpPerformance/'.$per_id);
        }else{
            $this->session->set_flashdata('emp_submit_score_not', 'Please Try Again!');
			return redirect('Employee/showEmpPerformance/'.$per_id);
        }
    }

    public function submitReEvaluateEmp(){

        $per_id = $this->input->post('performance_id');
        $emp_id = $this->input->post('employee_id');

		/* communication */

		$communication_data['performance_id'] = $this->input->post('performance_id');

        $communication1 = $this->input->post('communication_question_1_new');
        $communication1_mgr = $this->input->post('m_communication_question_1');
        $communication1_emp = $this->input->post('e_communication_question_1');

        $communication2 = $this->input->post('communication_question_2_new');
        $communication2_mgr = $this->input->post('m_communication_question_2');
        $communication2_emp = $this->input->post('e_communication_question_2');

        $communication3 = $this->input->post('communication_question_3_new');
        $communication3_mgr = $this->input->post('m_communication_question_3');
        $communication3_emp = $this->input->post('e_communication_question_3');
        
        $communication4 = $this->input->post('communication_question_4_new');
        $communication4_mgr = $this->input->post('m_communication_question_4');
        $communication4_emp = $this->input->post('e_communication_question_4');

        $communication5 = $this->input->post('communication_question_5_new');
        $communication5_mgr = $this->input->post('m_communication_question_5');
        $communication5_emp = $this->input->post('e_communication_question_5');

        $communication_comments = $this->input->post('communication_comments');
        $communication_comments_old = $this->input->post('communication_comments_old');
        $communication_comments_manager = $this->input->post('m_communication_comments');
        

        if($communication1){
            $communication_data['m_communication_question_1'] = $communication1;
            $avg_communication1 = intval($communication1);
        }
        else{
           $communication_data['m_communication_question_1'] = $communication1_mgr;
           $avg_communication1 = intval($communication1_mgr);
        }

        if($communication2){
            $communication_data['m_communication_question_2'] = $communication2;
            $avg_communication2 = intval($communication2);
        }
        else{
            $communication_data['m_communication_question_2'] = $communication2_mgr;
            $avg_communication2 = intval($communication2_mgr);
        }

        if($communication3){
            $communication_data['m_communication_question_3'] = $communication3;
            $avg_communication3 = intval($communication3);
        }else{
            $communication_data['m_communication_question_3'] = $communication3_mgr;
            $avg_communication3 = intval($communication3_mgr);
        }

        if($communication4){
            $communication_data['m_communication_question_4'] = $communication4;
            $avg_communication4 = intval($communication4);
        }else{
            $communication_data['m_communication_question_4'] = $communication4_mgr;
            $avg_communication4 = intval($communication4_mgr);
        }

        if($communication5){
            $communication_data['m_communication_question_5'] = $communication5;
            $avg_communication5 = intval($communication5);
        }else{
            $communication_data['m_communication_question_5'] = $communication5_mgr;
            $avg_communication5 = intval($communication5_mgr);
        }

        if($communication_comments_manager){
            $communication_data['m_communication_comments'] = $communication_comments_manager;
        }else{
            $communication_data['m_communication_comments'] = $communication_comments_old;
        }

        if($avg_communication1||$avg_communication2||$avg_communication3||$avg_communication4||$avg_communication5){
            $communicationTotal = $avg_communication1 + $avg_communication2 + $avg_communication3 + $avg_communication4 + $avg_communication5;
		    $communicationAvgTotal = $communicationTotal / 5;
            $communication_data['m_communication_emp_avg'] = number_format((float)$communicationAvgTotal, 2, '.', '');
        }else{
            $communication_data['m_communication_emp_avg'] = $this->input->post('m_communication_emp_avg_old');
        }
        
		$this->em->updateEmployeeCommunication($communication_data, $per_id);

		/* communication */

        // /* Knowledge & Performance */

        $knowledge_performance_data['performance_id'] = $this->input->post('performance_id');

        $knowledge_performance1 = $this->input->post('knowledge_performance_question_1_new');
        $knowledge_performance1_mgr = $this->input->post('m_knowledge_performance_question_1');
        $knowledge_performance1_emp = $this->input->post('e_knowledge_performance_question_1');

        $knowledge_performance2 = $this->input->post('knowledge_performance_question_2_new');
        $knowledge_performance2_mgr = $this->input->post('m_knowledge_performance_question_2');
        $knowledge_performance2_emp = $this->input->post('e_knowledge_performance_question_2');

        $knowledge_performance3 = $this->input->post('knowledge_performance_question_3_new');
        $knowledge_performance3_mgr = $this->input->post('m_knowledge_performance_question_3');
        $knowledge_performance3_emp = $this->input->post('e_knowledge_performance_question_3');

        $knowledge_performance4 = $this->input->post('knowledge_performance_question_4_new');
        $knowledge_performance4_mgr = $this->input->post('m_knowledge_performance_question_4');
        $knowledge_performance4_emp = $this->input->post('e_knowledge_performance_question_4');

        $knowledge_performance5 = $this->input->post('knowledge_performance_question_5_new');
        $knowledge_performance5_mgr = $this->input->post('m_knowledge_performance_question_5');
        $knowledge_performance5_emp = $this->input->post('e_knowledge_performance_question_5');

        $knowledge_performance_comments = $this->input->post('knowledge_performance_comments');
        $knowledge_performance_comments_old = $this->input->post('knowledge_performance_comments_old');
        $knowledge_performance_comments_manager = $this->input->post('m_knowledge_performance_comments');


        if($knowledge_performance1){
            $knowledge_performance_data['m_knowledge_performance_question_1'] = $knowledge_performance1;
            $avg_knowledge_performance1 = intval($knowledge_performance1);
        }else{
           $knowledge_performance_data['m_knowledge_performance_question_1'] = $knowledge_performance1_mgr;
           $avg_knowledge_performance1 = intval($knowledge_performance1_mgr);
        }


        if($knowledge_performance2){
            $knowledge_performance_data['m_knowledge_performance_question_2'] = $knowledge_performance2;
            $avg_knowledge_performance2 = intval($knowledge_performance2);
        }else{
            $knowledge_performance_data['m_knowledge_performance_question_2'] = $knowledge_performance2_mgr;
            $avg_knowledge_performance2 = intval($knowledge_performance2_mgr);
        }


        if($knowledge_performance3){
            $knowledge_performance_data['m_knowledge_performance_question_3'] = $knowledge_performance3;
            $avg_knowledge_performance3 = intval($knowledge_performance3);
        }else{
            $knowledge_performance_data['m_knowledge_performance_question_3'] = $knowledge_performance3_mgr;
            $avg_knowledge_performance3 = intval($knowledge_performance3_mgr);
        }


        if($knowledge_performance4){
            $knowledge_performance_data['m_knowledge_performance_question_4'] = $knowledge_performance4;
            $avg_knowledge_performance4 = intval($knowledge_performance4);
        }else{
            $knowledge_performance_data['m_knowledge_performance_question_4'] = $knowledge_performance4_mgr;
            $avg_knowledge_performance4 = intval($knowledge_performance4_mgr);
        }


        if($knowledge_performance5){
            $knowledge_performance_data['m_knowledge_performance_question_5'] = $knowledge_performance5;
            $avg_knowledge_performance5 = intval($knowledge_performance5);
        }else{
            $knowledge_performance_data['m_knowledge_performance_question_5'] = $knowledge_performance5_mgr;
            $avg_knowledge_performance5 = intval($knowledge_performance5_mgr);
        }


        if($knowledge_performance_comments_manager){
            $knowledge_performance_data['m_knowledge_performance_comments'] = $knowledge_performance_comments_manager;
        }else{
            $knowledge_performance_data['m_knowledge_performance_comments'] = $knowledge_performance_comments_old;
        }


        if($avg_knowledge_performance1||$avg_knowledge_performance2||$avg_knowledge_performance3||$avg_knowledge_performance4||$avg_knowledge_performance5){
            $knowledge_performanceTotal = $avg_knowledge_performance1 + $avg_knowledge_performance2 + $avg_knowledge_performance3 + $avg_knowledge_performance4 + $avg_knowledge_performance5;
		    $knowledge_performanceAvgTotal = $knowledge_performanceTotal / 5;
            $knowledge_performance_data['m_knowledge_performance_emp_avg'] = number_format((float)$knowledge_performanceAvgTotal, 2, '.', '');
        }else{
            $knowledge_performance_data['m_knowledge_performance_emp_avg'] = $this->input->post('m_knowledge_performance_emp_avg_old');
        }

        $this->em->updateEmployeeKnowledgePerformance($knowledge_performance_data, $per_id);

        // /* end Knowledge & Performance */

		/* Quality & Organization */

		$quality_data['performance_id'] = $this->input->post('performance_id');

        $quality_question1 = $this->input->post('quality_question_1_new');
        $quality_question1_mgr = $this->input->post('m_quality_question_1');
        $quality_question1_emp = $this->input->post('e_quality_question_1');

        $quality_question2 = $this->input->post('quality_question_2_new');
        $quality_question2_mgr = $this->input->post('m_quality_question_2');
        $quality_question2_emp = $this->input->post('e_quality_question_2');

        $quality_question3 = $this->input->post('quality_question_3_new');
        $quality_question3_mgr = $this->input->post('m_quality_question_3');
        $quality_question3_emp = $this->input->post('e_quality_question_3');

        $quality_question4 = $this->input->post('quality_question_4_new');
        $quality_question4_mgr = $this->input->post('m_quality_question_4');
        $quality_question4_emp = $this->input->post('e_quality_question_4');

        $quality_question5 = $this->input->post('quality_question_5_new');
        $quality_question5_mgr = $this->input->post('m_quality_question_5');
        $quality_question5_emp = $this->input->post('e_quality_question_5');

        $quality_comments = $this->input->post('quality_comments');
        $quality_comments_old = $this->input->post('quality_comments_old');
        $quality_comments_manager = $this->input->post('m_quality_comments');


        if($quality_question1){
            $quality_data['m_quality_question_1'] = $quality_question1;
            $avg_quality1 = intval($quality_question1);
        }else{
            $quality_data['m_quality_question_1'] = $quality_question1_mgr;
            $avg_quality1 = intval($quality_question1_mgr);
        }

        if($quality_question2){
            $quality_data['m_quality_question_2'] = $quality_question2;
            $avg_quality2 = intval($quality_question2);
        }else{
            $quality_data['m_quality_question_2'] = $quality_question2_mgr;
            $avg_quality2 = intval($quality_question2_mgr);
        }

        if($quality_question3){
            $quality_data['m_quality_question_3'] = $quality_question3;
            $avg_quality3 = intval($quality_question3);
        }else{
            $quality_data['m_quality_question_3'] = $quality_question3_mgr;
            $avg_quality3 = intval($quality_question3_mgr);
        }

        if($quality_question4){
            $quality_data['m_quality_question_4'] = $quality_question4;
            $avg_quality4 = intval($quality_question4);
        }else{
            $quality_data['m_quality_question_4'] = $quality_question4_mgr;
            $avg_quality4 = intval($quality_question4_mgr);
        }

        if($quality_question5){
            $quality_data['m_quality_question_5'] = $quality_question5;
            $avg_quality5 = intval($quality_question5);
        }else{
            $quality_data['m_quality_question_5'] = $quality_question5_mgr;
            $avg_quality5 = intval($quality_question5_mgr);
        }

        if($quality_comments_manager){
            $quality_data['m_quality_comments'] = $quality_comments_manager;
        }else{
            $quality_data['m_quality_comments'] = $quality_comments_old;
        }

        if($avg_quality1||$avg_quality2||$avg_quality3||$avg_quality4||$avg_quality5){
            $qualityTotal = $avg_quality1 + $avg_quality2 + $avg_quality3 + $avg_quality4 + $avg_quality5;
		    $qualityAvgTotal = $qualityTotal / 5;
            $quality_data['m_quality_emp_avg'] = number_format((float)$qualityAvgTotal, 2, '.', '');
        }else{
            $quality_data['m_quality_emp_avg'] = $this->input->post('m_quality_emp_avg_old');
        }

		$this->em->updateEmployeeQuality($quality_data, $per_id);

		/* Quality & Organization */

		/* knowledge & job */

		$knowledge_data['performance_id'] = $this->input->post('performance_id');

        $knowledge_data1 = $this->input->post('knowledgejob_question_1_new');
        $knowledge_data1_mgr = $this->input->post('m_knowledgejob_question_1');
        $knowledge_data1_emp = $this->input->post('e_knowledgejob_question_1');

        $knowledge_data2 = $this->input->post('knowledgejob_question_2_new');
        $knowledge_data2_mgr = $this->input->post('m_knowledgejob_question_2');
        $knowledge_data2_emp = $this->input->post('e_knowledgejob_question_2');

        $knowledge_data3 = $this->input->post('knowledgejob_question_3_new');
        $knowledge_data3_mgr = $this->input->post('m_knowledgejob_question_3');
        $knowledge_data3_emp = $this->input->post('e_knowledgejob_question_3');

        $knowledge_comments = $this->input->post('knowledge_comments');
        $knowledge_comments_old = $this->input->post('knowledge_comments_old');
        $knowledge_comments_manager = $this->input->post('m_knowledge_comments');


        if($knowledge_data1){
            $knowledge_data['m_knowledge_standards_and_portfolio'] = $knowledge_data1;
            $avg_knowledge1 = intval($knowledge_data1);
        }else{
            $knowledge_data['m_knowledge_standards_and_portfolio'] = $knowledge_data1_mgr;
            $avg_knowledge1 = intval($knowledge_data1_mgr);
        }

        if($knowledge_data2){
            $knowledge_data['m_knowledge_bim_project_requirements'] = $knowledge_data2;
            $avg_knowledge2 = intval($knowledge_data2);
        }else{
            $knowledge_data['m_knowledge_bim_project_requirements'] = $knowledge_data2_mgr;
            $avg_knowledge2 = intval($knowledge_data2_mgr);
        }

        if($knowledge_data3){
            $knowledge_data['m_knowledge_of_the_construction_industry'] = $knowledge_data3;
            $avg_knowledge3 = intval($knowledge_data3);
        }else{
            $knowledge_data['m_knowledge_of_the_construction_industry'] = $knowledge_data3_mgr;
            $avg_knowledge3 = intval($knowledge_data3_mgr);
        }

        if($knowledge_comments_manager){
            $knowledge_data['m_knowledge_comments'] = $knowledge_comments_manager;
        }else{
            $knowledge_data['m_knowledge_comments'] = $knowledge_comments_old;
        }


        if($avg_knowledge1||$avg_knowledge2||$avg_knowledge3){
            $knowledgeTotal = $avg_knowledge1 + $avg_knowledge2 + $avg_knowledge3;
		    $knowledgeAvgTotal = $knowledgeTotal / 3;
            $knowledge_data['m_knowledge_emp_avg'] = number_format((float)$knowledgeAvgTotal, 2, '.', '');
        }else{
            $knowledge_data['m_knowledge_emp_avg'] = $this->input->post('m_knowledge_emp_avg_old');
        }

    

		$this->em->updateEmployeeKnowledgeJob($knowledge_data, $per_id);

		/* knowledge & job */

		/* Knowledge of Software */

		$software_data['performance_id'] = $this->input->post('performance_id');

        $software_question_1 = $this->input->post('software_question_1_new');
        $software_question_1_mgr = $this->input->post('m_software_question_1');
        $software_question_1_emp = $this->input->post('software_question_1');

        $software_question_2 = $this->input->post('software_question_2_new');
        $software_question_2_mgr = $this->input->post('m_software_question_2');
        $software_question_2_emp = $this->input->post('e_software_question_2');

        $software_question_3 = $this->input->post('software_question_3_new');
        $software_question_3_mgr = $this->input->post('m_software_question_3');
        $software_question_3_emp = $this->input->post('e_software_question_3');

        $software_question_4 = $this->input->post('software_question_4_new');
        $software_question_4_mgr = $this->input->post('m_software_question_4');
        $software_question_4_emp = $this->input->post('e_software_question_4');

        $software_question_5 = $this->input->post('software_question_5_new');
        $software_question_5_mgr = $this->input->post('m_software_question_5');
        $software_question_5_emp = $this->input->post('e_software_question_5');

        $software_comments = $this->input->post('software_comments');
        $software_comments_old = $this->input->post('software_comments_old');
        $software_comments_manager = $this->input->post('m_software_comments');


        if($software_question_1){
            $software_data['m_software_question_1'] = $software_question_1;
            $avg_software1 = intval($software_question_1);
        }else{
            $software_data['m_software_question_1'] = $software_question_1_mgr;
            $avg_software1 = intval($software_question_1_mgr);
        }

        if($software_question_2){
            $software_data['m_software_question_2'] = $software_question_2;
            $avg_software2 = intval($software_question_2);
        }else{
            $software_data['m_software_question_2'] = $software_question_2_mgr;
            $avg_software2 = intval($software_question_2_mgr);
        }

        if($software_question_3){
            $software_data['m_software_question_3'] = $software_question_3;
            $avg_software3 = intval($software_question_3);
        }else{
            $software_data['m_software_question_3'] = $software_question_3_mgr;
            $avg_software3 = intval($software_question_3_mgr);
        }

        if($software_question_4){
            $software_data['m_software_question_4'] = $software_question_4;
            $avg_software4 = intval($software_question_4);
        }else{
            $software_data['m_software_question_4'] = $software_question_4_mgr;
            $avg_software4 = intval($software_question_4_mgr);
        }

        if($software_question_5){
            $software_data['m_software_question_5'] = $software_question_5;
            $avg_software5 = intval($software_question_5);
        }else{
            $software_data['m_software_question_5'] = $software_question_5_mgr;
            $avg_software5 = intval($software_question_5_mgr);
        }
       
        if($software_comments_manager){
            $software_data['m_software_comments'] = $software_comments_manager;
        }else{
            $software_data['m_software_comments'] = $software_comments_old;
        }

        if($avg_software1||$avg_software2||$avg_software3||$avg_software4||$avg_software5){
            $softwareTotal = $avg_software1 + $avg_software2 + $avg_software3 + $avg_software4 + $avg_software5;
		    $softwareAvgTotal = $softwareTotal / 5;
            $software_data['m_software_emp_avg'] = number_format((float)$softwareAvgTotal, 2, '.', '');
        }else{
            $software_data['m_software_emp_avg'] = $this->input->post('m_software_emp_avg_old');
        }

		$this->em->updateEmployeeSoftware($software_data, $per_id);

		/* Knowledge of Software */

        /* Reliability & Professionalism */


        $reliability_data['performance_id'] = $this->input->post('performance_id');

        $reliability_question_1 = $this->input->post('reliability_question_1_new');
        $reliability_question_1_mgr = $this->input->post('m_reliability_question_1');
        $reliability_question_1_emp = $this->input->post('e_reliability_question_1');

        $reliability_question_2 = $this->input->post('reliability_question_2_new');
        $reliability_question_2_mgr = $this->input->post('m_reliability_question_2');
        $reliability_question_2_emp = $this->input->post('e_reliability_question_2');

        $reliability_question_3 = $this->input->post('reliability_question_3_new');
        $reliability_question_3_mgr = $this->input->post('m_reliability_question_3');
        $reliability_question_3_emp = $this->input->post('e_reliability_question_3');

        $reliability_question_4 = $this->input->post('reliability_question_4_new');
        $reliability_question_4_mgr = $this->input->post('m_reliability_question_4');
        $reliability_question_4_emp = $this->input->post('e_reliability_question_4');

        $reliability_question_5 = $this->input->post('reliability_question_5_new');
        $reliability_question_5_mgr = $this->input->post('m_reliability_question_5');
        $reliability_question_5_emp = $this->input->post('e_reliability_question_5');

        $reliability_question_6 = $this->input->post('reliability_question_6_new');
        $reliability_question_6_mgr = $this->input->post('m_reliability_question_6');
        $reliability_question_6_emp = $this->input->post('e_reliability_question_6');

        $reliability_comments = $this->input->post('reliability_comments');
        $reliability_comments_old = $this->input->post('reliability_comments_old');
        $reliability_comments_manager = $this->input->post('m_reliability_comments');   

        
        if($reliability_question_1){
            $reliability_data['m_reliability_question_1'] = $reliability_question_1;
            $avg_reliability1 = intval($reliability_question_1);
        }else{
            $reliability_data['m_reliability_question_1'] = $reliability_question_1_mgr;
            $avg_reliability1 = intval($reliability_question_1_mgr);
        }

        if($reliability_question_2){
            $reliability_data['m_reliability_question_2'] = $reliability_question_2;
            $avg_reliability2 = intval($reliability_question_2);
        }else{
            $reliability_data['m_reliability_question_2'] = $reliability_question_2_mgr;
            $avg_reliability2 = intval($reliability_question_2_mgr);
        }

        if($reliability_question_3){
            $reliability_data['m_reliability_question_3'] = $reliability_question_3;
            $avg_reliability3 = intval($reliability_question_3);
        }else{
            $reliability_data['m_reliability_question_3'] = $reliability_question_3_mgr;
            $avg_reliability3 = intval($reliability_question_3_mgr);
        }

        if($reliability_question_4){
            $reliability_data['m_reliability_question_4'] = $reliability_question_4;
            $avg_reliability4 = intval($reliability_question_4);
        }else{
            $reliability_data['m_reliability_question_4'] = $reliability_question_4_mgr;
            $avg_reliability4 = intval($reliability_question_4_mgr);
        }

        if($reliability_question_5){
            $reliability_data['m_reliability_question_5'] = $reliability_question_5;
            $avg_reliability5 = intval($reliability_question_5);
        }else{
            $reliability_data['m_reliability_question_5'] = $reliability_question_5_mgr;
            $avg_reliability5 = intval($reliability_question_5_mgr);
        }

        if($reliability_question_6){
            $reliability_data['m_reliability_question_6'] = $reliability_question_6;
            $avg_reliability6 = intval($reliability_question_6);
        }else{
            $reliability_data['m_reliability_question_6'] = $reliability_question_6_mgr;
            $avg_reliability6 = intval($reliability_question_6_mgr);
        }

        if($reliability_comments_manager){
            $reliability_data['m_reliability_comments'] = $reliability_comments_manager;
        }else{
            $reliability_data['m_reliability_comments'] = $reliability_comments_old;
        }


        if($avg_reliability1||$avg_reliability2||$avg_reliability3||$avg_reliability4||$avg_reliability5||$avg_reliability6 ){
            $reliabilityTotal = $avg_reliability1 + $avg_reliability2 + $avg_reliability3 + $avg_reliability4 + $avg_reliability5 + $avg_reliability6;
		    $reliabilityAvgTotal = $reliabilityTotal / 6;
            $reliability_data['m_reliability_emp_avg'] = number_format((float)$reliabilityAvgTotal, 2, '.', '');
        }else{
            $reliability_data['m_reliability_emp_avg'] = $this->input->post('m_reliability_emp_avg_old');
        }

        $this->em->updateEmployeeReliabilityProfessionalism($reliability_data, $per_id);


        /* Reliability & Professionalism */


		/* Task & Time Management */

		$time_management_data['performance_id'] = $this->input->post('performance_id');

        $time_management_question_1 = $this->input->post('time_management_question_1_new');
        $time_management_question_1_mgr = $this->input->post('m_time_management_question_1');
        $time_management_question_1_emp = $this->input->post('e_time_management_question_1');

        $time_management_question_2 = $this->input->post('time_management_question_2_new');
        $time_management_question_2_mgr = $this->input->post('m_time_management_question_2');
        $time_management_question_2_emp = $this->input->post('e_time_management_question_2');

        $time_management_question_3 = $this->input->post('time_management_question_3_new');
        $time_management_question_3_mgr = $this->input->post('m_time_management_question_3');
        $time_management_question_3_emp = $this->input->post('e_time_management_question_3');

        $time_management_question_4 = $this->input->post('time_management_question_4_new');
        $time_management_question_4_mgr = $this->input->post('m_time_management_question_4');
        $time_management_question_4_emp = $this->input->post('e_time_management_question_4');

        $time_management_question_5 = $this->input->post('time_management_question_5_new');
        $time_management_question_5_mgr = $this->input->post('m_time_management_question_5');
        $time_management_question_5_emp = $this->input->post('e_time_management_question_5');

        $time_management_comments = $this->input->post('time_management_comments');
        $time_management_comments_old = $this->input->post('time_management_comments_old');
        $time_management_comments_manager = $this->input->post('m_time_management_comments');
        

        if($time_management_question_1){
            $time_management_data['m_time_management_question_1'] = $time_management_question_1;
            $avg_time_management1 = intval($time_management_question_1);
        }else{
            $time_management_data['m_time_management_question_1'] = $time_management_question_1_mgr;
            $avg_time_management1 = intval($time_management_question_1_mgr);
        }

        if($time_management_question_2){
            $time_management_data['m_time_management_question_2'] = $time_management_question_2;
            $avg_time_management2 = intval($time_management_question_2);
        }else{
            $time_management_data['m_time_management_question_2'] = $time_management_question_2_mgr;
            $avg_time_management2 = intval($time_management_question_2_mgr);
        }

        if($time_management_question_3){
            $time_management_data['m_time_management_question_3'] = $time_management_question_3;
            $avg_time_management3 = intval($time_management_question_3);
        }else{
            $time_management_data['m_time_management_question_3'] = $time_management_question_3_mgr;
            $avg_time_management3 = intval($time_management_question_3_mgr);
        }

        if($time_management_question_4){
            $time_management_data['m_time_management_question_4'] = $time_management_question_4;
            $avg_time_management4 = intval($time_management_question_4);
        }else{
            $time_management_data['m_time_management_question_4'] = $time_management_question_4_mgr;
            $avg_time_management4 = intval($time_management_question_4_mgr);
        }

        if($time_management_question_5){
            $time_management_data['m_time_management_question_5'] = $time_management_question_5;
            $avg_time_management5 = intval($time_management_question_5);
        }else{
            $time_management_data['m_time_management_question_5'] = $time_management_question_5_mgr;
            $avg_time_management5 = intval($time_management_question_5_mgr);
        }

        if($time_management_comments_manager){
            $time_management_data['m_time_management_comments'] = $time_management_comments_manager;
        }else{
            $time_management_data['m_time_management_comments'] = $time_management_comments_old;
        }
        
        if($avg_time_management1||$avg_time_management2||$avg_time_management3||$avg_time_management4||$avg_time_management5){
            $time_managementTotal = $avg_time_management1 + $avg_time_management2 + $avg_time_management3 + $avg_time_management4 + $avg_time_management5;
		    $time_managementAvgTotal = $time_managementTotal / 5;
            $time_management_data['m_time_management_emp_avg'] = number_format((float)$time_managementAvgTotal, 2, '.', '');
        }else{
            $time_management_data['m_time_management_emp_avg'] = $this->input->post('m_time_management_emp_avg_old');
        }

		$this->em->updateEmployeeTimeManagement($time_management_data, $per_id);

		/* Task & Time Management */

		/*  Adaptability & Proactivity */

		$adaptability_data['performance_id'] = $this->input->post('performance_id');

        $adaptability_productivity_question_1 = $this->input->post('adaptability_productivity_question_1_new');
        $adaptability_productivity_question_1_mgr = $this->input->post('m_adaptability_productivity_question_1');
        $adaptability_productivity_question_1_emp = $this->input->post('e_adaptability_productivity_question_1');


        $adaptability_productivity_question_2 = $this->input->post('adaptability_productivity_question_2_new');
        $adaptability_productivity_question_2_mgr = $this->input->post('m_adaptability_productivity_question_2');
        $adaptability_productivity_question_2_emp = $this->input->post('e_adaptability_productivity_question_2');


        $adaptability_productivity_question_3 = $this->input->post('adaptability_productivity_question_3_new');
        $adaptability_productivity_question_3_mgr = $this->input->post('m_adaptability_productivity_question_3');
        $adaptability_productivity_question_3_emp = $this->input->post('e_adaptability_productivity_question_3');


        $adaptability_productivity_question_4 = $this->input->post('adaptability_productivity_question_4_new');
        $adaptability_productivity_question_4_mgr = $this->input->post('m_adaptability_productivity_question_4');
        $adaptability_productivity_question_4_emp = $this->input->post('e_adaptability_productivity_question_4');


        $adaptability_productivity_question_5 = $this->input->post('adaptability_productivity_question_5_new');
        $adaptability_productivity_question_5_mgr = $this->input->post('m_adaptability_productivity_question_5');
        $adaptability_productivity_question_5_emp = $this->input->post('e_adaptability_productivity_question_5');
        

        $adaptability_productivity_comments = $this->input->post('productivity_comments');
        $adaptability_productivity_comments_old = $this->input->post('productivity_comments_old');
        $adaptability_productivity_comments_manager = $this->input->post('m_productivity_comments');


        if($adaptability_productivity_question_1){
            $productivity_data['m_adaptability_productivity_question_1'] = $adaptability_productivity_question_1;
            $avg_productivity1 = intval($adaptability_productivity_question_1);
        }else{
            $productivity_data['m_adaptability_productivity_question_1'] = $adaptability_productivity_question_1_mgr;
            $avg_productivity1 = intval($adaptability_productivity_question_1_mgr);
        }

        if($adaptability_productivity_question_2){
            $productivity_data['m_adaptability_productivity_question_2'] = $adaptability_productivity_question_2;
            $avg_productivity2 = intval($adaptability_productivity_question_2);
        }else{
            $productivity_data['m_adaptability_productivity_question_2'] = $adaptability_productivity_question_2_mgr;
            $avg_productivity2 = intval($adaptability_productivity_question_2_mgr);
        }

        if($adaptability_productivity_question_3){
            $productivity_data['m_adaptability_productivity_question_3'] = $adaptability_productivity_question_3;
            $avg_productivity3 = intval($adaptability_productivity_question_3);
        }else{
            $productivity_data['m_adaptability_productivity_question_3'] = $adaptability_productivity_question_3_mgr;
            $avg_productivity3 = intval($adaptability_productivity_question_3_mgr);
        }

        if($adaptability_productivity_question_4){
            $productivity_data['m_adaptability_productivity_question_4'] = $adaptability_productivity_question_4;
            $avg_productivity4 = intval($adaptability_productivity_question_4);
        }else{
            $productivity_data['m_adaptability_productivity_question_4'] = $adaptability_productivity_question_4_mgr;
            $avg_productivity4 = intval($adaptability_productivity_question_4_mgr);
        }

        if($adaptability_productivity_question_5){
            $productivity_data['m_adaptability_productivity_question_5'] = $adaptability_productivity_question_5;
            $avg_productivity5 = intval($adaptability_productivity_question_5);
        }else{
            $productivity_data['m_adaptability_productivity_question_5'] = $adaptability_productivity_question_5_mgr;
            $avg_productivity5 = intval($adaptability_productivity_question_5_mgr);
        }

        if($adaptability_productivity_comments_manager){
            $productivity_data['m_productivity_comments'] = $adaptability_productivity_comments_manager;
        }else{
            $productivity_data['m_productivity_comments'] = $adaptability_productivity_comments_old;
        }

        if($avg_productivity1||$avg_productivity2||$avg_productivity3||$avg_productivity4||$avg_productivity5){
            $productivityTotal = $avg_productivity1 + $avg_productivity2 + $avg_productivity3 + $avg_productivity4 + $avg_productivity5;
		    $productivityAvgTotal = $productivityTotal / 5;
            $productivity_data['m_productivity_emp_avg'] = number_format((float)$productivityAvgTotal, 2, '.', '');
        }else{
            $productivity_data['m_productivity_emp_avg'] = $this->input->post('m_productivity_emp_avg_old');
        }

		$this->em->updateEmployeeAdaptabilityProactivity($productivity_data, $per_id);

		/*  Adaptability & Proactivity */

		/* initiative proactive */

		$initiative_proactive_data['performance_id'] = $this->input->post('performance_id');

        $initiative_proactive1 = $this->input->post('initiative_proactive_question_1_new');
        $initiative_proactive1_mgr = $this->input->post('m_initiative_proactive_question_1');
        $initiative_proactive1_emp = $this->input->post('e_initiative_proactive_question_1');

        $initiative_proactive2 = $this->input->post('initiative_proactive_question_2_new');
        $initiative_proactive2_mgr = $this->input->post('m_initiative_proactive_question_2');
        $initiative_proactive2_emp = $this->input->post('e_initiative_proactive_question_2');

        $initiative_proactive3 = $this->input->post('initiative_proactive_question_3_new');
        $initiative_proactive3_mgr = $this->input->post('m_initiative_proactive_question_3');
        $initiative_proactive3_emp = $this->input->post('e_initiative_proactive_question_3');
        
        $initiative_proactive_comments = $this->input->post('initiative_proactive_comments');
        $initiative_proactive_comments_old = $this->input->post('initiative_proactive_comments_old');
        $initiative_proactive_comments_manager = $this->input->post('m_initiative_proactive_comments');
        

        if($initiative_proactive1){
            $initiative_proactive_data['m_initiative_proactive_question_1'] = $initiative_proactive1;
            $avg_initiative_proactive1 = intval($initiative_proactive1);
        }else{
            $initiative_proactive_data['m_initiative_proactive_question_1'] = $initiative_proactive1_mgr;
            $avg_initiative_proactive1 = intval($initiative_proactive1_mgr);
        }

        if($initiative_proactive2){
            $initiative_proactive_data['m_initiative_proactive_question_2'] = $initiative_proactive2;
            $avg_initiative_proactive2 = intval($initiative_proactive2);
        }else{
            $initiative_proactive_data['m_initiative_proactive_question_2'] = $initiative_proactive2_mgr;
            $avg_initiative_proactive2 = intval($initiative_proactive2_mgr);
        }

        if($initiative_proactive3){
            $initiative_proactive_data['m_initiative_proactive_question_3'] = $initiative_proactive3;
            $avg_initiative_proactive3 = intval($initiative_proactive3);
        }else{
            $initiative_proactive_data['m_initiative_proactive_question_3'] = $initiative_proactive3_mgr;
            $avg_initiative_proactive3 = intval($initiative_proactive3_mgr);
        }


        if($initiative_proactive_comments_manager){
            $initiative_proactive_data['m_initiative_proactive_comments'] = $initiative_proactive_comments_manager;
        }else{
            $initiative_proactive_data['m_initiative_proactive_comments'] = $initiative_proactive_comments_old;
        }

        if($avg_initiative_proactive1||$avg_initiative_proactive2||$avg_initiative_proactive3){
            $initiative_proactiveTotal = $avg_initiative_proactive1 + $avg_initiative_proactive2 + $avg_initiative_proactive3;
		    $initiative_proactiveAvgTotal = $initiative_proactiveTotal / 3;
            $initiative_proactive_data['m_p_initiative_proactive_emp_avg'] = number_format((float)$initiative_proactiveAvgTotal, 2, '.', '');
        }else{
            $initiative_proactive_data['m_p_initiative_proactive_emp_avg'] = $this->input->post('m_p_initiative_proactive_emp_avg_old');
        }

		$this->em->updateEmployeeInitiativeProactive($initiative_proactive_data, $per_id);

		/* initiative proactive */

		/* creativity problem solving */

		$creativity_problem_solving_data['performance_id'] = $this->input->post('performance_id');

        $creativity_problem1 = $this->input->post('creativity_problem_question_1_new');
        $creativity_problem1_mgr = $this->input->post('m_creativity_problem_question_1');
        $creativity_problem1_emp = $this->input->post('e_creativity_problem_question_1');

        $creativity_problem2 = $this->input->post('creativity_problem_question_2_new');
        $creativity_problem2_mgr = $this->input->post('m_creativity_problem_question_2');
        $creativity_problem2_emp = $this->input->post('e_creativity_problem_question_2');

        $creativity_problem3 = $this->input->post('creativity_problem_question_3_new');
        $creativity_problem3_mgr = $this->input->post('m_creativity_problem_question_3');
        $creativity_problem3_emp = $this->input->post('e_creativity_problem_question_3');

        $creativity_problem_solving_comments = $this->input->post('creativity_problem_solving_comments');
        $creativity_problem_solving_comments_old = $this->input->post('creativity_problem_solving_comments_old');
        $creativity_problem_solving_comments_manager = $this->input->post('m_creativity_problem_solving_comments');

        if($creativity_problem1){
            $creativity_problem_data['m_creativity_problem_question_1'] = $creativity_problem1;
            $avg_creativity_problem1 = intval($creativity_problem1);
        }else{
            $creativity_problem_data['m_creativity_problem_question_1'] = $creativity_problem1_mgr;
            $avg_creativity_problem1 = intval($creativity_problem1_mgr);
        }

        if($creativity_problem2){
            $creativity_problem_data['m_creativity_problem_question_2'] = $creativity_problem2;
            $avg_creativity_problem2 = intval($creativity_problem2);
        }else{
            $creativity_problem_data['m_creativity_problem_question_2'] = $creativity_problem2_mgr;
            $avg_creativity_problem2 = intval($creativity_problem2_mgr);
        }

        if($creativity_problem3){
            $creativity_problem_data['m_creativity_problem_question_3'] = $creativity_problem3;
            $avg_creativity_problem3 = intval($creativity_problem3);
        }else{
            $creativity_problem_data['m_creativity_problem_question_3'] = $creativity_problem3_mgr;
            $avg_creativity_problem3 = intval($creativity_problem3_mgr);
        }

        if($creativity_problem_solving_comments_manager){
            $creativity_problem_data['m_creativity_problem_solving_comments'] = $creativity_problem_solving_comments_manager;
        }else{
            $creativity_problem_data['m_creativity_problem_solving_comments'] = $creativity_problem_solving_comments_old;
        }

        if($avg_creativity_problem1||$avg_creativity_problem2||$avg_creativity_problem3){
            $creativity_problem_solvingTotal = $avg_creativity_problem1 + $avg_creativity_problem2 + $avg_creativity_problem3;
		    $creativity_problem_solvingAvgTotal = $creativity_problem_solvingTotal / 3;
            $creativity_problem_data['m_p_creativity_problem_solving_emp_avg'] = number_format((float)$creativity_problem_solvingAvgTotal, 2, '.', '');
        }else{
            $creativity_problem_data['m_p_creativity_problem_solving_emp_avg'] = $this->input->post('m_p_creativity_problem_solving_emp_avg_old');
        }

		$this->em->updateEmployeeCreativityProblemSolving($creativity_problem_data, $per_id);

		/* creativity problem solving */

		$sumTotal = $communication_data['m_communication_emp_avg'] + $knowledge_performance_data['m_knowledge_performance_emp_avg'] + $quality_data['m_quality_emp_avg'] + $knowledge_data['m_knowledge_emp_avg'] + $software_data['m_software_emp_avg'] +  $reliability_data['m_reliability_emp_avg'] + $time_management_data['m_time_management_emp_avg'] + $productivity_data['m_productivity_emp_avg'] + $initiative_proactive_data['m_p_initiative_proactive_emp_avg'] + $creativity_problem_data['m_p_creativity_problem_solving_emp_avg']; 
		$avgTotal = $sumTotal / 10;
		$data['total_emp_avg'] = number_format((float)$avgTotal, 2, '.', '');

		$res = $this->em->updateEmpMainAvg($data, $per_id);

		if($res){
			$this->session->set_flashdata('emp_update_score_success', 'Submit Score Successfully!!!');
			return redirect('Employee/ReEvaluateForm/'.$per_id);
		}else{
			$this->session->set_flashdata('emp_update_score_not', 'Please Try Again!');
			return redirect('Employee/ReEvaluateForm/'.$per_id);
		}

    }

    public function addEmpProfileView(){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);
        $data['empdata'] = $this->am->getEmpDetails($empID);
        $data['departments'] = $this->am->getEmpDepartment();
        $data['empinfo'] = $this->am->getEmployeesPerformanceInfo($empID);
        $data['salary'] = $this->em->getEmpSalary($empID);
        $data['personality'] = $this->em->getEmpPersonality($empID);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/add-employee-profile', $data);
        $this->load->view('employee/include/footer', $data);
    }

    public function addEMPProfile(){

        $data = $this->input->post();

        // Employee Skill Section

        $skills['employee_id'] = $this->input->post('employee_id');
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

        // End Employee Skill Section

        // Employee Part / Full

        $status['employee_id'] = $this->input->post('employee_id');
        $status['ed_part_full'] = $this->input->post('ed_part_full');


        // End Employee Part / Full

        $goals['employee_id'] = $this->input->post('employee_id');
        $goals['goals_type'] = $this->input->post('goals_type');
        $goals['goals_description'] = $this->input->post('goals_description');


        // Employee Experience

        $experience['employee_id'] = $this->input->post('employee_id');
        $experience['ed_experience'] = $this->input->post('ed_experience');

        // End Employee Experience

        // Employee Qualification

        $qualification['employee_id'] = $this->input->post('employee_id');
        $qualification['ed_qualification_text'] = $this->input->post('ed_qualification_text');

        // End Employee Qualification

        // Employee Individual Profile

        $ipdata['employee_id'] = $this->input->post('employee_id');
        $ipdata['ed_individual_profile_email'] = $this->input->post('ed_individual_profile_email');
        $ipdata['ed_individual_profile_contact'] = $this->input->post('ed_individual_profile_contact');
        $ipdata['ed_individual_profile_age'] = $this->input->post('ed_individual_profile_age');
        $ipdata['ed_individual_profile_intrest'] = $this->input->post('ed_individual_profile_intrest');
        $ipdata['ed_individual_profile_address'] = $this->input->post('ed_individual_profile_address');
        $ipdata['ed_individual_profile_city'] = $this->input->post('ed_individual_profile_city');

        if($this->input->post('ed_individual_profile_country')){
            $ipdata['ed_individual_profile_country'] = $this->input->post('ed_individual_profile_country');
        }else{
            $ipdata['ed_individual_profile_country'] = $this->input->post('old_country');
        }
        
        $ipdata['ed_individual_profile_movie'] = $this->input->post('ed_individual_profile_movie');
        $ipdata['ed_individual_profile_book'] = $this->input->post('ed_individual_profile_book');
        $ipdata['ed_individual_profile_tvshow'] = $this->input->post('ed_individual_profile_tvshow');
        $ipdata['ed_individual_profile_color'] = $this->input->post('ed_individual_profile_color');
        $ipdata['ed_individual_profile_music'] = $this->input->post('ed_individual_profile_music');
        $ipdata['ed_individual_profile_food'] = $this->input->post('ed_individual_profile_food');
        $ipdata['ed_individual_profile_date'] = $this->input->post('ed_individual_profile_date');

        $ipdata['ed_submit_status'] = 2;


        // End Employee Individual Profile

        // Employee Personality

         $personality['employee_id'] = $this->input->post('employee_id');
         $personality['ed_personality_type'] = $this->input->post('ed_personality_type');
         $personality['ed_personality_role'] = $this->input->post('ed_personality_role');
         $personality['ed_personality_code'] = $this->input->post('ed_personality_code');
         $personality['ed_personality_strategy'] = $this->input->post('ed_personality_strategy');

         $personality['min_value_mind'] = $this->input->post('min_value_mind');
         $personality['max_value_mind'] = $this->input->post('max_value_mind');

         $personality['min_value_energy'] = $this->input->post('min_value_energy');
         $personality['max_value_energy'] = $this->input->post('max_value_energy');

         $personality['min_value_nature'] = $this->input->post('min_value_nature');
         $personality['max_value_nature'] = $this->input->post('max_value_nature');

         $personality['min_value_tactics'] = $this->input->post('min_value_tactics');
         $personality['max_value_tactics'] = $this->input->post('max_value_tactics');

         $personality['min_value_identity'] = $this->input->post('min_value_identity');
         $personality['max_value_identity'] = $this->input->post('max_value_identity');


        // End Employee Personality

        // Employee Software Expertise

        $software['employee_id'] = $this->input->post('employee_id');

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

        echo '<pre>';
        print_r($ipdata);
        echo '</pre>';
        exit;

        $this->em->postEMPSkills($skills);
        $this->em->postEMPStatus($status);
        $this->em->postEMPGoals($goals);
        $this->em->postEMPExperience($experience);
        $this->em->postEMPSalary($salary);
        $this->em->postEMPQualification($qualification);
        $this->em->postEMPIndividualProfile($ipdata);
        $this->em->postEMPPersonality($personality);
        $this->em->postEMPSoftwareExpertise($software);

       // End Employee Software Expertise

       $this->session->set_flashdata('emp_profile_added_success', 'Your profile submitted successfully!!!');
	   return redirect('Employee/empDetailsPage');

    }

    public function updateProfileEMP(){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);

        $data['empdata'] = $this->am->getEmpDetails($empID);
        $data['departments'] = $this->am->getEmpDepartment();
        $data['empinfo'] = $this->am->getEmployeesPerformanceInfo($empID);

        $data['skills'] = $this->em->getEmpSkills($empID);
        $data['status'] = $this->em->getEmpStatus($empID);
        $data['goal'] = $this->em->getEmpGoals($empID);
        $data['experience'] = $this->em->getEmpExperience($empID);
        $data['salary'] = $this->em->getEmpSalary($empID);
        $data['qualification'] = $this->em->getEmpQualification($empID);
        $data['individual'] = $this->em->getEmpIndividual($empID);
        $data['personality'] = $this->em->getEmpPersonality($empID);
        $data['software'] = $this->em->getEmpSoftware($empID);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
        $this->load->view('employee/edit-employee-profile', $data);
        $this->load->view('employee/include/footer', $data);
    }

    public function updateEMPProfile(){
        
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

        // Level

        if($this->input->post('emp_level')){
            $personal['emp_level'] = $this->input->post('emp_level');
        }else{
            $personal['emp_level'] = $this->input->post('old_emp_level');
        }

        // End Level

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


        $this->em->updateEMPPersonal($personal, $id);

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

        $this->em->updateEMPSkills($skills, $id);

        // End Skills

        // Status

        $status['ed_part_full'] = $this->input->post('ed_part_full');
        $this->em->updateEMPStatus($status, $id);

        //End Status


         // Goals

         if($this->input->post('goals_description')){
            $goals['goals_type'] = $this->input->post('goals_type');
            $goals['goals_description'] = $this->input->post('goals_description');
            $this->em->updateEMPGoals($goals, $id);
         }

        //End Goals

        //Experience

        $experience['ed_experience'] = $this->input->post('ed_experience');
        $this->em->updateEMPExperience($experience, $id);

        //End Experience

        //Salary

            // Onlye Admin Access

        //End Salary

        // Qualification
            $qualification['ed_qualification_text'] = $this->input->post('ed_qualification_text');
            $this->em->updateEMPQualification($qualification, $id);
         // End Qualification

         // Individual Profile
         $individual['ed_individual_profile_email'] = $this->input->post('ed_individual_profile_email');
         $individual['ed_individual_profile_contact'] = $this->input->post('ed_individual_profile_contact');
         $individual['ed_individual_profile_age'] = $this->input->post('ed_individual_profile_age');
         $individual['ed_individual_profile_intrest'] = $this->input->post('ed_individual_profile_intrest');
         $individual['ed_individual_profile_address'] = $this->input->post('ed_individual_profile_address');
         $individual['ed_individual_profile_city'] = $this->input->post('ed_individual_profile_city');

        if($this->input->post('ed_individual_profile_country')){
            $individual['ed_individual_profile_country'] = $this->input->post('ed_individual_profile_country');
        }else{
            $individual['ed_individual_profile_country'] = $this->input->post('old_country');
        }


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

         $this->em->updateEMPIndividualProfile($individual, $id);
         $this->em->updateEMPProfileSet($emp_data, $id);
        // End Individual Profile

        // Personality

         $personality['ed_personality_type'] = $this->input->post('ed_personality_type');
         $personality['ed_personality_role'] = $this->input->post('ed_personality_role');
         $personality['ed_personality_code'] = $this->input->post('ed_personality_code');
         $personality['ed_personality_strategy'] = $this->input->post('ed_personality_strategy');

         $personality['min_value_mind'] = $this->input->post('min_value_mind');
         $personality['max_value_mind'] = $this->input->post('max_value_mind');

         $personality['min_value_energy'] = $this->input->post('min_value_energy');
         $personality['max_value_energy'] = $this->input->post('max_value_energy');

         $personality['min_value_nature'] = $this->input->post('min_value_nature');
         $personality['max_value_nature'] = $this->input->post('max_value_nature');

         $personality['min_value_tactics'] = $this->input->post('min_value_tactics');
         $personality['max_value_tactics'] = $this->input->post('max_value_tactics');

         $personality['min_value_identity'] = $this->input->post('min_value_identity');
         $personality['max_value_identity'] = $this->input->post('max_value_identity');

         $this->em->updateEMPPersonality($personality, $id);

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

        $this->em->updateEMPSoftware($software, $id);

        // End Software 

        $this->session->set_flashdata('emp_profile_updated_success', 'Your profile updated successfully!!!');
	    return redirect('Employee/empDetailsPage');

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

		$this->load->view('employee/include/header');
		$this->load->view('employee/print-employee-details', $data);
		$this->load->view('employee/include/footer');
	}

    public function feedBackForm(){
        $empID = $this->session->userdata('emp_login_id');
        $menu['empinfo'] = $this->em->getEmpInfo($empID);

        $this->load->view('employee/include/header');
        $this->load->view('employee/include/menu', $menu);
		$this->load->view('employee/feedback-form');
		$this->load->view('employee/include/footer');
    }

    public function addSignatureEmployee(){

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

		$res = $this->em->postEmployeeSignature($data);

		if($res){
			$this->session->set_flashdata('signature_upload_success', 'Signature Uploaded Successfully!!!');
			redirect('Employee/showEmpPerformance');
		}else{
			$this->session->set_flashdata('signature_not_uploaded', 'Please Try Again!');
			redirect('Employee/showEmpPerformance');
		}
    }

    public function upgradePerStatusbyManager(){

        $data['manager_id'] = $this->session->userdata('emp_login_id');
        $data['manager_name'] = $this->em->getManagerInfo($this->session->userdata('emp_login_id'));
        $data['submit_manager_status'] = 2;
        $performance_id = $this->input->post('performance_id');
        
        $res = $this->em->upgradePerStatusbyManagerModel($data, $performance_id);

		if($res){
			$this->session->set_flashdata('upgradePer_upload_success', 'Employee evaluation completed successfully!!!');
			redirect('Employee/ReEvaluateForm/'.$performance_id);
		}else{
			$this->session->set_flashdata('upgradePer_not_uploaded', 'Please Try Again!');
			redirect('Employee/ReEvaluateForm/'.$performance_id);
		}

    }


    public function fetchGoal1(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden1 = $this->input->post('goals_hidden1');
        $res = $this->em->fatchGoalsText($employee_id, $goals_hidden1);
        echo json_encode($res);
    }

    public function fetchGoal2(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden2 = $this->input->post('goals_hidden2');
        $res = $this->em->fatchGoalsText($employee_id, $goals_hidden2);
        echo json_encode($res);
    }

    public function fetchGoal3(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden3 = $this->input->post('goals_hidden3');
        $res = $this->em->fatchGoalsText($employee_id, $goals_hidden3);
        echo json_encode($res);
    }

    public function fetchGoal4(){
        $employee_id = $this->input->post('employee_id');
        $goals_hidden4 = $this->input->post('goals_hidden4');
        $res = $this->em->fatchGoalsText($employee_id, $goals_hidden4);
        echo json_encode($res);
    }

}
?>