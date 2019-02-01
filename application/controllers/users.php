<?php

class Users extends CI_controller
{
	public function User()
	{   
		//model load
		$this->load->model('Usermodel');
	    $data['users']=$this->Usermodel->getUserdata();   //users key 
		//print_r($data);
		$this->load->view('users/user',$data);
	}
}