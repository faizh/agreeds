<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

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
			'M_products',
			'M_posts'
		));

		$data['products']	= $this->M_products->getAllProductsLimited(3);
		$data['posts']		= $this->M_posts->getAllPostLimited(3);

		$data['content']	= "contents/v_landing_page";
		$data['menu']		= "home";
		$this->load->view('layouts/v_layout', $data);
	}
}
