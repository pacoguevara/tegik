<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function insert_product($name, $price, $category, $store){
		$product = array (
			'name' => $name,
			'price' => $price,
			'category_id' => $category,
			'store_id' => $store
		);

		$this->db->insert('product', $product);

	}

	public function getProducts(){
		//select product.id, product.name, product.price, product.created_at, product.updated_at, category.name as category_name, store.name as store_name from product, category, store where product.category_id = category.id and product.store_id = store.id;
		$where = 'product.category_id = category.id and product.store_id = store.id';
		$this->db->select('product.id, product.name, product.price, product.created_at, product.updated_at, category.name as category_name, store.name as store_name');
		$this->db->from('product');
		$this->db->from('category');
		$this->db->from('store');
		$this->db->where($where);
		$q = $this->db->get();

		if($q->num_rows() > 0)
			return $q->result();
	}

}

/* End of file acticity_model.php */
/* Location: ./application/models/acticity_model.php */