<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class ListaAlumnosMatriculadosModelo extends CI_Model
{
 function __construct()
    {
      parent::__construct();
                       $this->load->database();
          $this->load->library('session');
        $this->load->helper('date');
    }

     function getListaAlumnos($id)
    {

         $this->db->select('alumnos.nombre');
         $this->db->from('matriculado');
         $this->db->join('alumnos', 'alumnos.id_alumno = matriculado.id_alumno');
         $this->db->where('matriculado.id_horario', $id);
         $query = $this->db->get();

         return $query;

    }


    function getFecha()
    {

        $datestring = "%Y/%m/%d";
         $time = time();
         $fecha  =   mdate($datestring, $time);
    return $fecha;
    }

     function setListaAsistenciaAsistio($nombre_alumno)
    {
         //id nombre alumno
           $fecha=$this->getFecha();

           $data = $this->session->userdata('id_horario');
           $id_horario;

            foreach ($data as &$valor){ $id_horario= $valor[0]; }

            $id_horario;
           $id_alumno;

      // echo count($nombre_alumno);
          for ($i = 0; $i < count($nombre_alumno); $i++)
          {
            // echo $id[$i];


           $this->db->select('id_alumno');
           $this->db->from('alumnos');
           $this->db->where('nombre', $nombre_alumno[$i]);
           $query = $this->db->get();

            foreach ($query->result() as &$valor)
            {

              $this->db->insert('asistencia', array('id_horario'=>$id_horario,
                       'id_alumno'=>$valor->id_alumno,
                   'fecha'=>$fecha,
                   'estado'=>'Asistio'));
            }

          }

    }


    function setListaAsistenciaAusento($nombre_alumno)
    {

           $fecha=$this->getFecha();

           $data = $this->session->userdata('id_horario');
           $id_horario;

            foreach ($data as &$valor){ $id_horario= $valor[0]; }

            $id_horario;
           $id_alumno;

          for ($i = 0; $i < count($nombre_alumno); $i++)
          {
            // echo $id[$i];

           $this->db->select('id_alumno');
           $this->db->from('alumnos');
           $this->db->where('nombre', $nombre_alumno[$i]);
           $query = $this->db->get();

            foreach ($query->result() as &$valor)
            {

              $this->db->insert('asistencia', array('id_horario'=>$id_horario,
                       'id_alumno'=>$valor->id_alumno,
                   'fecha'=>$fecha,
                   'estado'=>'Ausente'));
            }

          }

     }

}



?>
