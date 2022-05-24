<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Welcome
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function index($idsiswa)
	{
		// meta data
		$idsekolah = $this->session->userdata('lms_wali_id_sekolah');
		// $mydata["data_siswa"] = $this->siswa_m->get_siswa_by_id($idsiswa);
		// $mydata["data_kelas"] = $this->siswa_m->get_kelas_tahun_ajaran_by_idsiswa($idsiswa);
		// $mydata["data_sekolah"] = $this->sekolah_m->get_single_sekolah(array("id_sekolah" => $idsekolah));
		// $mydata["data_pelajaran"] = $this->pelajaran_m->get_list_pelajaran_siswa($idsiswa);

		// LOAD TITLE
		$mydata['title'] = 'Rapot';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-wali.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/rapot/tablink-wali.js"></script>';
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/rapot/rapot.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_tugas($idtugas)
	{
		echo $idtugas;
	}
}
