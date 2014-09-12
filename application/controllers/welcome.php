<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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