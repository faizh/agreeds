<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
			'M_posts'
		));

		$data['posts']		= $this->M_posts->getAllNews();

		$data['content']	= "contents/news/v_news";
		$data['menu']		= "news";
		$this->load->view('layouts/v_layout', $data);
	}

	public function news_detail($id)
	{
		$this->load->model(array(
			'M_posts'
		));

		$data['post'] 		= $this->M_posts->getNewsById($id);

		$data['content']	= "contents/news/v_news_detail";
		$data['menu']		= "news";
		$this->load->view('layouts/v_layout', $data);
	}
}
