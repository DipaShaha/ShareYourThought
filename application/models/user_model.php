<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	
	public function update_image_name($data,$user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->update('user', $data);
	    return $this->db->affected_rows();
	}
	
}