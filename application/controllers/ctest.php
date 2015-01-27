<?php

session_start();


class Ctest extends CI_Controller{

	function index(){
	
	$this->load->view('home'); // this is the entry point for CI. 

	}

	function pp_review() {
	
	$this->load->model('pp_review');
	$this->pp_review->index();
	
	}
	
	
	function node_select() {
	
		$_SESSION['cat_id'] = $_POST['cat_id'];

	}
	
	function my_browsing() {
	
		$cat_id = $_SESSION['cat_id'];
	
		$this->load->model('ctest_model');
		$results = $this->ctest_model->get_products_by_cat_id($cat_id);
		
		
	
		$data['results'] = $results;
		
		// returns list of products when selected cat id
		$this->load->view('my_browsing', $data);

	}
	

	
	function get_item_id() {
	
		$item_id = $this->input->post('item_id');
		$_SESSION['item_id'] = $item_id;
		
	}
	
	function load_checkout() {
	
	$this->load->view('checkout_pp');
	
		
	
	}
	
	
	function load_item_view() {
	
		$this->load->model('ctest_model');
		
		$item_id = $_SESSION['item_id'];		

		// Give $item_id and get product info;
		$result = $this->ctest_model->get_product_by_item_id($item_id);


		$data['result'] = $result;	
		
		// send product info to product view
		$this->load->view('product_view', $data);
	
	}
	
	function number() {
		
		// loads number view
		$this->load->view('number');
	
	}

	function algebra() {
	
		$this->load->view('algebra');
	
	}

	
	function shape() {
	
		$this->load->view('shape');
	
	}

	function data() {
	
		$this->load->view('data');
	
	}	
	
	function cart() {
	
		$this->load->model('products_model');
		
		// Get a list of products from database
		$get_products = $this->products_model->get_products();
		
		
		$products['cart'] = $get_products;
		
		// Send products to Cart view in home page.
		$this->load->view('cart', $products);
	
	}
	
	function add_item() {
		
		$id = $_POST['id'];
	
	
	
		$insert = array(
		
			'id' => 53,
			'qty' => 1,
			'price' => 4.23,
			'name' => 'adding sit'

		
		);
		
		$this->cart->insert($insert);
		$contents = $this->cart->contents();

	}
	
	function add_or_update() {

	
		$id = $this->input->post('id');			// get id of selected item
		$contents = $this->cart->contents();	// get contents of shopping cart
		$in_cart = FALSE;

		// search through shopping cart to see if item id is in cart
		foreach ($contents as $item) {
		
			if ($id == $item['id']) $in_cart = TRUE;
		
		}
		
		if ($in_cart == FALSE) $this->add($id);		// add item, it its not in cart
		if ($in_cart == TRUE) $this->update($id);	// add one more to quantity if item is already in cart
	
	}
		
	
	function add($id) {
		
		$this->load->model('products_model'); // load database functions
		$product = $this->products_model->get_product_by_id($id); // get product details using $id;
		
		$insert = array(
		
			'id' => $product->id,
			'qty' => 1,
			'name' => $product->name,
			'price' => $product->price
		
		);
		
		$this->cart->insert($insert); // change quantity from zero to 1.
		
		
		redirect('ctest');
		
	}
	
	function get_row_id($id) {
		
		$contents = $this->cart->contents();
		
		foreach ($contents as $product) {
			
			if ($product['id'] == $id) {
				
				$rowid = $product['rowid'];
			}
			
		} 
		return $rowid;
	}
	
	
	function get_qty($id) {
	
	$contents = $this->cart->contents();
		
		foreach ($contents as $product) {
			
			if ($product['id'] == $id) {
				
				$qty = $product['qty'];
			}
			
		} 
		return $qty;	
	
	}
	
	function update ($id) {
		
		$rowid = $this->get_row_id($id);
		$qty = $this->get_qty($id);
		
		$data = array(
		
			'rowid' => $rowid,
			'qty' => $qty+1
		
		);
		
		$this->cart->update($data);
		//redirect('ctest');
	}
	
	function destroy () {
		
		$this->cart->destroy(); // calls the destroy() method from cart class to destory cart
	
	}
	
	function remove_product () {
	
		$id = $this->input->post('id');
		$rowid = $this->get_row_id($id);
		$qty = $this->get_qty($id);
		
		$data = array(
		
			'rowid' => $rowid,
			'qty' => 0
		
		);
		
		$this->cart->update($data);
		redirect('ctest');
	
	}
	
	function checkout () {
	
	$contents = $this->cart->contents();
	$total = $this->cart->total();
	
	$data['contents'] = $contents;
	$data['total'] = $total;
	
	$this->load->view('checkout', $data);
	
	}
	
	function checkout_success () {
	
	$this->load->view('home');
	$this->load->view('checkout_success');	

	
	}
	
}