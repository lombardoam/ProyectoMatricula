<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class ReporteMaestroClasesModelo extends CI_Model
{
 function __construct()
    {
      parent::__construct();
                       $this->load->database();
          $this->load->library('session');
        $this->load->helper('date');
    }

    function get_user()
    {




$this->db->select('cursos.nombre_curso,programacion_cursos.hora_inicio,programacion_cursos.hora_termina,programacion_cursos.dias,aulas.num_aula,programacion_cursos.seccion, edificios.nombre,programacion_cursos.id_programacion');

                $this->db->from('matriculas');

        $this->db->join('estudiantes',
                        'matriculas.id_estudiante = estudiantes.id_estudiante');

        $this->db->join('programacion_cursos',
                        'programacion_cursos.id_programacion = matriculas.id_programacion');

         $this->db->join('cursos',
                        'cursos.id_curso = programacion_cursos.id_curso');

          $this->db->join('aulas',
                        'aulas.id_aula = programacion_cursos.id_aula');

        $this->db->join('edificios',
                        'edificios.id_edificio = aulas.id_edificio');

        $this->db->where('estudiantes.nombres', $_COOKIE["nombre"]);
                 $this->db->where('estudiantes.apellidos', $_COOKIE["apellido"]);

$query = $this->db->get();


        return $query;


    }




}



?>
