<?php
class Users extends MY_controller
{
 public function index()
 {//pakek
  $this->load->view('admin/login');
 }
 public function register()
 {//pakek
  $this->load->view('admin/register');
 }
 
 public function welcome(){
	 $this->load->view('admin/dashboard');
}

public function logout()
	  {
		$this->session->unset_userdata('id');
		return redirect('login');
	  }
}

?>