<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_artikel');
		$this->load->helper('form','url');
	}
	public function index()
	{
		$data['artikel'] = $this->data_artikel->get_data_artikel();
		$this->load->view('header');
		$this->load->view('home', $data, FALSE);
	}

	public function tambah(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		$this->form_validation->set_rules('title', 'Judul', 'required|is_unique[blogs.post_title]',
   			array(
       			'required'      => 'Isi %s donk, males amat.',
       			'is_unique'     => 'Judul ' .$this->input->post('title'). ' sudah ada bosque.'
   			));
		$this->form_validation->set_rules('text', 'Konten', 'required|min_length[8]',
   			array(
       			'required'      => 'Isi %s lah, hadeeh.',
       			'min_length'    => 'Isi %s kurang panjang bosque.',
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			$this->load->helper('url');
			$data = array('upload_data' => $this->upload->data());
			$data['input'] = array(
				'judul' => $this->input->post("judul"),
				'artikel' => $this->input->post("artikel"),
				'gambar' => $this->upload->data('file_name')
			);

			$this->data_artikel->set_data($data['input'], 0);
			redirect('blog','refresh');
		}

		}
	}
         public function edit(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		$this->form_validation->set_rules('title', 'Judul', 'required|is_unique[blogs.post_title]',
   			array(
       			'required'      => 'Isi %s donk, males amat.',
       			'is_unique'     => 'Judul ' .$this->input->post('title'). ' sudah ada bosque.'
   			));
		$this->form_validation->set_rules('text', 'Konten', 'required|min_length[8]',
   			array(
       			'required'      => 'Isi %s lah, hadeeh.',
       			'min_length'    => 'Isi %s kurang panjang bosque.',
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			$this->load->helper('url');
			$data = array('upload_data' => $this->upload->data());
			$data['input'] = array(
				'judul' => $this->input->post("judul"),
				'artikel' => $this->input->post("artikel"),
				'gambar' => $this->upload->data('file_name')
			);

			$this->data_artikel->set_data($data['input'], 0);
			redirect('blog','refresh');
		}

		}
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php