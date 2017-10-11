<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();
       $this->check_logged_in();
    }
  	function index(){
  		$this->load->view('add_thought_view');
  	}
   private function check_logged_in(){
	     $uname=$this->session->userdata('username');
        if($uname==Null)
		{
			$this->session->unset_userdata('username');
			$this->session->set_flashdata('error', 'You need to login first!!!');
			redirect('login/index');
		}
	}
	public function change_image_view(){
		$data['title']="Update Image";
  		$this->load->view('change_image_view',$data);
  	}
  	public function update_image(){
  			$user_id=$this->session->userdata('user_id');
			$url=base_url();
			$image_name = uniqid().'_image.png';
  		 $username=$this->session->userdata('username');
  		 $config['upload_path']   = './assets/images'; 
  		 $config['file_name'] = $image_name;
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 500; 
         $config['max_width']     = 4024; 
         $config['max_height']    = 968;  
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
			
         if ( ! $this->upload->do_upload('userfile')) {
         	 $this->session->set_flashdata('image_error', $this->upload->display_errors());
         	 $data["title"]="Change image";
            $this->load->view('change_image_view', $data); 
         }
			
         else { 
         	
            $data = array('upload_data' => $this->upload->data()); 
            $data=array(
			            "image"=>$image_name
	                    );
         	$this->load->model('user_model');
	        $row=$this->user_model->update_image_name($data,$user_id);
	        if($row==1)
	        {
	        	$this->session->set_userdata("image",$image_name);

	           // $this->full_view($thought_id);
	        }
            redirect('thought/my_thought');
         } 
  	}
	
}