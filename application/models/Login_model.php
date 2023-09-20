<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function checkauthLogin($username, $password){
        $result = $this->db->where(['admin_username'=>$username, 'admin_password'=>$password])
        ->get('admin_table');

        if($result){
            return $result->row()->admin_id;
        }else{
            return false;
        }
    }

<<<<<<< HEAD
    public function checkEmpAuthLogin($email, $password){
        $result = $this->db->where(['employee_email'=>$email, 'emp_password'=>$password])
        ->get('employee_table');

        if($result){
            return $result->row()->main_employee_id;
=======
    public function checkADMAuthLogin($username){
        $login = $this->db->where(['admin_username'=>$username])->get('admin_table');
        if($login->num_rows()){
            return $login->row()->admin_id;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }else{
            return false;
        }
    }

<<<<<<< HEAD
}
=======
    public function checkEmpAuthLogin($email){
        $login = $this->db->where(['employee_email'=>$email])->get('employee_table');
        if($login->num_rows()){
            return $login->row()->main_employee_id;
        }else{
            return false;
        }
    }

    public function GetHashinUser($email){
        $hashing = $this->db->where(['employee_email'=>$email])
        ->get('employee_table');
        if($hashing->num_rows()){
            return $hashing->row()->emp_password;
        }else{
            return false;
        }
    }

    public function getHashinAdmin($username){
        $hashing = $this->db->where(['admin_username'=>$username])
        ->get('admin_table');
        if($hashing->num_rows()){
            return $hashing->row()->admin_password;
        }else{
            return false;
        }
    }

    public function checkOldPass($id){
        $q=$this->db->where('admin_id', $id)
            ->get('admin_table');
            if($q->num_rows()){
                return $q->row()->admin_password;
            }else
            {
            return false;
            }
    }

    public function checkOldEmpPass($id){
        $q=$this->db->where('main_employee_id', $id)
        ->get('employee_table');
        if($q->num_rows()){
            return $q->row()->emp_password;
        }else
        {
            return false;
        }
    }

    public function updatePassAdmin($admin_ID, $new_password){
        $id= array('admin_id' => $admin_ID);
        $pass = array('admin_password' => $new_password);
        $this->db->where($id);   
        $this->db->update('admin_table', $pass);  
        return $this->db->affected_rows();
    }

    public function updatePassEmployee($emp_ID, $new_password){
        $id= array('main_employee_id' => $emp_ID);
        $pass = array('emp_password' => $new_password);
        $this->db->where($id);   
        $this->db->update('employee_table', $pass);  
        return $this->db->affected_rows();
    }

    public function checkEmailID($email){
        $q=$this->db->where('employee_email', $email)
        ->get('employee_table');
        if($q->num_rows()){
            return $q->row();
        }else
        {
            return false;
        }
    }

}
?>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
