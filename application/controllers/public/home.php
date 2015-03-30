<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//membuat turunan ke base
require_once('application/controllers/base/base.php');

class home extends base {
	public function __construct(){
		parent:: __construct();

		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->m_user->get_user();
		$data['list_news'] = $this->m_article->get_article();
		$this->user('public/content', $data);
			
	}
	public function input_contact()
	{
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run()==true) {
			$this->load->model('m_contact');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			$params = array($name, $email, $message);
			$input_contact = $this->m_contact->input_contact($params);

		 if ($input_contact==true) {
		 	echo "<h1>Terima kasih, silahkan menunggu balasan di email anda.</h1>
		 	<br />
		 	<a href='".site_url('public/home')."'>Go Home</a>";
		 	# code...
		 } 

		}else {
		 
			$this->load->view('public/error_confirm');
		}
	}
	public function blog()
	{
		$data['news'] = $this->m_article->get_article_by_category(4);
		$data['category'] = $this->m_category->get_category();
		$this->display_blog('public/blog_content', $data);
	}
	public function article($id){
		$id = $this->uri->segment(4);
		$data['category'] = $this->m_category->get_category();
		$data['single'] = $this->m_article->get_article_by_id($id);
		$this->display_blog('public/blog_single', $data);

	}
	public function category($id){
		$id = $this->uri->segment(4);
		$data['category'] = $this->m_category->get_category_by_id($id);
		$data['by_category'] = $this->m_category->get_article_category($id);
		$this->display_blog('public/blog_category', $data);
	}
}