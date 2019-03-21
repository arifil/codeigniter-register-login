<?php
class login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}
	
	//pekek
	public function index()
	{
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,md5($pass));
			if($login_id)
			{
			   $this->session->set_userdata('id',$login_id);
			   $this->session->set_userdata('username',$uname);
			   return redirect('users/welcome');
			}
			else
			{
			  $this->session->set_flashdata('Login_failed','Invalid Username/Password');
			  return redirect('login');
			}
	  }
	  else
	  {
	   $this->load->view('Admin/Login');
	  }

	}
	public function sendreg()
	 {
	  
		$this->form_validation->set_rules('username','User Name','required|alpha');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_rules('fullname','Full Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			//$post=$this->input->post(); 
			$post = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('username')),
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
			);
			$this->load->model('loginmodel','user');
			if($this->user->add_user($post))
			{
				 $this->session->set_flashdata('user','User added successfully');
				 $this->session->set_flashdata('user_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('user','User not added Please try again!!');
				$this->session->set_flashdata('user_class','alert-danger');
			}
			return redirect('login');
		}
		else
		{
			$this->load->view('admin/register');
		}
	 }
	 
	 
}