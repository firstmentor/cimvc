<?php

class Userdatabase extends CI_controller
{
	public function Userdata()
	{   
		//model load
		$this->load->model('Userdatabasemodel');
	    $data['users']=$this->Userdatabasemodel->getdatabase();   //users key 
		//print_r($data);
		$this->load->view('users/userdatabase',$data);
	}
}