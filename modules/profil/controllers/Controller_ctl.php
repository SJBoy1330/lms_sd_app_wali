<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();

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
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$id_wali = $this->session->userdata('lms_wali_id_wali');
		[
			$error, $message, $status, $data_profile
		] = curl_get(
			'profil',
			[
				"id_sekolah" => $id_sekolah,
				"id_wali" => $id_wali
			]
		);
		$mydata['data_wali'] = $data_profile;

		[
			$error, $message, $status, $data_agama
		] = curl_get(
			'attribut/agama',
			[
				"id_sekolah" => $id_sekolah
			]
		);
		$mydata['data_agama'] = $data_agama;

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
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		[
			$error, $message, $status, $data_sekolah
		] = curl_get(
			'profil/tentang_sekolah',
			[
				"id_sekolah" => $id_sekolah,
			]
		);
		$mydata['data_sekolah'] = $data_sekolah;
		// $mydata['count_siswa'] = $this->siswa_m->count_data_siswa();
		// $mydata['count_staf'] = $this->staf_m->count_data_staf();

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
