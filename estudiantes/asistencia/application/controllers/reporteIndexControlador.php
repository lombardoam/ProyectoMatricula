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
       $_SESSION["Justifico"]=0;
        $_SESSION["total"]=0;
        $_SESSION["numero_cuenta"] =  $_SESSION["numcu"];

    $id_horario= $this->input->post('seleccionado');

     $_SESSION["clase"]=$id_horario;

      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =  $this->reporteIndexModelo->getNombre($id_horario);
     $this->getHora($id_horario);



    $this->load->view('reporteIndex',$resultado);

	}



function getHora($id_programacion)
    {



     $this->db->select('faltas.faltas');

     $this->db->from('cursos');
    $this->db->join('faltas','cursos.horas_teoricas = faltas.horas_teoricas');
    $this->db->join('programacion_cursos','cursos.id_curso = programacion_cursos.id_curso');


    $this->db->where('programacion_cursos.id_programacion', $id_programacion);
         $this->db->group_by('id_programacion');


                 $query = $this->db->get();

          foreach ($query->result() as &$valor)
               {
                 $_SESSION["FALTAS"] = $valor->faltas;
                }



    }




	public function index()
	{


	}

    public function buscar()
	{
       $usuario= $this->input->post('nombre');

	}

        public function imprimir()
	{


	}







}
