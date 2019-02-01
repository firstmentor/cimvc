<?php

class Userdatabasemodel extends CI_model
{
	public function getdatabase()
	{   
		

		$this->load->database();  //database load (super object)

	  $q = $this->db->query("select * from  users"); //$q object 
	  
     // echo"<pre>";
	 // print_r($q);

	  //$result = $q->result();  // result function array of object
	  //echo "<pre>";
      //print_r($result);

     //     $this->db->select("firstname");
     //     $this->db->where("id",1);
     // $q =$this->db->get("users"); //active record class

      return $q->result_array();
      //return $q->result_array();

	}

}