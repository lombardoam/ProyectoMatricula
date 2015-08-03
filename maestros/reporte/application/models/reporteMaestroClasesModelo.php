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
         $this->db->select('id_horario,hora, dia, edificio,maestro,seccion,clase');
                   $this->db->where('maestro', 'pedro gonzales');
                    $query = $this->db->get('horarios');



         return $query;

    }




}



?>
