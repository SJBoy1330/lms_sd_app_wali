<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();

		$this->load->model('wali_m');
		$this->load->model('sekolah_m');
		$this->load->model('siswa_m');
		$this->load->model('staf_m');
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Profil';

		// Meta Data
		$mydata['nama_wali'] = $this->session->userdata('lms_wali_nama');

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/uploadfoto.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function ubah_profil()
	{
		// LOAD TITLE
		$mydata['title'] = 'Ubah Profil';

		// Meta Data
		$idwali = $this->session->userdata('lms_wali_id_wali');
		$mydata['data_wali'] = $this->wali_m->get_data_wali($idwali);

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_profil', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function ubah_password()
	{
		// LOAD TITLE
		$mydata['title'] = 'Ubah Kata Sandi';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/ubahpassword.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_password', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function laporan_ujian()
	{
		// LOAD TITLE
		$mydata['title'] = 'Laporan Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('laporan_ujian', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function tentang_sekolah()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tentang Sekolah';

		// meta data
		$idsekolah = $this->session->userdata('lms_wali_id_sekolah');
		$mydata['data_sekolah'] = $this->sekolah_m->get_single_sekolah(array('id_sekolah' => $idsekolah));
		$mydata['count_siswa'] = $this->siswa_m->count_data_siswa();
		$mydata['count_staf'] = $this->staf_m->count_data_staf();

		// HIDDEN FOOTER
		$mydata['config_hidden']['footer'] = true;
		$mydata['config_hidden']['button_back'] = true;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tentang_sekolah', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function bantuan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Bantuan';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/bantuan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
