<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_model','lm');
    }
    
        public function index(){
            $this->load->view('home/include/header');
            $this->load->view('home/index');
            $this->load->view('home/include/footer');
        }


        public function adminLogin(){
            $this->load->view('home/include/header');
            $this->load->view('home/admin-login');
            $this->load->view('home/include/footer');
        }


    public function authLogin(){
<<<<<<< HEAD
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $loginId = $this->lm->checkauthLogin($username, $password);
        if($loginId){
            $this->session->set_userdata('login_id', $loginId);
            return redirect('Admin/index');
=======

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $hash = $this->lm->getHashinAdmin($username);

        if(password_verify($password, $hash)){

            $admId = $this->lm->checkADMAuthLogin($username);
            if($admId){
                $this->session->set_userdata('login_id', $admId);
                return redirect('Admin/index');
            }else{
                $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
                return redirect('Login/adminLogin');
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }else{
            $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
            return redirect('Login/adminLogin');
        }

    }

    // employee login

    public function employeeLogin(){
<<<<<<< HEAD
            $this->load->view('home/include/header');
            $this->load->view('home/employee-login');
            $this->load->view('home/include/footer');
=======
        $this->load->view('home/include/header');
        $this->load->view('home/employee-login');
        $this->load->view('home/include/footer');
>>>>>>> 8ce454d (new update employee portal v1.1.0)
    }

    public function empLoginAuth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
<<<<<<< HEAD

        $empId = $this->lm->checkEmpAuthLogin($email, $password);

        if($empId){
            $this->session->set_userdata('emp_login_id', $empId);
            return redirect('Employee/index');
=======
        $hash = $this->lm->getHashinUser($email);
        if(password_verify($password, $hash)){
            $empId = $this->lm->checkEmpAuthLogin($email);
            if($empId){
                $this->session->set_userdata('emp_login_id', $empId);
                return redirect('Employee');
            }else{
                $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
                return redirect('Login/employeeLogin');
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }else{
            $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
            return redirect('Login/employeeLogin');
        }
<<<<<<< HEAD

=======
    }

    public function changeAdminPassword(){
        $this->load->view('home/include/header');
        $this->load->view('home/admin-password-change');
        $this->load->view('home/include/footer');
    }

    public function changeEmployeePassword(){
         $this->load->view('home/include/header');
        $this->load->view('home/employee-password-change');
        $this->load->view('home/include/footer');
    }
       
    
   
    public function updateAdminPass(){

        $old_password = $this->input->post('old_password');
        $Id = $this->session->userdata('login_id');

        if($Id){
        	$hash_pass = $this->lm->checkOldPass($Id);
        	if(password_verify($old_password, $hash_pass)){
        		$new_password = $this->input->post('new_password');
        		$confirm_password = $this->input->post('confirm_password');

        		if(($new_password)===$confirm_password){

                    $password = password_hash($new_password , PASSWORD_DEFAULT);
        			$res = $this->lm->updatePassAdmin($Id, $password);

        			if($res){
        				$this->session->set_flashdata('update_password','Your Password updated successfully.');
        				redirect('Login/adminLogin');
        			}

        		}else{
        			$this->session->set_flashdata('password_not_match','Please Try Again..');
        			redirect('Login/changeAdminPassword');
        		}

        	}else{
        		$this->session->set_flashdata('password_not_match','Your password mismatch');
        		redirect('Login/changeAdminPassword');
        	}

        }else{
            redirect('Login/adminLogin');
        }
    }

    public function updateEmployeePass(){

        $old_password = $this->input->post('old_password');
        $Id = $this->session->userdata('emp_login_id');

        if($Id){
        	$hash_pass = $this->lm->checkOldEmpPass($Id);

        	if(password_verify($old_password, $hash_pass)){
        		$new_password = $this->input->post('new_password');
        		$confirm_password = $this->input->post('confirm_password');

        		if(($new_password)===$confirm_password){

                    $password = password_hash($new_password , PASSWORD_DEFAULT);
        			$res = $this->lm->updatePassEmployee($Id, $password);

        			if($res){
        				$this->session->set_flashdata('update_password','Your Password updated successfully.');
        				redirect('Login/employeeLogin');
        			}

        		}else{
        			$this->session->set_flashdata('password_not_match','Please Try Again..');
        			redirect('Login/changeEmployeePassword');
        		}

        	}else{
        		$this->session->set_flashdata('password_not_match','Your password mismatch');
        		redirect('Login/changeEmployeePassword');
        	}

        }else{
            redirect('Login/employeeLogin');
        }
    }

    // Forgot Password


    public function forgotPasswordView(){
        $this->load->view('home/include/header');
        $this->load->view('home/forgot-password');
        $this->load->view('home/include/footer');
    }

    public function forgotEmailSend(){
        $email = $this->input->post('email');
        $correct = $this->lm->checkEmailID($email);

        if($correct){

            $username = $correct->employee_email;
            $user_id = $correct->main_employee_id;
            $token = rand();

              $from_email = "nadeem.qureshi@bimcap.com";
              $to_email = $email;
              $emailContent = 'Hello, '.$username.' Click here too activate your account '.' https://bimcapability.com/eep/index.php/Login/updateForgotPassword/'.$token;

              $this->load->library('email');
              $this->email->from($from_email, 'BIMCAP');
              $this->email->to($to_email);
              $this->email->subject('Password Reset.');
              $this->email->message($emailContent);

              if($this->email->send()){
                  $this->session->set_userdata('forgot_token', $token);
                  $this->session->set_userdata('user_id', $user_id);
                //   $this->session->set_flashdata('Please check your mail. We have sent you a link. Thank you.','send_mail');
                 redirect('Login/checkEmailPage/'.$token);
              }else{
                //   $this->session->set_flashdata('entercorrectmail', 'yes');
                  redirect('Login/forgotPasswordView');
              }

        }else{
            // $this->session->set_flashdata('entercorrectmail','yes');
            redirect('Login/forgotPasswordView');
        }
    }

    public function checkEmailPage($token){

        if($this->session->userdata('forgot_token')==$token){
            $this->load->view('home/include/header');
            $this->load->view('home/check-email-page');
            $this->load->view('home/include/footer');
        }else{
            redirect('Login/forgotPasswordView');
        }
       
    }

    public function updateForgotPassword($token){

        if($this->session->userdata('forgot_token')==$token){
            $this->load->view('home/include/header');
            $this->load->view('home/update-forgot-password');
            $this->load->view('home/include/footer');
        }else{
            redirect('Login/forgotPasswordView');
        }

    }

    public function setForgotPassword(){

        if($this->session->userdata('forgot_token')){

            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');
    
            if(($new_password)===$confirm_password){

                $user_id = $this->session->userdata('user_id');
    
                $password = password_hash($new_password , PASSWORD_DEFAULT);
                $res = $this->lm->updatePassEmployee($user_id, $password);
    
                if($res){
                    $this->session->set_flashdata('update_password','Your Password updated successfully.');
                    redirect('Login/employeeLogin');
                }
    
            }else{
                $this->session->set_flashdata('password_not_match','Please Try Again..');
                redirect('Login/forgotPasswordView');
            }

        }else{
            redirect('Login/forgotPasswordView');
        }
>>>>>>> 8ce454d (new update employee portal v1.1.0)
    }

}
?>