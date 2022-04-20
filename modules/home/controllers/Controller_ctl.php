<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
		$this->load->model('siswa_m');
		$this->load->model('pengumuman_m');
		$this->load->model('berita_m');
	}

	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Home';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// Load meta data
		$id_wali = $this->session->userdata('lms_wali_id_wali');
		$mydata['data_siswa'] = $this->siswa_m->get_siswa_by_idwali($id_wali);
		$mydata['nama_wali'] = $this->session->userdata('lms_wali_nama');
		$mydata['data_pengumuman'] = $this->pengumuman_m->get_list_pengumuman("tanggal_mulai >= now() AND now() <= tanggal_akhir", 3);
		$mydata['data_berita'] = $this->berita_m->get_list_berita(null, 3);
		// var_dump($mydata['data_berita']);
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_pengumuman()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// load meta data
		$mydata['data_pengumuman'] = $this->pengumuman_m->get_list_pengumuman("tanggal_mulai >= now()");

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_pengumuman($id)
	{

		// LOAD TITLE
		$mydata['title'] = 'Detail Pengumuman';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// load meta data
		$mydata['pengumuman'] = $this->pengumuman_m->get_detail_pengumuman($id);

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'List Berita';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/berita/listberita.js"></script>';

		// meta data
		$filter_berita = null;
		$idkategori = $this->input->get('kategori', TRUE);
		if (
			$idkategori != ""
		) {
			$filter_berita["k.id_kategori_konten"] = $idkategori;
		}

		$mydata['data_berita'] = $this->berita_m->get_list_berita($filter_berita);
		$mydata['data_kategori'] = $this->berita_m->get_list_kategori();

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_berita($id)
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Berita';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';
		$mydata['berita'] = $this->berita_m->get_detail_berita($id);
		
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
