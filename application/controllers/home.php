<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct() {
		parent::__construct();
	
	}

	public function index()
	{
		$this->load->view('home_view');
		//$this->load->view('login_view');
		//$this->load->view('register_view');
	}

    public function all_thought()
	{
		 redirect('thought/get_all');
		//$this->load->view('login_view');
		//$this->load->view('register_view');
	}
}

?>
