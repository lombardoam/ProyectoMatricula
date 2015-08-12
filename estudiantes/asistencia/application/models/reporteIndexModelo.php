<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class ReporteIndexModelo extends CI_Model
{
 function __construct()
    {
      parent::__construct();
                       $this->load->database();
                    $this->load->helper('form');
                       $this->load->library('session');
                        $this->load->helper('url');



    }

    function getListaClases($id_maestro)
    {

                 $this->db->select('cursos.nombre_curso');
                 $this->db->from('usuarios');
                 $this->db->join('empleados', 'usuarios.nombre = empleados.nombres');
                 $this->db->join('programacion_cursos', 'programacion_cursos.id_empleado = empleados.id_empleado');
                 $this->db->join('cursos', 'cursos.id_curso = programacion_cursos.id_curso');
                 $this->db->where('empleados.nombres', $_COOKIE["nombre"]);
                 $this->db->where('empleados.apellidos', $_COOKIE["apellido"]);
                 $query = $this->db->get();





    }


    function setAsistioYausentes()
    {
    $this->db->select('count(*) AS total_ausente');
         $this->db->from('asistencia');
         $this->db->where( 'asistencia.estado','Ausente');
$this->db->where('asistencia.id_estudiante', $_SESSION['di']);
        $this->db->where('asistencia.id_programacion', $_SESSION["clase"]);



         $query2 = $this->db->get();


 foreach ($query2->result() as &$valor)
            {
                       $_SESSION['Ausente']=$valor->total_ausente;
            }


        $this->db->select('count(*) AS total_asistio');
         $this->db->from('asistencia');
         $this->db->where( 'asistencia.estado','Asistio');
$this->db->where('asistencia.id_estudiante', $_SESSION['di']);
 $this->db->where('asistencia.id_programacion', $_SESSION["clase"]);



         $query2 = $this->db->get();


 foreach ($query2->result() as &$valor)
            {
                    $_SESSION['Asistio']=$valor->total_asistio;
            }

        $n1= $_SESSION["Ausente"];  $n2= $_SESSION["Asistio"];$total =$n1+$n2;

                            $_SESSION['total']= $total;

    }


    function getNombre($id_programacion)
    {
        $_SESSION["clase"] =$id_programacion;

        $this->setAsistioYausentes();


     $this->db->select('estudiantes.nombres,estudiantes.apellidos,estudiantes.num_cuenta,asistencia.fecha,asistencia.estado,cursos.nombre_curso');

     $this->db->from('asistencia');
    $this->db->join('programacion_cursos', 'asistencia.id_programacion =programacion_cursos.id_programacion');
                        $this->db->join('cursos', 'cursos.id_curso = programacion_cursos.id_programacion');
                        $this->db->join('matriculas', 'matriculas.id_programacion = programacion_cursos.id_programacion');
                        $this->db->join('estudiantes', 'estudiantes.id_estudiante =asistencia.id_estudiante');

              $this->db->where('asistencia.id_estudiante', $_SESSION['di']);
                $this->db->where('asistencia.id_programacion', $id_programacion);



$this->db->group_by('id_asistencia');

                 $query = $this->db->get();





         return $query;

    }



function getPrincipa($id_programacion)
    {


             $this->db->select('estudiantes.num_cuenta,estudiantes.nombres,estudiantes.apellidos, cursos.nombre_curso,estudiantes.id_estudiante');
             $this->db->from('estudiantes');
             $this->db->join('matriculas', 'estudiantes.id_estudiante = matriculas.id_estudiante ');
             $this->db->join('programacion_cursos', 'programacion_cursos.id_programacion = matriculas.id_programacion');
             $this->db->join('cursos', 'cursos.id_curso = programacion_cursos.id_curso');
         $this->db->where('programacion_cursos.id_programacion', $id_programacion);

$this->db->group_by('estudiantes.num_cuenta');


$query = $this->db->get();


         return $query;


    }
}



