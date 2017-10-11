<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thought extends CI_Controller {

	function __construct() {
        parent::__construct();
       $this->check_logged_in();
    }

	public function index()	{
		$data['title']="Add New Thought";
		$this->load->view('add_thought_view',$data);
		//$this->load->view('register_view');
		//$this->load->view('register_view');
	}
	
	public function full_view($thought_id){
		$this->load->model('thought_model');
		$data['title']="Complete thought";
		$data['thought']=$this->thought_model->get_full_thought($thought_id);
		$user_id=$this->session->userdata('user_id');
		
		$data['all_likes']=$this->thought_model->get_my_likes($user_id);

		$this->load->view('full_thought_view',$data);
	}
	public function edit_view($thought_id){
		$this->load->model('thought_model');
		$data['title']="Edit Thought";
		$data['thought']=$this->thought_model->get_full_thought($thought_id);
		// 	echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('edit_thought_view',$data);
	}
	public function delete($thought_id){
		$this->load->model('thought_model');
		$this->thought_model->delete($thought_id);
		$this->my_thought();

	}


	public function update(){	
		$thought_id=$this->input->post('thought_id'); echo $thought_id;
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title','required|min_length[1]|max_length[100]');
		$this->form_validation->set_rules('edi', 'Description','required');
        if ($this->form_validation->run() == false) 
			{    
				 $this->session->set_flashdata('thought_error', validation_errors());
				//echo validation_errors();

				 $this->edit_view($thought_id);
			}
		else
		{
			$this->load->model('thought_model');
			$title=$this->input->post('title');
			$desp=$this->input->post('edi');
			$thought_id=$this->input->post('thought_id');
			$time=date('Y-m-d H:i:s');
			$user_id=$this->session->userdata('user_id');

			$data=array(
			            "title"=>$title,
			            "desp"=>$desp,
			            "time"=>$time,
			            "user_id"=>$user_id
	                    );
            $row=$this->thought_model->update($data,$thought_id);
            if($row==1)
            {
                $this->my_thought();

            }else
            {
				 $this->session->set_flashdata('error', 'Thought Wasnt Saved!');
				 $this->edit_view($thought_id);
				 

             }
		}
    }
	public function insert(){
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title','required|min_length[1]|max_length[100]');
		$this->form_validation->set_rules('edi', 'Description','required');
        if ($this->form_validation->run() == false) 
			{    
				 $this->session->set_flashdata('thought_error', validation_errors());
				//echo validation_errors();
				  $data['title']="Add New Thought";
				 $this->load->view('add_thought_view',$data);
			}
		else
		{
			$this->load->model('thought_model');
			$title=$this->input->post('title');
			$desp=$this->input->post('edi');
			$time=date('Y-m-d H:i:s');
			$user_id=$this->session->userdata('user_id');

			$data=array(
			            "title"=>$title,
			            "desp"=>$desp,
			            "time"=>$time,
			            "user_id"=>$user_id
	                    );
            $row=$this->thought_model->insert($data);
            if($row==1)
            {
                // $this->load->view('add_thought_view');
                $this->my_thought();
            }else
            {
				 $this->session->set_flashdata('thought_error', 'Thought Wasnt Saved!');
				 $data['title']="Add New Thought";
				 $this->load->view('add_thought_view',$data);

             }
		}
	}

    public function get_all()
     {$user_id=$this->session->userdata('userid');
     	$this->load->model('thought_model');
     	$data['title']="All thoughts";
		$data['all_thought']=$this->thought_model->get_all();
		$data['all_likes']=$this->thought_model->get_all_likes();

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	    $this->load->view('all_thought_view',$data);

     }

    public function my_thought(){
     	$this->load->model('thought_model');
     	$user_id=$this->session->userdata('user_id');
     	$data['title']="My thoughts";
		
		$data['all_likes']=$this->thought_model->get_my_likes($user_id);
		$data['my_thought']=$this->thought_model->get_my_thought($user_id);
		
		 // echo "<pre>";
		 // print_r($data);
		 // echo "</pre>";
	   $this->load->view('my_thought_view',$data);

     }

    public function savelikes(){

		$thought_id=$this->input->post('thought_id');
		$user_id=$this->session->userdata('user_id');

		$txt="not liked";

		//check nd update like

		$is_like_query = $this->db->query('select * from likes 
			                            where thought_id="'.$thought_id.'" 
			                            and user_id = "'.$user_id.'"');
		$is_like = $is_like_query->num_rows();
		if($is_like==0){
			$data=array('thought_id'=>$thought_id,'user_id'=>$user_id);
			$this->db->insert('likes',$data);
			$this->db->query('update thought set likes=likes+1 where id="'.$thought_id.'"');
			$txt="Liked";

		}

		//get latest like number

		$this->db->select('*');
		$this->db->from('thought');
		$this->db->where('thought.id',$thought_id);
		$result = $this->db->get();
		$res= $result->result_array();
		$likes=$res[0]['likes'];
		//get latest like number

		$msg['res'] = $txt; 
		$msg['total_likes'] = $likes; 

		
		$this->output->set_output(json_encode($msg)); 
		//update thought set likes=likes+1 where id=5
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



	public function tryout(){
		$this->db->select('*');
		$this->db->from('thought');
		$this->db->where('thought.id',2);
		$result = $this->db->get();
		$res= $result->result_array();
		$likes=$res[0]['likes'];
		echo $likes;

	}
	

}
