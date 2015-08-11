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
                  $this->load->helper('url');



    }
    public function cargaReporte()
	{
        $_SESSION["Ausente"]=0;
        $_SESSION["Asistio"]=0;
        $_SESSION["total"]=0;
        $_SESSION["numero_cuenta"] =  $this->uri->segment(3);

    $id_horario= $_SESSION["clase"];


      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =  $this->reporteIndexModelo->getNombre($id_horario);

    $this->load->view('reporteIndex',$resultado);

	}



    public function  cargaReportePrincipal()
    {

    $id_horario= $this->input->post('seleccionado');
      $_SESSION["clase"]=$id_horario;
      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =   $this->reporteIndexModelo->getPrincipa($id_horario);

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
