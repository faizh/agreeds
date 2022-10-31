<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model(array(
			'M_products'
		));

		$data['products'] 	= $this->M_products->getAllProducts();
		
		$data['content']	= "contents/shop/v_shop_page";
		$data['menu']		= "shop";
		$this->load->view('layouts/v_layout', $data);
	}

	public function product($id)
	{
		$this->load->model(array(
			'M_products'
		));

		$data['product'] 	= $this->M_products->getProductById($id);

		$data['content']	= "contents/shop/v_single_product";
		$data['menu']		= "shop";
		$this->load->view('layouts/v_layout', $data);
	}

	public function cart()
	{
		if (!$this->session->has_userdata('user_id')) {
			redirect('auth/login');
		}

		$this->load->model(array(
			'M_carts'
		));

		$user_id 		= $this->session->userdata('user_id');

		$data['products'] 	= $this->M_carts->getCartByUserId($user_id);

		$data['content']	= "contents/shop/v_cart";
		$data['menu']		= "shop";
		$this->load->view('layouts/v_layout', $data);
	}

	public function addCart()
	{
		if (!$this->session->has_userdata('user_id')) {
			redirect('auth/login');
		}

		$this->load->model(array(
			'M_carts'
		));

		$product_id 	= $this->input->post('product_id');
		$qty 			= $this->input->post('qty');
		$user_id 		= $this->session->userdata('user_id');

		$arrProduct 	= array(
			'product_id'	=> $product_id,
			'qty'			=> $qty,
			'user_id'		=> $user_id
		);

		if (!$this->M_carts->store($arrProduct)) {
			redirect('shop/product_id/'.$product_id);
		}

		redirect('shop/cart');
	}
}
