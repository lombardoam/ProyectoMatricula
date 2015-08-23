<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaAlumnosMatriculadosController extends CI_Controller
{
 function __construct()
    {
        parent::__construct();
     $this->load->database();
     $this->load->helper('form');
     $this->load->library('session');
     $this->load->model('listaAlumnosMatriculadosModelo');
     $this->load->helper('url');

    }

	 public function index()
	{

	}



    public function getDato()
    {
       $id_horario= $this->input->post('seleccionado');
        $d = array(
          'id_horario' => $id_horario);

        $this->session->set_userdata('id_horario', $d);

        $this->load->model('listaAlumnosMatriculadosModelo');

        $resultado['resultado'] = $this->listaAlumnosMatriculadosModelo->getListaAlumnos($id_horario);

         $this->listaAlumnosMatriculadosModelo->setClase($id_horario);

     $this->load->view('listaAlumnosMatriculadosVista',$resultado);


    }

    public function setLista()
    {
                $asistio=$this->input->post('asistio');
                  $ausente=$this->input->post('ausente');
                          $justificado=$this->input->post('justificado');


                 $resultado['resultado'] = $this->listaAlumnosMatriculadosModelo->setListaAsistenciaAusento($ausente);

                    $resultado['resultado'] = $this->listaAlumnosMatriculadosModelo->setListaAsistenciaAsistio($asistio);
                            $resultado['justificado'] = $this->listaAlumnosMatriculadosModelo->setListaAsistenciaJustificado($justificado);


               $this->load->model('clasesMaatrucladasMaestroModelo');
         $data['user_data']=$this->get_user_data();



    echo"<script>
     function eventoAlerta()
    {
sweetAlert('Procesando!', 'La Asistencia a Sido Salvada', 'success');

    }

    window.onload = function() {
  eventoAlerta();
};</script>";

        $this->load->view('clasesMaatrucladasMaestroVista',$data);


    }

     private function get_user_data()
     {

     $this->load->model('clasesMaatrucladasMaestroModelo');
      $result= $this->clasesMaatrucladasMaestroModelo->get_user();


         return $result;
     }







}
