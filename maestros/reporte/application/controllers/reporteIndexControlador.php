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


    }
    public function cargaReporte()
	{
    $id_horario= $this->input->post('seleccionado');

      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =   $this->reporteIndexModelo->getNombre($id_horario);

        count($resultado);
    $this->load->view('reporteIndex',$resultado);

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
