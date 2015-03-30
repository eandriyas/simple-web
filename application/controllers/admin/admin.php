<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//membuat turunan ke base
require_once('application/controllers/base/base.php');

class admin extends base {

	public function __construct(){
		parent:: __construct();

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->display_admin('user/login');
	}
	public function login(){
		
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim|callback_validate_login');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$ad = $this->m_user->can_log_in($this->input->post('username'), $this->input->post('password'));
			$now = date('Y-m-d H:i:s');
			$param = array($now, $ad['id_user']);
			$this->m_user->last_login($param);
			$data = array(
				'id' => $ad['id_user'],
				'username' => $ad['nama_user'], 
				'image' => $ad['image_user'], 
				'is_logged_in' => 1
				);
			$this->session->set_userdata($data);
			redirect('admin/admin_page');
		} else {
			$this->display_admin('user/login');
		}


	}
	public function validate_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$log = array($username, $password);
		if ($this->m_user->can_log_in($username, $password)) {
			return true;
		} else {
			$this->form_validation->set_message('validate_login', "Incorrect username/password");
			return false;
		}


	}
	public function logout(){
		//fungsi yang digunakan untuk menghapus session
		$this->session->sess_destroy();
		//redirect ke halaman admin_login
		redirect('admin/admin_page');
	}
}