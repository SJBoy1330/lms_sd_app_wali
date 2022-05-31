<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function index($id_siswa = NULL)
	{
		// LOAD TITLE
		$mydata['title'] = 'Surat Ijin';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/suratijin.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/suratijin/suratijin.js"></script>';

		// Meta data
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$id_wali = $this->session->userdata('lms_wali_id_wali');

		// LOAD DATA API
		[
			$error, $message, $status, $result
		] = curl_get(
			'surat',
			[
				'id_sekolah' => $id_sekolah,
				'id_siswa' => $id_siswa,
				'id_wali' => $id_wali
			]
		);
		// DEKLARASI VARIABEL MYDATA
		$mydata['result'] = $result;
		if ($id_siswa != NULL) {
			$mydata['id_siswa'] = $id_siswa;
		} else {
			$mydata['id_siswa'] = $result->siswa[0]->id_siswa;
		}

		// LOAD DATA CONFIG PAGE 
		$this->data['button_back'] = base_url('home');
		$this->data['judul_halaman'] = 'Surat Ijin';
		$this->data['config_hidden']['footer'] = true;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('surat_ijin', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}


	public function modal_detail()
	{
		$id_surat_ijin = $this->input->post('id_surat_ijin');
		// Meta data
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$id_wali = $this->session->userdata('lms_wali_id_wali');
		// LOAD DATA API
		[
			$error, $message, $status, $result
		] = curl_get(
			'surat',
			[
				'id_sekolah' => $id_sekolah,
				'id_surat_ijin' => $id_surat_ijin,
				'id_wali' => $id_wali
			]
		);
		$this->load->view('modal_surat_ijin', $result);
	}
}
