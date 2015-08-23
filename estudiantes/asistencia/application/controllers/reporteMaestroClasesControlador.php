<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReporteMaestroClasesControlador extends CI_Controller
{
    // $this->load->library('session');
       //    $this->load->model('reporteIndexModelo');

    function __construct()
    {
        parent::__construct();
                  $this->load->database();
                       $this->load->helper('form');
                          $this->load->helper('url');



    }


	public function cargaReporte()
	{

     $this->load->view('reporteMaestroClasesVista');

	}

    public function buscar()
	{
       $usuario= $this->input->post('nombre');
        echo $usuario;

	}

        public function imprimir()
	{


	}

     public function getDato()
    {
       $id_horario= $this->input->post('seleccionado');

         $d = array(
          'id_horario' => $id_horario);

        $this->session->set_userdata('id_horario', $d);

        $this->load->model('reporteMaestroClasesModelo');

        $resultado['resultado'] = $this->listaAlumnosMatriculadosModelo->getListaAlumnos($id_horario);

        $this->load->view('reporteMaestroClasesVista',$resultado);


    }

       private function get_user_data()
     {

     $this->load->model('reporteMaestroClasesModelo');
      $result= $this->clasesMaatrucladasMaestroModelo->get_user();


         return $result;
     }






}
