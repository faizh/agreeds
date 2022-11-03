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

	public function create_post()
	{
		if (!$this->session->has_userdata('user_id')) {
			redirect('news');
		}

		$data['content']	= "contents/news/v_create_post";
		$data['menu']		= "news";
		$this->load->view('layouts/v_layout', $data);
	}

	public function store_post()
	{
		$this->load->model(array(
			'M_posts'
		));

		$user_id 	= $this->session->userdata('user_id');

		$title 		= $this->input->post('title');
		$content 	= $this->input->post('content');
		$image 		= $_FILES['images'];

		$upload_image = $this->uploadImage($image);
		if ($upload_image['status'] =='F') {
			echo $upload_image['data'];
			exit();
		}

		$path_image = $upload_image['data'];

		$arrNews 	= array(
			'title'		=> $title,
			'content'	=> $content,
			'images'	=> $path_image,
			'user_id'	=> $user_id
		);

		if (!$this->M_posts->store($arrNews)) {
			redirect('news/create_post');
		}

		redirect('news');
	}

	public function uploadImage($image_file)
	{
		$target_dir 	= "uploads/post_images/";
		$target_file 	= $target_dir . basename($image_file["name"]);
		
		$uploadOk 		= 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image

		
		$check = getimagesize($image_file["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			return array("status" => "F", "data" => "File is not an image");
			exit();
		}
		

		// Check if file already exists
		if (file_exists($target_file)) {
			return array("status" => "F", "data" => "Sorry, file already exists");
			exit();
		}

		// Check file size
		if ($image_file["size"] > 500000) {
			return array("status" => "F", "data" => "Sorry, your file is too large.");
			exit();
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			return array("status" => "F", "data" => "Sorry, only JPG, JPEG, & PNG files are allowed.");
			exit();
		}

			// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 1) {
			if (move_uploaded_file($image_file["tmp_name"], $target_file)) {
				return array("status" => "T", "data" => $target_file);
				exit();
			} else {
				return array("status" => "F", "data" => "Sorry, there was an error uploading your file.");
				exit();
			}
		}
	}
}
