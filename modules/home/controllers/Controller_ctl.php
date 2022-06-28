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
		$mydata['title'] = 'Home';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/pagination-carousel.js"></script>';

		// Load meta data
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$id_wali = $this->session->userdata('lms_wali_id_wali');

		$mydata['nama_wali'] = $this->session->userdata('lms_wali_nama');
		// Data Siswa
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

		// data pengumuman
		[
			$error, $message, $status, $data_pengumuman
		] = curl_get(
			'pengumuman/all/',
			[
				"id_sekolah" => $id_sekolah,
				"limit" => 3
			]
		);
		$mydata['data_pengumuman'] = $data_pengumuman;

		// data berita
		[
			$error, $message, $status, $data_berita
		] = curl_get(
			'berita',
			[
				"id_sekolah" => $id_sekolah,
				"limit" => 5
			]
		);
		$mydata['data_berita'] = $data_berita;


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
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		[
			$error, $message, $status, $data_pengumuman
		] = curl_get(
			'pengumuman/all',
			[
				"id_sekolah" => $id_sekolah
			]
		);
		$mydata['data_pengumuman'] = $data_pengumuman;

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Pengumuman';
		$this->data['button_back'] = base_url('home');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

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
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		[
			$error, $message, $status, $data_pengumuman
		] = curl_get(
			'pengumuman/all/',
			[
				"id_sekolah" => $id_sekolah,
				"id_pengumuman" => $id
			]
		);
		$mydata['pengumuman'] = $data_pengumuman;

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Detail Pengumuman';
		if ($this->input->get('redirect') == true) {
			$this->data['button_back'] = base_url('home');
		} else {
			$this->data['button_back'] = base_url('home/list_pengumuman');
		}

		// LOAD CONFIG PAGE
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

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
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/berita/berita.js"></script>';

		// meta data
		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		$idkategori = $this->input->get('kategori', TRUE);

		$filter_berita['id_sekolah'] = $id_sekolah;
		if (
			$idkategori != "" && $idkategori != null
		) {
			$filter_berita["id_kategori"] = $idkategori;
		}

		[
			$error, $message, $status, $data_berita
		] = curl_get('berita', $filter_berita);
		$mydata['data_berita'] = $data_berita;

		[
			$error, $message, $status, $data_kategori
		] = curl_get('berita/kategori', [
			"id_sekolah" => $id_sekolah,
		]);
		$mydata['data_kategori'] = $data_kategori;

		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('home');
		$this->data['judul_halaman'] = 'Berita';
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

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

		$id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
		[
			$error, $message, $status, $data_berita
		] = curl_get('berita', [
			"id_sekolah" => $id_sekolah,
			'id_konten' => $id
		]);
		$mydata['berita'] = $data_berita;
		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Detail Berita';
		if ($this->input->get('redirect') == true) {
			$this->data['button_back'] = base_url('home');
		} else {
			$this->data['button_back'] = base_url('home/list_berita');
		}

		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('home/list_berita');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function cek()
	{
		$arrData = array(

			"priority" => 'high',

			"sound" => "https://sd.klasq.id/linker/audio_default/" . base64url_encode('audio') . '/' . base64url_encode('global_notif.mp3'),

			"content_available" => true,

			"organization" => 'KlasQ',

			"type" => 'presensi',

			"title" => 'Coba notifikasi 1000000',

			"message" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod facilis esse delectus, accusamus, rerum libero molestiae id hic minus aspernatur laborum sapiente nulla beatae nesciunt! Sequi corrupti reprehenderit adipisci nemo!',

			"url" => NULL,

			"images" => 'https://sd.klasq.id/linker/bukti_transfer/MjAyMg/Mw/NjJiYTg3NGQzNjAzMi5qcGc/MQ'

		);
		$arr['fcm_key'] = 'feR8DXZ6SVyaa_7Fuv5hqK:APA91bHyTlGbvZ7QSyHAqzkwGtHyDmrlMRXSjp4sEzAAtdAvY3HMlwFURzntETgVyICkW08DoaBgpipbJCEYmY-XQ1JMIl9CjVw4F--BKUJTBfUkELBjoPWO6XeJCxN3MlkBCAMARCyC';
		$arr['data'] = $arrData;

		send_notification($arr);
	}
}
