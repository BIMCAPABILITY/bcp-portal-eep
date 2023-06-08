<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

/*************Dashboard*******************/

    public function getTotalEmp(){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->get();
        return $q->num_rows();
    }

    public function getTotalDepartment(){
        $q = $this->db->select('*')
        ->from('departments')
        ->get();
        return $q->num_rows();
    }

    public function getTotalDesignation(){
        $q = $this->db->select('*')
        ->from('designation')
        ->get();
        return $q->num_rows();
    }

    public function getTotalPerformance(){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->get();
        return $q->num_rows();
    }

    public function checkEmailValid($emailID){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->where('employee_email', $emailID)
        ->get();
        return $q->num_rows();
    }

    public function getTopPerformance(){
        $query = $this->db->query("SELECT *, MAX(total_emp_avg) AS 'maximum_performance' FROM employee_table
        LEFT JOIN employee_performance ON employee_table.main_employee_id = employee_performance.employee_id 
        LEFT JOIN employee_main_avg ON employee_performance.emp_performance_id = employee_main_avg.performance_id
        WHERE submit_manager_status = 2
        GROUP BY(emp_performance_id) DESC LIMIT 5"); 
        return $query->result();
    }

    public function getLowPerformance(){
       $query = $this->db->query("SELECT *, MIN(total_emp_avg) AS 'minimum_performance' FROM employee_table 
       LEFT JOIN employee_performance ON employee_table.main_employee_id = employee_performance.employee_id 
       LEFT JOIN employee_main_avg ON employee_performance.emp_performance_id = employee_main_avg.performance_id
       WHERE submit_manager_status = 2
       GROUP BY(emp_performance_id) ASC LIMIT 5"); 
       return $query->result();
    }

    // Chart 

    public function getGratefulPerformance(){
        $query = $this->db->query("SELECT * FROM employee_main_avg WHERE employee_main_avg.total_emp_avg >= 3 "); 
        return $query->num_rows();
    }

    public function getGoodPerformance(){
        $query = $this->db->query("SELECT * FROM employee_main_avg WHERE employee_main_avg.total_emp_avg > 2 AND employee_main_avg.total_emp_avg < 3 "); 
        return $query->num_rows();
    }

    public function getAveragePerformance(){
        $query = $this->db->query("SELECT * FROM employee_main_avg WHERE employee_main_avg.total_emp_avg < 2 "); 
        return $query->num_rows();
    }

    public function PerformanceResultDashboard(){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
        ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
        ->join('p_creativity_problem_solving_table', 'employee_performance.emp_performance_id = p_creativity_problem_solving_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_initiative_proactive_table', 'employee_performance.emp_performance_id = p_initiative_proactive_table.performance_id')
        ->join('p_knowledge_table', 'employee_performance.emp_performance_id = p_knowledge_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
        ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
        ->join('p_software_table', 'employee_performance.emp_performance_id = p_software_table.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')

        ->limit(5)
        ->order_by('employee_performance.emp_performance_id', "DESC")
        ->group_by('employee_performance.emp_performance_id', "DESC")
        ->get();
        return $q->result();
    }

/********************Emp*********************/

    public function getEmpDetails($id){

        $q = $this->db->select('*')
        ->from('employee_table')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->where('main_employee_id', $id)
        ->get();
        return $q->row();
        
    }

    public function postEmpSalary($data){
        $data['ed_salary_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_salary_history', $data); 
    }

    
    public function getEmpDepartment(){
        $q = $this->db->select('*')
        ->from('departments')
        ->get();
        return $q->result();
    }

    public function fetchDepartmentList($department){
        $this->db->where('f_department_id',$department);
        $this->db->order_by('designation_id', 'ASC');
        $query = $this->db->get('designation');
        $output = '<option value="">Select Designation</option>';
        foreach($query->result() as $row){
          $output .= '<option value="'.$row->designation_name.'">'.$row->designation_name.'</option>';
        }
        return $output;
    }

    public function getDepEmp($dep){
        $q = $this->db->select('department_name')
        ->from('departments')
        ->where('department_id', $dep)
        ->get();
        return $q->row()->department_name;
    }

    public function uploadEmpDetails($data){
        $data['emp_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_table', $data); 
    }

    public function employeesListData($limit, $offset){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->limit($limit, $offset)
        ->order_by('main_employee_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_employees(){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->get();
        return $q->num_rows();
    }

    public function deleteEmpDB($id){
        return $this->db->delete('employee_table', ['main_employee_id' => $id]);
    }

    public function get_empImg_id($empID){
        $q = $this->db->select('employee_image')
        ->from('employee_table')
        ->where('main_employee_id', $empID)
        ->get();
        return $q->row();
    }

    public function updateEmpInfo($data, $id){
        $this->db->where('main_employee_id ', $id);
        $this->db->update('employee_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPStatus($employee_status, $employee_id){

        $id = array('main_employee_id' => $employee_id);
        $status = array('employee_status' => $employee_status);
        $this->db->where($id);
        $this->db->update('employee_table', $status);
        return $this->db->affected_rows();

    }

    // Edit Employee

    public function updateM_EMPPersonal($data, $id){
        $id = array('main_employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_table', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPSkills($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_skills', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPStatus($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_status', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPGoals($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('emp_goals', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPExperience($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_experience', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPSalary($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_salary_history', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPQualification($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_qualification', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPIndividualProfile($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_individual_profile', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPProfileSet($data, $id){
        $id = array('main_employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_table', $data);
        return $this->db->affected_rows();
    }

    public function updateM_EMPPersonality($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_personality', $data);
        return $this->db->affected_rows();
    }
    public function updateM_EMPSoftware($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_software_expertise', $data);
        return $this->db->affected_rows();
    }

    // ----------------------------------------

    public function postEmployeeSignature($data){
        $data['p_signature_date'] = date("d-m-Y H:i:s");
        $data['p_signature_level'] = 2;
        return $this->db->insert('p_signature', $data); 
    }

    // get employee details

    public function getEmpSkills($ID){
        $q = $this->db->select('*')
        ->from('employee_d_skills')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpStatus($ID){
        $q = $this->db->select('*')
        ->from('employee_d_status')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpExperience($ID){
        $q = $this->db->select('*')
        ->from('employee_d_experience')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpSalary($ID){
        $q = $this->db->select('*')
        ->from('employee_d_salary_history')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpQualification($ID){
        $q = $this->db->select('*')
        ->from('employee_d_qualification')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpIndividual($ID){
        $q = $this->db->select('*')
        ->from('employee_d_individual_profile')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpPersonality($ID){
        $q = $this->db->select('*')
        ->from('employee_d_personality')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmpSoftware($ID){
        $q = $this->db->select('*')
        ->from('employee_d_software_expertise')
        ->where('employee_id', $ID)
        ->get();
        return $q->row();
    }

    public function getEmployeesPerformanceInfo($per_id){
        
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->where('employee_performance.emp_performance_id', $per_id)
        ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->join('emp_goals', 'employee_table.main_employee_id = emp_goals.employee_id')

        ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
        ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
        ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
        ->join('p_knowledge_table', 'employee_performance.emp_performance_id = p_knowledge_table.performance_id')
        ->join('p_software_table', 'employee_performance.emp_performance_id = p_software_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
        ->join('p_initiative_proactive_table', 'employee_performance.emp_performance_id = p_initiative_proactive_table.performance_id')
        ->join('p_creativity_problem_solving_table', 'employee_performance.emp_performance_id = p_creativity_problem_solving_table.performance_id')

        ->get();
        return $q->row();

    }

    public function getCheckHistory($empId){

        $q = $this->db->select('*')
        ->from('employee_performance')
        ->where('employee_performance.emp_performance_id', $empId)
        ->get();
        return $q->row();

    }

    public function getEmployeesAVG($id){
        $q = $this->db->select('total_emp_avg')
        ->from('employee_performance')
        ->where('employee_performance.emp_performance_id', $id)
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->get();
        return $q->row();
    }


/*********************Department***********************/

    public function uploadDepartment($data){
        $data['department_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('departments', $data); 
    }

    public function departmentsListData($limit, $offset){
        $q = $this->db->select('*')
        ->from('departments')
        ->limit($limit, $offset)
        ->order_by('department_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_departments(){
        $q = $this->db->select('*')
        ->from('departments')
        ->get();
        return $q->num_rows();
    }

    public function deleteDepDB($id){
        return $this->db->delete('departments', ['department_id' => $id]);
    }

    public function updateDepartmentInfo($id, $data){
        $id = array('department_id' => $id);
        $this->db->where($id);
        $this->db->update('departments', $data);
        return $this->db->affected_rows();
    }

 /************************Departments*********************/

    public function getDepartmentsList(){
        $q = $this->db->select('*')
        ->from('departments')
        ->get();
        return $q->result();
    }

    public function uploadDesignation($data){
        $data['designation_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('designation', $data); 
    }

    public function designationListData($limit, $offset){
        $q = $this->db->select('*')
        ->from('designation')
        ->join('departments', 'designation.f_department_id = departments.department_id')
        ->limit($limit, $offset)
        ->order_by('designation_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_designation(){
        $q = $this->db->select('*')
        ->from('designation')
        ->get();
        return $q->num_rows();
    }

    public function deleteDesDB($id){
        return $this->db->delete('designation', ['designation_id' => $id]);
    }

    public function updateDesignationInfo($id, $data){
        $id = array('designation_id' => $id);
        $this->db->where($id);
        $this->db->update('designation', $data);
        return $this->db->affected_rows();
    }


    /********************Employee Proformance ******************/


    public function getEmployeesPerformanceList($id){
        $q = $this->db->select('emp_performance_id, employee_id, emp_performance_start_date, emp_performance_end_date, main_emp_avg, submit_employee_status, employee_performance_status,manager_name, submit_manager_status, evaluate_date_category')
        ->from('employee_performance')
        ->where('employee_table.main_employee_id', $id)
        ->where('employee_performance.submit_employee_status', '1')
        ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
        ->order_by('employee_performance.emp_performance_id', 'DESC')
        ->get();
        return $q->result();
    }
    

    public function getEmpNameList(){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->get();
        return $q->result();
    }

    public function fetchDDList($employeeId){
        $this->db->where('main_employee_id',$employeeId);
        $this->db->join('departments', 'employee_table.employee_department = departments.department_id');
        $this->db->order_by('main_employee_id', 'ASC');
        $query = $this->db->get('employee_table');
        return $query->row()->department_name;
    }

    public function fetchDesiList($employeeId){
        $this->db->where('main_employee_id',$employeeId);
        $this->db->order_by('main_employee_id', 'ASC');
        $query = $this->db->get('employee_table');
        return $query->row()->employee_designation;
    }

    public function postEmployeePerformance($data){
        $data['performance_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_performance', $data);
    }


    public function PerformanceResultData($limit, $offset){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
        ->join('departments', 'employee_table.employee_department = departments.department_id')

        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
        ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
        ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
        ->join('p_knowledge_table', 'employee_performance.emp_performance_id = p_knowledge_table.performance_id')
        ->join('p_software_table', 'employee_performance.emp_performance_id = p_software_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
        ->join('p_initiative_proactive_table', 'employee_performance.emp_performance_id = p_initiative_proactive_table.performance_id')
        ->join('p_creativity_problem_solving_table', 'employee_performance.emp_performance_id = p_creativity_problem_solving_table.performance_id')

        ->limit($limit, $offset)
        ->order_by('employee_performance.emp_performance_id', "DESC")
        ->group_by('employee_performance.emp_performance_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_PerformanceResult(){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->get();
        return $q->num_rows();
    }


    // Start Performance Tables 

    public function postEmployeeCommunication($data){
        $data['p_communication_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('p_communication_table', $data); 
    }

    public function postEmployeeProductivity($data){
        return $this->db->insert('p_productivity_table', $data); 
    }

    public function postEmployeeQuality($data){
        return $this->db->insert('p_quality_table', $data); 
    }

    public function postEmployeeKnowledge($data){
        return $this->db->insert('p_knowledge_table', $data); 
    }

    public function postEmployeeSoftware($data){
        return $this->db->insert('p_software_table', $data); 
    }

    public function postEmployeeDependability($data){
        return $this->db->insert('p_dependability_table', $data); 
    }

    public function postEmployeeTimeManagement($data){
        return $this->db->insert('p_time_management_table', $data); 
    }

    public function postEmployeeAdaptability($data){
        return $this->db->insert('p_adaptability_table', $data); 
    }

    public function postEmployeeInitiativeProactive($data){
        return $this->db->insert('p_initiative_proactive_table', $data); 
    }

    public function postEmployeeCreativityProblemSolving($data){
        return $this->db->insert('p_creativity_problem_solving_table', $data); 
    }

    // End Performance Tables


    // Edit Emp Score Data

    public function updateEmployeeCommunication($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_communication_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeProductivity($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_productivity_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeQuality($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_quality_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeKnowledge($data, $per_id){ 
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_knowledge_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeSoftware($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_software_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeDependability($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_dependability_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeTimeManagement($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_time_management_table', $data);
        return $this->db->affected_rows(); 
    }

    public function updateEmployeeAdaptability($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_adaptability_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeInitiativeProactive($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_initiative_proactive_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEmployeeCreativityProblemSolving($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('p_creativity_problem_solving_table', $data);
        return $this->db->affected_rows();
    }

    public function updateASEPerformance($data, $per_id){
        $id = array('emp_performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('employee_performance', $data);
        return $this->db->affected_rows();
    }

    public function updateEmpMainAvg($data, $per_id){
        $id = array('performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('employee_main_avg', $data);
        return $this->db->affected_rows();
    }

    // Start Signature

    public function postManagerSignature($data){
        $data['p_signature_date'] = date("d-m-Y H:i:s");
        $data['p_signature_level'] = 3;
        return $this->db->insert('p_signature', $data); 
    }

    public function getManagerSignature($id){
        $q = $this->db->select('*')
        ->from('p_signature')
        ->where('employee_id', $id)
        ->group_by('p_signature.p_signature_id', "DESC")
        ->get();
        return $q->row();
    }

    public function deleteSignatureDB($id){
        return $this->db->delete('p_signature', ['employee_id' => $id]);   
    }

    // End Signature

    public function fatchGoalsText($emp_id, $goals_type){
        $q = $this->db->select('*')
        ->from('emp_goals')
        ->where('employee_id', $emp_id)
        ->where('goals_type', $goals_type)
        ->get();
        return $q->row();
    }

      // Print

    public function getEMPDataPrint($per_id){
        $q = $this->db->select('*')
        ->from('employee_main_avg')
        ->where('performance_id', $per_id)
        ->get();
        return $q->row();
    }

    public function getEMPID($per_id){
        $q = $this->db->select('employee_id')
        ->from('employee_performance')
        ->where('emp_performance_id', $per_id)
        ->get();
        return $q->row()->employee_id;
    }

    public function countLastReview($emp_id){
        $q = $this->db->select('emp_performance_start_date, total_emp_avg, submit_manager_status')
        ->from('employee_performance')
        ->where('employee_performance.employee_id', $emp_id)
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->get();
        return $q->num_rows();
    }

    public function getCurrentReview($per_id){
        $q = $this->db->select('emp_performance_id')
        ->from('employee_performance')
        ->where('employee_performance.emp_performance_id', $per_id)
        ->get();
        return $q->row()->emp_performance_id;
    }

    public function getLastReview($last_id){
        $q = $this->db->select('emp_performance_id, emp_performance_start_date, total_emp_avg, submit_manager_status')
        ->from('employee_performance')
        ->where('employee_performance.emp_performance_id', $last_id)
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->get();
        return $q->row();
    }

}
?>