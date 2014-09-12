<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {

	public function getStores()
	{
		$this->load->model('store_model');
		$data = $this->store_model->select_stores();
		
		echo json_encode($data);
	}
}