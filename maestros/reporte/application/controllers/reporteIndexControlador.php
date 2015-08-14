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

    public function cambiarEstado()
    {

         $this->load->model('reporteIndexModelo');
             $resultado['resultado'] =  $this->reporteIndexModelo->cargar($this->uri->segment(3));

          $id_horario= $_SESSION["clase"];


      $this->load->model('reporteIndexModelo');

     $resultado['resultado'] =  $this->reporteIndexModelo->getNombre($id_horario);
     $resultado['resultado2'] =  $this->getHora($id_horario);


    $this->load->view('reporteIndex',$resultado);


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
     $resultado['resultado2'] =  $this->getHora($id_horario);


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

    public function  cargaReportePrincipal()
    {

    $id_horario= $this->input->post('seleccionado');
      $_SESSION["clase"]=$id_horario;
      $this->load->model('reporteIndexModelo');

   $cuentaVieja =$_SESSION['numero_cuenta'];

     $resultado['resultado'] =   $this->reporteIndexModelo->getPrincipa($id_horario);

     $resultado['resultado2'] =  $this->getHora($id_horario);
$ausente= array();
$asistio= array();

        foreach ($resultado['resultado']->result() as &$valor)
               {
           $_SESSION['numero_cuenta'] =$valor->id_estudiante;
           $this->reporteIndexModelo->seteo();
           $ausente[]=$_SESSION['Ausente1'];
           $asistio[]=$_SESSION['Asistio1'];

                }

        $resultado['resultado3'] =$ausente;
         $resultado['resultado4'] =$asistio;

$_SESSION['numero_cuenta']=$cuentaVieja;


    $this->load->view('reporMaster',$resultado);


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
