<?php

class Pncontroller extends CI_controller
{
 
    public function pn ()
    {   
    	$this->load->model('Pnmodel');  //load model

    	$data['pn']  =  $this->Pnmodel->getpndata();   //sub object call function 
        //print_r($data);
        // pn key  value ki form mai  associative array form mai data hai




    	$this->load->view('users/pn',$data); // $data pass  view ke sath
    }

}