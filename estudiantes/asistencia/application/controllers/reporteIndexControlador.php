<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReporteIndexControlador extends CI_Controller
{
    // $this->load->library('session');
       //    $this->load->model('reporteIndexModelo');

    function __construct()
    {
        parent::__construct();
                  $this->load->database();
                       $this->load->helper('form');
                  $this->load->library('session');



    }
    public function cargaReporte()
	{
         $_SESSION["Ausente"]=0;
        $_SESSION["Asistio"]=0;
        $_SESSION["total"]=0;

    $cuenta= $this->input->post('seleccionado');



      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =  $this->reporteIndexModelo->getNombre($cuenta);

    $this->load->view('reporteIndex',$resultado);

	}



    public function  cargaReportePrincipal()
    {

    $cuenta= $this->input->post('seleccionado');
      $_SESSION["clase"]=$cuenta;
      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =   $this->reporteIndexModelo->getPrincipa($cuenta);

    $this->load->view('reporMaster',$resultado);


    }




	public function index()
	{


	}

    public function buscar()
	{
       $usuario= $this->input->post('nombre');
        echo $usuario;

	}

        public function imprimir()
	{


	}







}
