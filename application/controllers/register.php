<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		//$this->load->view('home_view');
		$this->load->view('register_view');
		//$this->load->view('register_view');
	}
	public function check_register(){
		 $this->load->helper(array('form','url'));


         $this->load->library('form_validation');
              
		       $this->form_validation->set_rules(
		        'uname', 'Username',
		        'required|min_length[4]|max_length[12]'
			);
		     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('repass', 'Password Confirmation', 'required|matches[pass]');
		                
             

       
        if ($this->form_validation->run() == false) 
			{    
				 $this->session->set_flashdata('error', validation_errors());
				//echo validation_errors();
				 $this->load->view('register_view');
			}
		else{
			$this->load->model('login_model');
			$uname=$this->input->post('uname');
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
			$result=$this->login_model->is_email_exist($email);
			if(count($result)>=1)
			{
				 $this->session->set_flashdata('error', 'Email Already Exist for an account!');
				//echo validation_errors();
				 $this->load->view('register_view');
				
				
			}else{
				
					 $data=array(
			            "uname"=>$uname,
			            "email"=>$email,
			            "image"=>"default.png",
			            "pass"=>$pass
	                    );
                     $row=$this->login_model->insert($data);
                     if($row==1){
                     	$this->session->set_flashdata('success', 'Successfully Registered!Login to Continue!');

                     	$this->load->view('login_view');
                     }else{

				 $this->session->set_flashdata('error', 'Registration Unsuccessfull!!');
				//echo validation_errors();
				 $this->load->view('register_view');

                     }
			}
		}
			    
     }
	

}
