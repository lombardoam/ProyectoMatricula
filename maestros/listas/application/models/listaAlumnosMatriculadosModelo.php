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

         $this->db->select('estudiantes.nombres, estudiantes.apellidos');
         $this->db->from('estudiantes');
         $this->db->join('matriculas', 'estudiantes.id_estudiante = matriculas.id_estudiante');
         $this->db->where('matriculas.id_programacion', $id);
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
         $fecha=$this->getFecha();

           $data = $this->session->userdata('id_horario');
           $id_horario;

            foreach ($data as &$valor){ $id_horario= $valor[0]; }

            $id_horario;
           $id_alumno;

          for ($i = 0; $i < count($nombre_alumno); $i++)
          {
            // echo $id[$i];

           $this->db->select('id_estudiante');
           $this->db->from('estudiantes');
           $this->db->where('nombres', $nombre_alumno[$i]);
           $query = $this->db->get();

            foreach ($query->result() as &$valor)
            {

              $this->db->insert('asistencia', array('id_programacion'=>$id_horario,
                       'id_estudiante'=>$valor->id_estudiante,
                   'fecha'=>$fecha,
                   'estado'=>'Asistio',
                    'id_asistencia'=> 0,
                    'id_periodo'=>1));
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

           $this->db->select('id_estudiante');
           $this->db->from('estudiantes');
           $this->db->where('nombres', $nombre_alumno[$i]);
           $query = $this->db->get();

            foreach ($query->result() as &$valor)
            {

              $this->db->insert('asistencia', array('id_programacion'=>$id_horario,
                       'id_estudiante'=>$valor->id_estudiante,
                   'fecha'=>$fecha,
                   'estado'=>'Ausente',
                    'id_asistencia'=> 0,
                    'id_periodo'=>1));
            }

          }

     }

}



?>
