<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function checkDuplicate($data)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('mob',$data['mob']);
		$this->db->where_in('email',$data['email']);
		
		return $this->db->count_all_results();
	}
	function checkUser($data){
		
		$this->db->select('email');
		$this->db->select('mob');
		$this->db->select('user_name');
		$this->db->from('users');
		$this->db->where_in('email',$data['email']);
		$this->db->where('password',$data['password']);
		$query=$this->db->get();
		$res = $query->result(); // as object
        $res = $query->result_array();
		return $res;
	}
	function insertUser($data)
	{
		if($this->db->insert('users', $data))
		{   
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
	}
	function updateUser($data)
	{
		
		if($this->db->update('users',$data,array('email' =>$data['email'],'mob'=>$data['mob'])))
		{   
			
		
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
	}
	function edit_profile($data)
	{   
		if($this->db->update('users',$data,array('email' =>$this->session->userdata('email')))){
			
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
		
	}
	function user_details()
	{   
		$this->db->select('user_name');
		$this->db->select('mob');
		$this->db->select('email');
		$this->db->select('password');
		$this->db->select('picture');
		$this->db->from('users');
		$this->db->like('email', $this->session->userdata('email'));
		return $this->db->get()->result();
		
	}
	
	function check_recently_movie($data)
	{
		$this->db->select('movie_id');
		$this->db->from('movie_recently');
		$this->db->like('movie_id',$data['movie_id']);
		return $this->db->count_all_results();
	}
	
	function recently_movie($data)
	{   
		if($this->db->insert('movie_recently', $data))
		{   
			$this->db->close();
			unset($this->db);
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
		
	}
	function continue_watching()
	{   
		$this->db->select('title');
		$this->db->select('src');
		$this->db->select('current_time');
		$this->db->select('thumbnail');
		$this->db->select('category');
		$this->db->select('navbar');
		$this->db->select('rate');
		$this->db->select('movie_id');
		$this->db->from('movie_recently');
		$this->db->where('user_email', $this->session->userdata('email'));
		$this->db->order_by("id", "DESC");
		$this->db->limit(10);  
		$value= $this->db->get()->result();
		return $value;
	}
	
	function getting_movie($movie_id)
	{   
		$this->db->select('title');
		$this->db->select('src');
		$this->db->select('current_time');
		$this->db->select('thumbnail');
		$this->db->select('category');
		$this->db->select('navbar');
		$this->db->select('rate');
		$this->db->select('movie_id');
		$this->db->from('movie_recently');
		$this->db->where('movie_id',$movie_id);
		$value= $this->db->get()->result();
		
		return $value;
	}
	function recently_movie_update($data)
	{   
		if($this->db->update('movie_recently', $data,array('movie_id' =>$data['movie_id'])))
		{   
			
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
		
	}
	function view_movie($data)
	{   
		if($this->db->insert('digivive_view', $data))
		{   
			$this->db->close();
			unset($this->db);
			return true;
		}
		else
		{    
			$this->db->close();
			unset($this->db);
			return false;
		}
		
	}
	

}	