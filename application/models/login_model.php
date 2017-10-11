<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	
	public function is_login_valid($username,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get();
		
		return $result->result_array();
	}
	public function is_email_exist($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$result = $this->db->get();
		
		return $result->result_array();

	}
	public function is_user_exist($email,$pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$result = $this->db->get();
		
		return $result->result_array();

	}
	public function insert($data){
	     $this->db->insert('user',$data);
	       return $this->db->affected_rows();

	}
	
}