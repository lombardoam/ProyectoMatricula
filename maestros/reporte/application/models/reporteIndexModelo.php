<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class ReporteIndexModelo extends CI_Model
{
 function __construct()
    {
      parent::__construct();
                       $this->load->database();
                    $this->load->helper('form');


    }

    function getListaClases($id_maestro)
    {


         $this->db->select('cursos.nombre_curso');
         $this->db->from('cursos');
         $this->db->join('programacion_cursos', 'programacion_cursos.codigo_curso = cursos.codigo_curso');
         $this->db->where('programacion_cursos.id_empleado', $id_maestro);
         $query = $this->db->get();

         return $query;

    }


    function getNombre($id_programacion)
    {

        $this->db->distinct();
     $this->db->select('horarios.maestro, horarios.clase, alumnos.nombre, alumnos.id_alumno,asistencia.estado,asistencia.fecha');

     $this->db->from('horarios');
    $this->db->join('matriculado', 'matriculado.id_horario ='.$id_programacion);
         $this->db->where('horarios.maestro', 'pedro gonzales');
                $this->db->join('alumnos', 'alumnos.id_alumno = matriculado.id_alumno');
                        $this->db->join('asistencia', 'asistencia.id_horario = horarios.id_horario');
        $this->db->group_by('alumnos.id_alumno');






         $query = $this->db->get();




         return $query;

    }
}


/*/

                 $this->db->where('matriculado.id_horario', $id_programacion);


        $this->db->distinct();
     $this->db->select('horarios.maestro, horarios.clase, alumnos.nombre, alumnos.id_alumno,asistencia.estado,asistencia.fecha');

     $this->db->from('horarios');

                 $this->db->where('horarios.maestro', 'pedro gonzales');
                $this->db->join('alumnos', 'alumnos.id_alumno = matriculado.id_alumno');
                        $this->db->join('asistencia', 'asistencia.id_horario = horarios.id_horario');
        $this->db->group_by('alumnos.id_alumno');

/*/


