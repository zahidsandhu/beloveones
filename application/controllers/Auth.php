<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('form_validation','session');
		$this->load->model("my_model");
		
		
	}

	// public function checkLogin()
	// {
	// 	if ($this->session->userdata('name')) {
	// 		redirect('admin');
	// 	}
	// }

	public function admin_login()
	{
		$this->load->view('admin/pages/login');
	}

	public function admin_insert(){
		
		 if ($this->input->post()) {
		 		$this->form_validation->set_rules('username','Username','trim|required');
		 		$this->form_validation->set_rules('password','Password','trim|required');

		 	if($this->form_validation->run() == true){
		 		$username = $this->input->post('username');
		 		$password = $this->input->post('password');
		 		$check=$this->my_model->adminlogin($username,$password);

		 		if ($check) {
		 			$array = array('name'=>$username);
		 			$this->session->set_userdata($array);
		 			redirect('admin');
		 		}else{
		 			$this->session->set_flashdata('error','Username or Password is invalid');
		 		}
		 	}
		 	
		 }
		 
		 $this->load->view('admin/pages/login');
	}

	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}


?>