<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class My_model extends CI_Model
{
	public function userlogin($username,$password)
	{
		// $username = $this->input->post('login_username');
		// $password =sha1($this->input->post('login_password'));
		$query = $this->db->get_where('users', array('email'=>$username,'password'=>$password));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	 }
	public function adminlogin($username,$password)
	{
		// $username = $this->input->post('login_username');
		// $password =sha1($this->input->post('login_password'));
		$query = $this->db->get_where('users', array('username'=>$username,'password'=>$password));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	}
	
	public function User_login($email,$password)
	{
		// $username = $this->input->post('login_username');
		// $password =sha1($this->input->post('login_password'));
		$query = $this->db->get_where('register', array('email'=>$email,'password'=>$password));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	}
	public function login($username,$password)
	{
		// $username = $this->input->post('login_username');
		// $password =sha1($this->input->post('login_password'));
		$query = $this->db->get_where('users', array('email'=>$username,'password'=>$password));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	}

	public function getRows($params = array()){
		$this->db->select('*');
		$this->db->from('tires');

		if(array_key_exists("id",$params)){
			$this->db->where('id',$params['id']);
			$query = $this->db->query('SELECT t.*,c.company_logo FROM tires t LEFT JOIN companies c ON c.id=t.tire_company');
			$result = $query->result_array();
		}else{
			// set start and limit
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
				$this->db->limit($params['limit'],$params['start']);
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params))
			{
				$this->db->limit($params['limit']);
			}

			if(array_key_exists("returnType",$params) && $params['returnType'] == 'count')
			{
				$result = $this->db->count_all_results();
			}else{
				$query = $this->db->query('SELECT t.*,c.company_logo FROM tires t LEFT JOIN companies c ON c.id=t.tire_company');
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}
		
		return $result;
	}


	public function get_table($table)
	{
		// $this->db->like('tire_width','select_width');
		$data = $this->db->get($table);
		$this->db->order_by('id', 'desc'); 
		return $data->result_array();		
	}


	public function get_single_row($table,$where='')
	{
		$query = $this->db->get_where($table,$where);
		return $ret = $query->row();
	}

	public function single_query($query)
	{		
		
		$data = $this->db->query($query);
		return $data->row();		
	}

	public function get_table_row($condition,$table)
	{
		$this->db->where($condition);		
		$data = $this->db->get($table);
		return $data->result_array();		
	}	

	public function checkNumRows($table,$where='')
	{
        $query=$this->db->get_where($table,$where);
        return  $query->num_rows();
    }

	public function get_table_row_query($query)
	{		
		$data = $this->db->query($query);
		return $data->result_array();		
	}

	public function insert_table($table,$user_val)
	{
		$this->db->insert($table,$user_val);
		return $this->db->insert_id();
	}

	public function delete_table($condition,$table)
	{
		$this->db->where($condition);
		return $data = $this->db->delete($table);
	}
	public function update_table($condition,$table,$user_val)
	{
		$this->db->where($condition);
		$this->db->set($user_val);
		$this->db->update($table);
		return $this->db->affected_rows();
	}
	Public function user_search($search_book){
		$this->db->like('first_name', $search_book);
		$this->db->or_like('last_name', $search_book);
		$this->db->or_like('mobile', $search_book);
		$query = $this->db->get('customer');
		return $query->result();
	}

	public function two_values($table,$value)
	{
		$data = $this->db->select('*')
        ->where((int) $value.' BETWEEN min_value AND max_value ORDER BY id DESC')->limit(1)
        ->get('charges');
		// $data = $this->db->get($table);
		return $data->result_array();		
	}

// get add to cart data function
	public function get_addToCart($condition,$table)
	{
		$this->db->where($condition);
		$query = $this->db->get($table);
		return $result = $query->row_array();
	}


}

