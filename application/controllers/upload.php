<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './assets/images'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('home_view', $data); 
         } 
      } 
         public function upload_profile_img($name)
   {
      
      $url=base_url();
      $image_name = uniqid().'_image.png';
      $config = array();
      $config['upload_path'] ='assets/images';
        $config['file_name'] = $image_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'gif|jpg|png|jpeg';
        $config["max_size"] = '2048';
        $config["max_width"] = '1024';
        $config["max_height"] = '780';
        $this->load->library('upload', $config);
          
      $this->upload->data();
      $this->upload->initialize($config);

        if(!$this->upload->do_upload()) 
        {               
            $this->data['error'] = $this->upload->display_errors();
            $error_msg=$this->upload->display_errors();
            //$previous_img=$this->buyer_model->pre_store_img($reg_id);
            $this->session->set_flashdata('error',$error_msg);
            redirect('admin/show_error_img','refresh');
         return 'profile-default.png';
        }
        else
        {
         return $image_name;
           // echo 'success';                          
        }  
   }
   } 
?>