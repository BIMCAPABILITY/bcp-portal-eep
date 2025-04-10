<?php 


class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getEmployeeDetails($id){
        $this->db->select('*')
            ->from('employee_table')
            ->join('spectrum_table', 'employee_table.emp_level = spectrum_table.employee_level')
            ->join('departments', 'departments.department_id = employee_table.employee_department')
            ->join('designation', 'designation.designation_id = employee_table.employee_designation')
            ->join('employee_level', 'employee_table.emp_level = employee_level.employee_level_id')
            ->join('countries', 'employee_table.employee_country_id = countries.country_id')
            ->join('employee_sub_level', 'employee_table.emp_sub_level = employee_sub_level.employee_sub_level_id', 'left')
            ->where('employee_table.main_employee_id', $id)
            ->group_by('employee_table.main_employee_id');
        
        $q = $this->db->get();
        return $q->row();
    }

    public function getCountries(){
        $q = $this->db->select('*')
        ->from('countries')
        ->get();
        return $q->result();
    }

    public function updateEmployeeProfile($id, $data){
        $this->db->where('main_employee_id', $id);
        return $this->db->update('employee_table', $data);
    }

    public function getEmployeeWithLevel($id){
        $q = $this->db->select('*')
        ->from('employee_table')
        ->join('spectrum_table', 'employee_table.emp_level = spectrum_table.employee_level')
        ->join('employee_level', 'employee_table.emp_level = employee_level.employee_level_id')
        ->join('employee_sub_level', 'employee_table.emp_sub_level = employee_sub_level.employee_sub_level_id', 'left')
        ->join('departments', 'employee_table.employee_department = departments.department_id', 'left')
        ->join('designation', 'employee_table.employee_designation = designation.designation_id', 'left')
        ->where('employee_table.main_employee_id', $id)
        ->get();
        return $q->row();
    }

    function getSectionInLevelTab($spectrum_id){
        $q = $this->db->select('pe_section_table.section_id, pe_section_table.section_name, section_instruction')
            ->from('pe_section_table')
            ->join('spectrum_table', 'spectrum_table.spectrum_id = pe_section_table.spectrum_id')
            ->where('pe_section_table.spectrum_id', $spectrum_id)
            ->group_by('pe_section_table.section_name', 'DESC')
            ->get();
        return $q->result();
    }
    public function getprvesEmpGoals($emp_id){
        $q = $this->db->select('*')
        ->from('pe_goals_table')
        ->join('pe_evaluation_table', 'pe_goals_table.employee_evaluation_id = pe_evaluation_table.employee_evaluation_id')
        ->where('pe_evaluation_table.employee_id', $emp_id)
        ->get();
        return $q->row();
    }

    function getQuestionsRecord($sections_id){
        $q = $this->db->select('*')
        ->from('pe_question_table')
        ->where_in('section_id', $sections_id)
        ->get();
        return $q->result();
    }

    function getEvaluationMarks(){
        $q = $this->db->select('*')
        ->from('pe_marks_category_table')
        ->get();
        return $q->result();
    }

    function insertPerformanceEvaluation($data){
        $this->db->insert('pe_evaluation_table', $data); 
        return $this->db->insert_id();
    }

    function insertGoals($data){
        return $this->db->insert('pe_goals_table', $data); 
    }

    function insertEvaluationData($data){
        $this->db->insert_batch('pe_evaluation_score_table', $data);
        return $this->db->insert_id();
    }

    public function getEmployee_EvaluationList($id){
        $q = $this->db->select('*')
        ->from('pe_evaluation_table')
        ->where('employee_id', $id)
        ->get();
        return $q->result();
    }

    public function fetchEmployeeSubmitedEvaluation($id){

        $q = $this->db->select('*')
        ->from('pe_evaluation_table')
        ->join('pe_evaluation_score_table', 'pe_evaluation_table.employee_evaluation_id = pe_evaluation_score_table.employee_evaluation_id')
        ->join('pe_question_table', 'pe_question_table.question_id = pe_evaluation_score_table.question_id')
        ->join('spectrum_table', 'spectrum_table.spectrum_id = pe_question_table.spectrum_id')
        ->where('pe_evaluation_table.employee_id', $id)
        ->group_by('pe_evaluation_table.employee_evaluation_id')
        ->get();
        return $q->result_array();

        // echo '<pre>'; print_r($q->result_array()); die;

    }

    public function getEvaluationData($id){
        $q = $this->db->select('*')
        ->from('pe_evaluation_score_table')
        ->join('pe_question_table', 'pe_question_table.question_id = pe_evaluation_score_table.question_id')
        ->join('pe_question_weight_table', 'pe_question_weight_table.question_weight_id = pe_question_table.question_weight_id')
        ->where('employee_evaluation_id', $id)
        ->get();
        return $q->result();
    }

    public function getGoals($id){
        $q = $this->db->select('*')
        ->from('pe_goals_table')
        ->where('employee_evaluation_id', $id)
        ->get();
        return $q->row();
    }

    function getQuestionWeight(){
        $q = $this->db->select('*')
        ->from('pe_question_weight_table')
        ->get();
        return $q->result();
    }

    function getMarksData(){
        $q = $this->db->select('*')
        ->from('pe_marks_category_table')
        ->get();
        return $q->result();
    }

    public function getEmployeeSpectrum(){
        $q = $this->db->select('*')
        ->from('spectrum_table')
        ->get();
        return $q->result();
    }

    public function getEvaluationPeriod($id){
        $q = $this->db->select('*')
        ->from('pe_evaluation_table')
        ->where('employee_evaluation_id', $id)
        ->get();
        return $q->row();
    }

    public function getSupervisorData($id){
        $q = $this->db->select('main_employee_id, employee_first_name, employee_last_name, employee_email, employee_image')
        ->from('pe_evaluation_history_id')
        ->join('pe_evaluation_table', 'pe_evaluation_table.employee_evaluation_id = pe_evaluation_history_id.performance_id')
        ->join('employee_table', 'employee_table.main_employee_id = pe_evaluation_history_id.supervisor_id')
        ->where('pe_evaluation_history_id.performance_id', $id)
        ->get();
        return $q->row();
    }

    public function LockSubmitEvaluation($id, $status){
        $data = array('evaluation_status' => $status);
        $this->db->where('employee_evaluation_id', $id);
        return $this->db->update('pe_evaluation_table', $data);
    }

    public function insertEvaluationHistory($data){
        $data['modification_date'] = date('Y-m-d H:i:s');
        return $this->db->insert('pe_evaluation_history_id', $data);
    }

    public function updatePerformanceEvaluation($id, $data){
        $this->db->where('employee_evaluation_id', $id);
        return $this->db->update('pe_evaluation_table', $data);
    }

    public function updateGoals($id, $data){
        $this->db->where('employee_evaluation_id', $id);
        return $this->db->update('pe_goals_table', $data);
    }

    public function trashEmployeeEvaluationRecordDB($id, $data){
        $this->db->where('employee_evaluation_id', $id);
        return $this->db->update('pe_evaluation_table', $data);
    }

    public function addSoftwareExpertiseDB($data){
        return $this->db->insert('software_expertise', $data);
    }

    public function getSoftwareExpertise($id){
        $q = $this->db->select('*')
        ->from('software_expertise')
        ->where('employee_id', $id)
        ->where('software_status', 1)
        ->get();
        return $q->result();
    }

    public function deleteSoftwareExpertiseDB($id){
        $this->db->where('software_expertise_id', $id);
        return $this->db->delete('software_expertise');
    }

    public function getEmployeeHistory($id){
        $q = $this->db->select('*')
        ->from('employee_history')
        ->join('employee_table', 'employee_table.main_employee_id = employee_history.employee_id')
        ->join('employee_level', 'employee_history.history_emp_level = employee_level.employee_level_id')
        ->join('employee_sub_level', 'employee_history.history_emp_sub_level = employee_sub_level.employee_sub_level_id', 'left')
        ->join('departments', 'employee_history.history_department_id = departments.department_id', 'left')
        ->join('designation', 'employee_history.history_designation_id = designation.designation_id', 'left')
        ->join('countries', 'employee_table.employee_country_id = countries.country_id', 'left')
        ->join('spectrum_table', 'employee_history.history_spectrum_id = spectrum_table.spectrum_id')
        ->where('employee_history.employee_id', $id)
        ->get();
        return $q->result();
    }

    public function getEmployeeLeaves($id){
        $q = $this->db->select('*')
        ->from('employee_leaves')
        ->where('employee_id', $id)
        ->get();
        return $q->row();
    }

    public function getEmployeeSalary($id){
        $q = $this->db->select('*')
        ->from('salary')
        ->join('employee_table', 'salary.employee_id = employee_table.main_employee_id')
        ->join('employee_level', 'employee_table.emp_level = employee_level.employee_level_id')
        ->where('salary.employee_id', $id)
        ->order_by('salary_id', "DESC")
        ->get();
        return $q->result();
    }

    public function getEmployeePersonality($id){
        $q = $this->db->select('*')
        ->from('employee_personality')
        ->where('employee_id', $id)
        ->order_by('employee_personality_id', 'DESC')
        ->limit(1)
        ->get();
        return $q->row();
    }

    public function getEmployeePersonalityRank($id){
        $q = $this->db->select('*')
        ->from('personality_ranks')
        ->where('employee_id', $id)
        ->order_by('personality_rank_id', 'DESC')
        ->limit(1)
        ->get();
        return $q->row();
    }

    public function editPersonalityRanksDB($id, $data){
        $this->db->where('employee_id', $id);
        return $this->db->update('personality_ranks', $data);
    }

    public function addingPersonalityRanksDB($data){
        return $this->db->insert('personality_ranks', $data);
    }

    public function deletePersonalityDetailsDB($personality_id, $employee_id){
        $this->db->where('employee_personality_id', $personality_id);
        $this->db->where('employee_id', $employee_id);
        return $this->db->delete('employee_personality');
    }

    public function editPersonalityDetailsDB($id, $data){
        $this->db->where('employee_id', $id);
        return $this->db->update('employee_personality', $data);
    }

    public function addPersonalityDetailsDB($data){
        return $this->db->insert('employee_personality', $data);
    }


}

?>