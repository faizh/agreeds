<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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

	public function login()
	{
		$this->load->view('contents/auth/v_login');
	}

	public function act_login()
	{
		$this->load->model('M_users');

		$email 		= trim($this->input->post('email'));
		$password 	= trim($this->input->post('password'));

		$user 		= $this->M_users->getByEmail($email);

		if (empty($user->id)) {
			redirect('auth/signup');
			exit();
		}

		if (!password_verify($password, $user->password)) {
			redirect('auth/login');
			exit();	
		}

		$attributes = array(
			'user_id'	=> $user->id,
			'username'	=> $user->username,
			'role'		=> $user->role
		);

		$this->session->set_userdata($attributes);

		redirect('');
	}

	public function signup()
	{
		$this->load->view('contents/auth/v_sign_up');
	}

	public function act_signup()
	{
		$this->load->model('M_users');

		$username	= $this->input->post('username');
		$fullname 	= $this->input->post('fullname');
		$email 		= $this->input->post('email');
		$password 	= password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$role 		= 1; // role for users

		if (!empty($this->M_users->getByEmail($email)->id)) {
			redirect('auth/signup');
			exit();
		}

		$attr = array(
			'username'	=> trim($username),
			'fullname'	=> trim($fullname),
			'email'		=> trim($email),
			'password'	=> trim($password),
			'role' 		=> $role
		);

		if (!$this->M_users->store($attr)) {
			redirect('auth/signup');
		}

		redirect('auth/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
