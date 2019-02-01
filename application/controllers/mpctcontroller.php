<?php

class Mpctcontroller extends CI_controller
{


    public function itm()
    {


      // model load
      //$this->load->model('Mpctmodel');
      $data = $this->Mpctmodel->getdata();  //sub model

      echo "<pre>";
      print_r($data); 



      $this->load->view('mpct.php');

    }


}