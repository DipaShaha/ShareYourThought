<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thought_model extends CI_Model
{
// 	SELECT *
// FROM thought INNER JOIN user ON thought.user_id=user.id;

	public function insert($data)
	{

	    $this->db->insert('thought',$data);
	    return $this->db->affected_rows();

	}
	public function update($data,$thought_id){
		$this->db->where('id', $thought_id);
		$this->db->update('thought', $data);
	    return $this->db->affected_rows();
	}

	public function delete($thought_id){
		$this->db->where('id', $thought_id);
        $this->db->delete('thought'); 
        $this->db->where('thought_id', $thought_id);
        $this->db->delete('likes'); 
		
	}
	public function get_all(){

		$this->db->select('*,thought.id as thought_id');
		$this->db->from('thought');
		$this->db->join('user', 'thought.user_id = user.id');
		$this->db->order_by("time", "desc");
		$result = $this->db->get();
		return $result->result_array();

	}
	public function get_all_likes(){

		$this->db->select('*');
		$this->db->from('likes');
		$result = $this->db->get();
		return $result->result_array();

	}
	public function get_my_likes($user_id){

		$this->db->select('*,user_id as u_id,thought_id as t_id');
		$this->db->from('likes');
		$this->db->where('likes.user_id',$user_id);
		$result = $this->db->get();
		return $result->result_array();

	}

	public function get_my_thought($my_id){
		$this->db->select('*,thought.id as thought_id');
		$this->db->from('thought');
		$this->db->join('user', 'thought.user_id = user.id');
		$this->db->where('user.id',$my_id);
		$this->db->order_by("time", "desc");
		$result = $this->db->get();
		return $result->result_array();

	}
	 public function get_full_thought($thought_id)
    {
    	$this->db->select('*,thought.id as thought_id');
		$this->db->from('thought');
		$this->db->join('user', 'thought.user_id = user.id');
		$this->db->where('thought.id',$thought_id);
		$result = $this->db->get();
		return $result->result_array();

    }
    public function get_total_likes($thought_id){
    	$this->db->select('*');
		$this->db->from('likes');
		$this->db->where('thought_id',$thought_id);
		$result = $this->db->get();
		return $result->num_rows();

    	

    }
    public function is_like($thought_id,$my_id){
    	$this->db->select('*');
		$this->db->from('likes');
		$this->db->where('thought_id',$thought_id);
		$this->db->where('user_id',$my_id);
		$result = $this->db->get(); 
		return $result->num_rows();

    }
    public function update_my_like($data){
    	$this->db->insert('likes',$data);
    }
}