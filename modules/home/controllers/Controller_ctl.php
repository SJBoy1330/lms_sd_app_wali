<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
		$this->load->model('siswa_m');
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Home';

		// Load meta data
		$id_wali = $this->session->userdata('lms_wali_id_wali');
		$mydata['data_siswa'] = $this->siswa_m->get_siswa_by_idwali($id_wali);
		$mydata['nama_wali'] = $this->session->userdata('lms_wali_nama');
		
		
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
