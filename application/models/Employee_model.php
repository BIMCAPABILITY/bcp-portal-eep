
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee_model extends CI_Model {

/*************Dashboard*******************/

    public function getEmpInfo($ID){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->where('main_employee_id', $ID)
        ->get();
        return $q->row();
    }

    // check valid add aur not

    public function getVerifyAdd($id){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->where('employee_id', $id)
        ->get();
    
        if($q->row()){
            return 1;
        }else{
            return 0;
        }
    }

    // Employee Proformance

    public function uploadEmployeePerformance($data){
        $data['performance_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_performance', $data); 
    }
    
    // Start Performance Tables 

    public function uploadEmployeeCommunication($data){
        $data['p_communication_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('p_communication_table', $data); 
    }

    public function uploadEmployeeProductivity($data){
        return $this->db->insert('p_productivity_table', $data); 
    }

    public function uploadEmployeeQuality($data){
        return $this->db->insert('p_quality_table', $data); 
    }

    public function uploadEmployeeKnowledge($data){
        return $this->db->insert('p_knowledge_table', $data); 
    }

    public function uploadEmployeeSoftware($data){
<<<<<<< HEAD
        return $this->db->insert('p_software_table', $data); 
=======
        return $this->db->insert('p_team_management_table', $data); 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
    }

    public function uploadEmployeeDependability($data){
        return $this->db->insert('p_dependability_table', $data); 
    }

    public function uploadEmployeeTimeManagement($data){
        return $this->db->insert('p_time_management_table', $data); 
    }

    public function uploadEmployeeAdaptability($data){
        return $this->db->insert('p_adaptability_table', $data); 
    }

    public function uploadEmployeeInitiativeProactive($data){
        return $this->db->insert('p_initiative_proactive_table', $data); 
    }

    public function uploadEmployeeCreativityProblemSolving($data){
        return $this->db->insert('p_creativity_problem_solving_table', $data); 
    }

    // End Performance Tables

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


    // Edit Emp Score Data

<<<<<<< HEAD
=======
        public function findEMPID($per_id){
            $q = $this->db->select('employee_id')
            ->from('employee_performance')
            ->where('emp_performance_id', $per_id)
            ->get();
             return $q->row()->employee_id;
        }

        public function updateSupervisorGoals($data, $per_id){

            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('emp_goals', $data);
            return $this->db->affected_rows();

        }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
        public function updateEmployeeCommunication($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_communication_table', $data);
            return $this->db->affected_rows();
        }

        public function updateEmployeeKnowledgePerformance($data, $per_id){ 
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('knowledge_performance', $data);
            return $this->db->affected_rows();
        }

        public function updateEmployeeQuality($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_quality_table', $data);
            return $this->db->affected_rows();
        }

<<<<<<< HEAD
        public function updateEmployeeKnowledgeJob($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_knowledge_table', $data);
            return $this->db->affected_rows();
        }

        public function updateEmployeeSoftware($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_software_table', $data);
=======
        public function updateEmployeeTeamManagement($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_team_management_table', $data);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
            return $this->db->affected_rows();
        }

        public function updateEmployeeReliabilityProfessionalism($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_reliability_professionalism', $data);
            return $this->db->affected_rows();
        }

        public function updateEmployeeTimeManagement($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_time_management_table', $data);
            return $this->db->affected_rows(); 
        }

        public function updateEmployeeAdaptabilityProactivity($data, $per_id){
            $id = array('performance_id' => $per_id);
            $this->db->where($id);
            $this->db->update('p_productivity_table', $data);
            return $this->db->affected_rows();
        }

<<<<<<< HEAD
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

=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        public function updateSEPerformance($data, $emp_id){
            $id = array('emp_performance_id' => $emp_id);
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

        public function getEmployeesAVG($id){
            $q = $this->db->select('total_emp_avg')
            ->from('employee_performance')
            ->where('employee_performance.emp_performance_id', $id)
            ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
            ->get();
            return $q->row();
        }

        // --------------------------------------------


        public function ReEvaluatePerformanceInfo($id){

            $q = $this->db->select('*')
            ->from('employee_performance')
            ->where('employee_performance.emp_performance_id', $id)
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
<<<<<<< HEAD
            
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

=======
        
            ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
            ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
            ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
            ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
            ->join('p_team_management_table', 'employee_performance.emp_performance_id = p_team_management_table.performance_id')
            ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
            ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
            
>>>>>>> 8ce454d (new update employee portal v1.1.0)
            ->get();
            return $q->row();
            
        }

        public function getEmpDetails($id){

            $q = $this->db->select('*')
            ->from('employee_table')
            ->join('departments', 'employee_table.employee_department = departments.department_id')
            ->where('main_employee_id', $id)
            ->get();
            return $q->row();
            
        }

        public function getEmpBothDetail($id){

            $q = $this->db->select('emp_performance_id, main_employee_id, employee_first_name, employee_last_name, employee_department, employee_designation, department_name')
            ->from('employee_table')
            ->join('departments', 'employee_table.employee_department = departments.department_id')
            ->join('employee_performance', 'employee_table.main_employee_id = employee_performance.employee_id')
            ->where('main_employee_id', $id)
            ->get();
            return $q->row();
            
        }

        public function get_empImg_id($empID){
            $q = $this->db->select('employee_image')
            ->from('employee_table')
            ->where('main_employee_id', $empID)
            ->get();
            return $q->row();
        }

        public function selfUpdateEmpInfo($data, $id){
            $this->db->where('main_employee_id ', $id);
            $this->db->update('employee_table', $data);
            return $this->db->affected_rows();
        }


        // Get The Employee Performance List
    
        
        public function getEmployeesPerformanceList($limit, $offset, $id){
            $q = $this->db->select('emp_performance_id, employee_id, emp_performance_start_date, emp_performance_end_date, main_emp_avg, submit_employee_status, submit_manager_status, employee_performance_status,manager_name, evaluate_date_category')
            ->from('employee_performance')
            ->where('employee_table.main_employee_id', $id)
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
            ->limit($limit, $offset)
            ->order_by('employee_performance.emp_performance_id', "DESC")
            ->get();
            return $q->result();
        }
    
        public function num_rows_EmployeesPerformanceList(){
            $q = $this->db->select('*')
            ->from('employee_performance')
            ->get();
            return $q->num_rows();
        }



        public function getEMPPerList($id){
            $q = $this->db->select('emp_performance_id, employee_id, emp_performance_start_date, emp_performance_end_date, main_emp_avg, submit_employee_status, employee_performance_status,manager_name,submit_manager_status, evaluate_date_category')
            ->from('employee_performance')
            ->where('employee_table.main_employee_id', $id)
            ->where('employee_performance.submit_employee_status', '1')
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
            ->order_by('employee_performance.emp_performance_id', 'DESC')
            ->get();
            return $q->result();
        }
        

        // Update Re Evatution
    
        public function getEmployeesPerformanceInfo($per_id){
        
            $q = $this->db->select('*')
            ->from('employee_performance')
            ->where('employee_performance.emp_performance_id', $per_id)
            
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
            ->join('departments', 'employee_table.employee_department = departments.department_id')
<<<<<<< HEAD
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
=======

            ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
            ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
            ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
            ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
            ->join('p_team_management_table', 'employee_performance.emp_performance_id = p_team_management_table.performance_id')
            ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
            ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
>>>>>>> 8ce454d (new update employee portal v1.1.0)

            ->get();
            return $q->row();

        }

        public function getEmpDepartment(){
            $q = $this->db->select('*')
            ->from('departments')
            ->get();
            return $q->result();
        }

        public function getManagerSignature($id){
            $q = $this->db->select('*')
            ->from('p_signature')
            ->where('employee_id', $id)
            ->group_by('p_signature.p_signature_id', "DESC")
            ->get();
            return $q->row();
        }


        public function getEmployeeSignature($id){
            $q = $this->db->select('*')
            ->from('p_signature')
            ->where('employee_id', $id)
            ->group_by('p_signature.p_signature_id', "DESC")
            ->get();
            return $q->row();
        }

        public function getEmployeesPerformance($id){
            $q = $this->db->select('*')
            ->from('employee_performance')
            ->where('employee_performance.performance_id', $id)
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
            ->join('departments', 'employee_table.employee_department = departments.department_id')
            ->join('p_communication_table', 'employee_performance.performance_id = p_communication_table.employee_id')
            ->join('p_adaptability_table', 'employee_performance.performance_id = p_adaptability_table.employee_id')
            ->join('p_creativity_problem_solving_table', 'employee_performance.performance_id = p_creativity_problem_solving_table.employee_id')
            ->join('p_dependability_table', 'employee_performance.performance_id = p_dependability_table.employee_id')
            ->join('p_initiative_proactive_table', 'employee_performance.performance_id = p_initiative_proactive_table.employee_id')
            ->join('p_knowledge_table', 'employee_performance.performance_id = p_knowledge_table.employee_id')
            ->join('p_productivity_table', 'employee_performance.performance_id = p_productivity_table.employee_id')
            ->join('p_quality_table', 'employee_performance.performance_id = p_quality_table.employee_id')
<<<<<<< HEAD
            ->join('p_software_table', 'employee_performance.performance_id = p_software_table.employee_id')
=======
            ->join('p_team_management_table', 'employee_performance.performance_id = p_team_management_table.employee_id')
>>>>>>> 8ce454d (new update employee portal v1.1.0)
            ->join('p_time_management_table', 'employee_performance.performance_id = p_time_management_table.employee_id')
            ->get();
            return $q->row();
        }
       
        public function getPerformanceByEdit($id){
            $q = $this->db->select('*')
            ->from('employee_performance')
            ->where('employee_performance.emp_performance_id', $id)
            ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
            ->join('departments', 'employee_table.employee_department = departments.department_id')
<<<<<<< HEAD
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
=======

            ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
            ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
            ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
            ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
            ->join('p_team_management_table', 'employee_performance.emp_performance_id = p_team_management_table.performance_id')
            ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
            ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')

>>>>>>> 8ce454d (new update employee portal v1.1.0)
            ->get();
            return $q->row();
        }

        // Set Add Emp Score Data

        public function setEmpMainAvgRating($data){
            $data['performance_post_date'] = date("d-m-Y H:i:s");
            $this->db->insert('employee_performance', $data);
            $insert_id = $this->db->insert_id();
            return  $insert_id;
        }


        public function setEmployeeCommunication($data){
            $data['p_communication_post_date'] = date("d-m-Y H:i:s");
            return $this->db->insert('p_communication_table', $data); 
        }
    
        public function setEmployeeKnowledgePerformance($data){
            return $this->db->insert('knowledge_performance', $data); 
        }
    
        public function setEmployeeQuality($data){
            return $this->db->insert('p_quality_table', $data); 
        }
    
        public function setEmployeeKnowledge($data){
            return $this->db->insert('p_knowledge_table', $data); 
        }
    
<<<<<<< HEAD
        public function setEmployeeSoftware($data){
            return $this->db->insert('p_software_table', $data); 
=======
        public function setEmployeeTeam_management($data){
            return $this->db->insert('p_team_management_table', $data); 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }

        public function setEmployeeReliabilityProfessionalism($data){
            return $this->db->insert('p_reliability_professionalism', $data); 
        }

        public function setEmployeeTimeManagement($data){
            return $this->db->insert('p_time_management_table', $data); 
        }
    
        public function setEmployeeProductivity($data){
            return $this->db->insert('p_productivity_table', $data); 
        }
    
        public function setEmployeeInitiativeProactive($data){
            return $this->db->insert('p_initiative_proactive_table', $data); 
        }
    
        public function setEmployeeCreativityProblemSolving($data){
            return $this->db->insert('p_creativity_problem_solving_table', $data); 
        }

        public function setEmpMainAvg($data){
            return $this->db->insert('employee_main_avg', $data); 
        }
    

    // Get Employee Score List By Manager

    public function EvaluatedEmployeeList($limit, $offset){

<<<<<<< HEAD
        $q = $this->db->select('communication_emp_avg, knowledge_performance_emp_avg, p_creativity_problem_solving_emp_avg, reliability_emp_avg, p_initiative_proactive_emp_avg, knowledge_emp_avg, productivity_emp_avg, quality_emp_avg, software_emp_avg, time_management_emp_avg, manager_name, total_emp_avg, submit_employee_status,submit_manager_status, employee_image, employee_first_name, employee_last_name, emp_performance_id, emp_performance_start_date, emp_performance_end_date, evaluate_date_category, employee_status')
=======
        $q = $this->db->select('communication_emp_avg, knowledge_performance_emp_avg, reliability_emp_avg, productivity_emp_avg, quality_emp_avg, team_management_emp_avg, time_management_emp_avg, manager_name, total_emp_avg, submit_employee_status,submit_manager_status, employee_image, employee_first_name, employee_last_name, emp_performance_id, emp_performance_start_date, emp_performance_end_date, evaluate_date_category, employee_status')
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        ->from('employee_performance')
        ->join('employee_table', 'employee_performance.employee_id = employee_table.main_employee_id')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')

        ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
        ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
        ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
<<<<<<< HEAD
        ->join('p_knowledge_table', 'employee_performance.emp_performance_id = p_knowledge_table.performance_id')
        ->join('p_software_table', 'employee_performance.emp_performance_id = p_software_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
        ->join('p_initiative_proactive_table', 'employee_performance.emp_performance_id = p_initiative_proactive_table.performance_id')
        ->join('p_creativity_problem_solving_table', 'employee_performance.emp_performance_id = p_creativity_problem_solving_table.performance_id')
=======
        ->join('p_team_management_table', 'employee_performance.emp_performance_id = p_team_management_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
        
>>>>>>> 8ce454d (new update employee portal v1.1.0)

        ->limit($limit, $offset)
        ->order_by('employee_performance.emp_performance_id', "DESC")
        ->group_by('employee_performance.emp_performance_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_EvaluatedEmployeeResult(){
        $q = $this->db->select('*')
        ->from('employee_performance')
        ->get();
        return $q->num_rows();
    }

    public function checkVerifyAllScores($id){
<<<<<<< HEAD
        $q = $this->db->select('communication_emp_avg,m_communication_emp_avg, knowledge_performance_emp_avg,m_knowledge_performance_emp_avg, quality_emp_avg,m_quality_emp_avg, knowledge_emp_avg,m_knowledge_emp_avg, software_emp_avg,m_software_emp_avg, reliability_emp_avg,m_reliability_emp_avg, time_management_emp_avg,m_time_management_emp_avg, productivity_emp_avg,m_productivity_emp_avg, p_initiative_proactive_emp_avg,m_p_initiative_proactive_emp_avg, p_creativity_problem_solving_emp_avg,m_p_creativity_problem_solving_emp_avg, submit_employee_status, submit_manager_status, manager_id, manager_name, emp_performance_start_date, emp_performance_end_date')
        ->from('employee_table')
        ->where('employee_table.main_employee_id', $id)
        ->join('employee_performance', 'employee_table.main_employee_id = employee_performance.employee_id')

        ->join('departments', 'employee_table.employee_department = departments.department_id')
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
=======
        $q = $this->db->select('*')
        ->from('employee_table')
        ->where('employee_table.main_employee_id', $id)
        ->join('employee_performance', 'employee_table.main_employee_id = employee_performance.employee_id')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        
        ->join('p_communication_table', 'employee_performance.emp_performance_id = p_communication_table.performance_id')
        ->join('knowledge_performance', 'employee_performance.emp_performance_id = knowledge_performance.performance_id')
        ->join('p_quality_table', 'employee_performance.emp_performance_id = p_quality_table.performance_id')
        ->join('p_team_management_table', 'employee_performance.emp_performance_id = p_team_management_table.performance_id')
        ->join('p_reliability_professionalism', 'employee_performance.emp_performance_id = p_reliability_professionalism.performance_id')
        ->join('p_time_management_table', 'employee_performance.emp_performance_id = p_time_management_table.performance_id')
        ->join('p_productivity_table', 'employee_performance.emp_performance_id = p_productivity_table.performance_id')
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        
        ->order_by('employee_performance.emp_performance_id', "DESC")
        ->get();
        return $q->row();
    }

    public function showAVGin_EMP_Dash($id){
        $q = $this->db->select('total_emp_avg')
        ->from('employee_table')
        ->where('main_employee_id', $id)
        ->join('employee_performance', 'employee_table.main_employee_id = employee_performance.employee_id')
        ->join('employee_main_avg', 'employee_performance.emp_performance_id = employee_main_avg.performance_id')
        ->order_by('employee_performance.emp_performance_id', "DESC") 
        ->get();
        return $q->row();
    }

    public function getManagerInfo($id){
        $q = $this->db->select('employee_first_name')
        ->from('employee_table')
        ->where('main_employee_id', $id)
        ->get();
        return $q->row()->employee_first_name;
    }

    public function submitByEmployeeScore($per_id){
        $id = array('emp_performance_id' => $per_id);
        $status = array('submit_employee_status' => 1);
        $this->db->where($id);
        $this->db->update('employee_performance', $status);
        return $this->db->affected_rows();
    }

    public function submitByManagerScore($data, $per_id){
        $per_id = array('emp_performance_id' => $per_id);
        $this->db->where($per_id);
        $this->db->update('employee_performance', $data);
        return $this->db->affected_rows();
    }

    public function postEMPSkills($data){
        $data['ed_skills_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_skills', $data); 
    }

    public function postEMPStatus($data){
        $data['eb_status_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_status', $data); 
    }

    public function postEMPGoals($data){
<<<<<<< HEAD
        $data['emp_goals_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('emp_goals', $data); 
=======
        return $this->db->insert('employee_d_goals', $data); 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
    }

    public function postEMPExperience($data){
        $data['ed_experience_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_experience', $data); 
    }

    public function postEMPSalary($data){
        $data['ed_salary_post_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_salary_history', $data); 
    }

    public function postEMPQualification($data){
        $data['ed_qualification_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_qualification', $data); 
    }

    public function postEMPIndividualProfile($data){
        $data['ed_individual_profile_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_individual_profile', $data); 
    }

    public function postEMPPersonality($data){
        $data['ed_personality_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_personality', $data);
    }

    public function postEMPSoftwareExpertise($data){
        $data['ed_software_date'] = date("d-m-Y H:i:s");
        return $this->db->insert('employee_d_software_expertise', $data);
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

<<<<<<< HEAD
    public function getEmpGoals($ID){
        $q = $this->db->select('*')
        ->from('emp_goals')
        ->where('employee_id', $ID)
=======
    public function getEmpGoals($id){
        $q = $this->db->select('*')
        ->from('employee_d_goals')
        ->where('employee_id', $id)
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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
<<<<<<< HEAD
        ->from('employee_d_salary_history')
=======
        ->from('employee_salary')
        ->where('employee_id', $ID)
        ->get();
        return $q->result();
    }

    public function getEmpCurrency($ID){
        $q = $this->db->select('salary_currency')
        ->from('employee_salary')
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

    // End get employee details

    public function updateEMPPersonal($data, $id){
        $id = array('main_employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPSkills($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_skills', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPStatus($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_status', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPGoals($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
<<<<<<< HEAD
        $this->db->update('emp_goals', $data);
=======
        $this->db->update('employee_d_goals', $data);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        return $this->db->affected_rows();
    }

    public function updateEMPExperience($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_experience', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPSalary($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_salary_history', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPQualification($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_qualification', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPIndividualProfile($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_individual_profile', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPProfileSet($data, $id){
        $id = array('main_employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_table', $data);
        return $this->db->affected_rows();
    }

    public function updateEMPPersonality($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_personality', $data);
        return $this->db->affected_rows();
    }
    public function updateEMPSoftware($data, $id){
        $id = array('employee_id' => $id);
        $this->db->where($id);
        $this->db->update('employee_d_software_expertise', $data);
        return $this->db->affected_rows();
    }

    public function postEmployeeSignature($data){
        $data['p_signature_date'] = date("d-m-Y H:i:s");
        $data['p_signature_level'] = 2;
        return $this->db->insert('p_signature', $data); 
    }

    public function upgradePerStatusbyManagerModel($data, $per_id){
        $id = array('emp_performance_id' => $per_id);
        $this->db->where($id);
        $this->db->update('employee_performance', $data);
        return $this->db->affected_rows();
    }
    
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
<<<<<<< HEAD
=======

    public function employeesProfileListData($limit, $offset){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->join('departments', 'employee_table.employee_department = departments.department_id')
        ->limit($limit, $offset)
        ->order_by('main_employee_id', "DESC")
        ->get();
        return $q->result();
    }

    public function num_rows_ProfileList(){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->get();
        return $q->num_rows();
    }

    public function getSuperEmpGoals($per_id){

        $whereArray = array(
            "performance_id" => $per_id
        );

        $q = $this->db->select('*')
        ->from('emp_goals')
        ->where($whereArray)
        ->get();
        return $q->row();
    }

    public function setEmployeeGoals($data){
        return $this->db->insert('emp_goals', $data); 
    }

    public function updateEMPGoalsEvalu($goals, $perf_id){
        $id = array('performance_id' => $perf_id);
        $this->db->where($id);
        $this->db->update('emp_goals', $goals);
        return $this->db->affected_rows();
    }
>>>>>>> 8ce454d (new update employee portal v1.1.0)
}
?>