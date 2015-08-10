<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
  //  $this->load->helper('form');
    // $this->load->library('session');
       //    $this->load->model('reporteIndexModelo');


    function __construct()
    {
        parent::__construct();
                  $this->load->database();
               $this->load->helper('form');


    }


	public function index()
	{


        $this->load->model('reporteMaestroClasesModelo');
         $data['user_data']=$this->get_user_data();

         $this->load->view('reporteMaestroClasesVista',$data);

	}



    public function cargarLista($clase)
    {
        $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =   $this->reporteIndexModelo->getListaClases('1');

     $this->load->view('reporteIndex',$resultado);

    }

    private function get_user_data()
     {

     $this->load->model('reporteMaestroClasesModelo');
      $result= $this->reporteMaestroClasesModelo->get_user();


         return $result;
     }




}



