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

		$data = $this->product_model->getProducts();

		echo json_encode($data);
	}

	public function deleteProduct(){
		$id_product = $_POST['id_product'];

		$this->load->model('product_model');
		$this->product_model->deleteProduct($id_product);

		$data = $this->product_model->getProducts();

		echo json_encode($data);
	}

	public function getProducts(){
		$this->load->model('product_model');
		$data = $this->product_model->getProducts();

		echo json_encode($data);
		//echo "Something";
	}

	public function getProductById(){
		$id = $_POST['id_product'];
		$this->load->model('product_model');
		$data = $this->product_model->getProductById($id);

		echo json_encode($data);
		//echo "Something";
	}

	public function editProduct(){
		$id = $_POST['id_product'];
		$name = $_POST['name_product'];
		$price = $_POST['price_product'];
		$category = $_POST['category_product'];
		$store = $_POST['store_product'];
		$update = date("Y-m-d H:i:s");

		//echo $id." ".$name;
		$this->load->model('product_model');
		$this->product_model->updateProduct($id, $name, $price, $category, $store, $update);
		$data = $this->product_model->getProducts();

		echo json_encode($data);

	}

}