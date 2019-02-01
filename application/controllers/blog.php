<?php
class Blog extends CI_controller
{
   
   public function index()
   { 

   	  //helper load
   	 // $this->load->helper("url");
   	 //link tag (helper) load
   	 //$this->load->helper("html");

        //echo "hello admin";
      $this->load->helper('html');

   	  $this->load->view('blog/index');
   }

}


?>