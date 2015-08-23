<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
function __construct()
    {
        parent::__construct();

                      $this->load->database();
                   $this->load->helper('form');
    $this->load->helper('url');

    }

	public function index()
	{
         $this->load->model('clasesMaatrucladasMaestroModelo');
         $data['user_data']=$this->get_user_data();

         $this->load->view('clasesMaatrucladasMaestroVista',$data);

	}



     private function get_user_data()
     {

     $this->load->model('clasesMaatrucladasMaestroModelo');
      $result= $this->clasesMaatrucladasMaestroModelo->get_user();


         return $result;
     }



}


