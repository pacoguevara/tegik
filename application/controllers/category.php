<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function getCategories()
	{
		$this->load->model('category_model');
		$data = $this->category_model->select_categories();
		
		echo json_encode($data);
	}
}