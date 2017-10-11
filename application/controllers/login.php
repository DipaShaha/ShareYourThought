<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//$this->load->view('home_view');
		$this->load->view('login_view');
		//$this->load->view('register_view');
	}
	public function check_login(){
		 $this->load->helper(array('form','url'));


         $this->load->library('form_validation');
              
		    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'required');
       
        if ($this->form_validation->run() == false) 
			{    
				 $this->session->set_flashdata('log_error', validation_errors());
				// $message = $this->session->flashdata('log_error'); echo " ".$message; 
				 $this->load->view('login_view');
			}
		else{
			$this->load->model('login_model');
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
			$result=$this->login_model->is_user_exist($email,$pass);
			if(count($result)==1)
			{
				 
				 //$this->load->view('uhome_view');
				$data = array(
		                'username'  => $result[0]['uname'],
		                'user_id'  => $result[0]['id'],
		                'image'  => $result[0]['image'],
		                'logged_in' => TRUE
		            );

					$this->session->set_userdata($data);

				redirect('thought/index');
			
				
			}else{
				
                 $this->session->set_flashdata('log_error', 'Incorrect Username/Password');

                 $this->load->view('login_view');

			}
		}
			    
     }

}
