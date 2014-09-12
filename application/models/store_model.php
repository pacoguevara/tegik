<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_model extends CI_Model {

	//select activity.* from activity,friendship where source = 12 and target = activity.id_user;
	public function select_stores(){
		$q = $this->db->get('store');

		if ($q->num_rows() > 0)
			return $q->result();
	}

}

/* End of file acticity_model.php */
/* Location: ./application/models/acticity_model.php */