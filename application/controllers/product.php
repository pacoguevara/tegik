<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function newProduct()
	{
		$this->load->model('product_model');

		$name = $_POST['product_name'];
		$price = $_POST['product_price'];
		$category = $_POST['product_category'];
		$store = $_POST['product_store'];

		$this->product_model->insert_product($name, $price, $category, $store);

	}

}