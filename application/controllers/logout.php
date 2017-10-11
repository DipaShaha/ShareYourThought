<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct() {
        parent::__construct();
      $this->check_logged_in();
    }
	
	public function index()
	{
		
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		redirect('login','refresh');
	}

	public function check_logged_in(){
	     $uname=$this->session->userdata('username');
        if($uname==Null)
		{
			$this->session->unset_userdata('username');
			$this->session->set_flashdata('error', 'You need to login first!!!');
			redirect('login/index');
		}
	}
}

