<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('category_model');
		$this->load->model('store_model');
		$this->load->model('product_model');

		$data['categories'] = $this->category_model->select_categories();
		$data['stores'] = $this->store_model->select_stores();
		$data['products'] = $this->product_model->getProducts();
		$this->load->view('home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */