<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//make base controller
class base extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_article');
		$this->load->model('m_category');
		$this->load->model('m_user');
	}

	public function user($content="", $data)
	{
		$data['view_content'] = $content;
				
		$this->load->view('base/base_view', $data);
	}

	public function display_blog($blog="", $data){
		$data['view_blog'] = $blog;
		$this->load->view('base/base_blog', $data);
	}
	public function display_admin($admin="", $data=""){
		$data['view_admin'] = $admin;
		$this->load->view('base/base_admin', $data);
	}
}
