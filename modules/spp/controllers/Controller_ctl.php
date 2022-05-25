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
		$mydata['title'] = 'SPP';

		// Meta data
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$id_wali = $this->session->userdata('lms_wali_id_wali');

		[
			$error, $message, $status, $data_siswa
		] = curl_get(
			'data_anak',
			[
				"id_sekolah" => $id_sekolah,
				"id_wali" => $id_wali
			]
		);
		$mydata['data_siswa'] = $data_siswa;

		[
			$error, $message, $status, $data_spp
		] = curl_get(
			'spp',
			[
				"id_sekolah" => $id_sekolah,
				"id_siswa" => 1
			]
		);
		$mydata['data_spp'] = $data_spp;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/spp/spp.js"></script>';
		
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function riwayat_spp()
	{
		// LOAD TITLE
		$mydata['title'] = 'SPP Lunas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';
		
		// LOAD VIEW
		$this->data['content'] = $this->load->view('riwayat_spp', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function modal_detail_tagihan()
	{
		$id_siswa = $this->input->post('id_siswa');
		$id_tagihan = $this->input->post('id_tagihan');

		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		[
			$error, $message, $status, $data_spp
		] = curl_get(
			'spp',
			[
				"id_sekolah" => $id_sekolah,
				"id_siswa" => $id_siswa,
				"id_tagihan" => $id_tagihan
			]
		);

		$this->load->view("modal_detail_tagihan", $data_spp);
	}
}
