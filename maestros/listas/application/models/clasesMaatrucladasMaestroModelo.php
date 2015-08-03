<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class ClasesMaatrucladasMaestroModelo extends CI_Model
{
 function __construct()
    {
      parent::__construct();
                       $this->load->database();

    }

     function get_user()
    {
         $this->db->select('cursos.nombre_curso, programacion_cursos.hora_inicio,
programacion_cursos.hora_termina,
programacion_cursos.dias,
programacion_cursos.seccion,programacion_cursos.id_programacion,
aulas.num_aula,
edificios.nombre');

        $this->db->from('programacion_cursos');
        $this->db->join('periodos_academicos',
                        'periodos_academicos.id_periodo=     programacion_cursos.id_periodo');

        $this->db->join('empleados',
                        ' programacion_cursos.id_empleado =  empleados.id_empleado');

         $this->db->join('aulas',
                         ' aulas.id_aula = programacion_cursos.id_aula');

          $this->db->join('cursos',
                          'cursos.id_curso = programacion_cursos.id_curso');

         $this->db->join('edificios',
                         'edificios.id_edificio =  aulas.id_edificio');


         $query = $this->db->get();

         return $query;


    }
    /*/
     $this->db->select('id_horario,hora, dia, edificio,maestro,seccion,clase');
          $query = $this->db->get('horarios');/*/



}



?>
