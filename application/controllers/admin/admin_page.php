<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//membuat turunan ke base
require_once('application/controllers/base/base.php');

class admin_page extends base {

	public function __construct(){
		parent:: __construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect('admin/admin');
		}

		$this->load->library('form_validation');
	}

	public function index()

	{
		$data['index'] = '';
		$this->display_admin('user/home', $data);
	}
	public function add(){
		$data['category'] = $this->m_category->get_category_all();
		$this->display_admin('user/add', $data);
	}
	public function add_post(){
		$judul = $this->input->post('judul');
		$category = $this->input->post('category');
		$isi = $this->input->post('isi');
		$image = $_FILES['image'];
		$today = date('Y-m-d H:i:s');
		$id_user = $this->session->userdata('id');	
		//merubah spasi menjadi -
		$lower=  str_replace(" ", "_", $image['name']);
		$param = array($judul, $lower , $isi, $category, $id_user, $today);
		if ($this->m_user->add_post($param)) {
			$this->load->library('upload');
			$config['upload_path'] = 'assets/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['remove_spaces'] = true;
			$config['overwrite'] = true;
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			echo $this->upload->display_errors();
			$data['berhasil']['tambah'] = "berhasil disimpan";
			redirect('admin/admin_page/add', $data);
		} else {
			echo "gagal simpan";
		}
		
	}
	public function all_post(){
		$data['list_article'] = $this->m_article->get__list_article();
		$this->display_admin('user/all_post', $data);
	}
	public function del_post($id){
		$this->m_article->del_article($id);
		redirect('admin/admin_page/all_post');
	}
	public function edit_post($id){
		$data['category'] = $this->m_category->get_category_all();
		$data['post'] = $this->m_article->get_article_by_id($id);
		$this->display_admin('user/edit_post', $data);

	}
	public function edit(){
		$id_article = $this->input->post('id_article');
		$judul = $this->input->post('judul');
		$category = $this->input->post('category');
		$isi = $this->input->post('isi');
		$image = $_FILES['image'];
		$today = date('Y-m-d H:i:s');
		$id_user = $this->session->userdata('id');
		$lower=  str_replace(" ", "_", $image['name']);
		$param = array($judul, $lower , $isi, $category, $id_user, $today, $id_article);
		if ($this->m_article->edit_article($param)) {
			$this->load->library('upload');
			$config['upload_path'] = 'assets/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['remove_spaces'] = true;
			$config['overwrite'] = true;
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			echo $this->upload->display_errors();
			$data['berhasil']['tambah'] = "berhasil disimpan";
			// redirect('admin/admin_page/all_post', $data);

		} 
		header('Location: '.site_url('admin/admin').'');
	}
	public function category(){
		$this->display_admin('user/category');
	}
	public function form_input(){
		$this->load->view('user/editor/form');
	}
	public function editor(){
		print_r($_POST);
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$param = array($judul, $isi);
		if ($this->m_user->input_post($param) == true) {
			echo "berhasil";
		} else echo "gagal";
	}
	
}