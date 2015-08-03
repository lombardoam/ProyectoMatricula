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
         $this->db->select('id_horario,hora, dia, edificio,maestro,seccion,clase');
          $query = $this->db->get('horarios');

         return $query;

    }

}



?>
