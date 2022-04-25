<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Siswa_m extends MY_Model
{
    private $db_sekolah = NULL;

    public function __construct() {
		$this->db_sekolah = $this->load->database('db_sekolah', TRUE);
    }

    public function get_siswa_by_idwali($id)
	{
		$data = $this->db_sekolah->get_where('siswa', ['id_wali' => $id]);
		if ($data->num_rows() > 0) {
			return $data->result();
		} else {
			return false;
		}
	}

	public function get_siswa_by_id($id)
	{
		$data = $this->db_sekolah->get_where('siswa', ['id_siswa' => $id]);
		if ($data->num_rows() > 0) {
			return $data->row();
		} else {
			return false;
		}
	}

	public function get_kelas_tahun_ajaran_by_idsiswa($id)
	{
		$this->db_sekolah->select('k.id_kelas, k.nama, ta.nama as tahun_ajaran');
		$this->db_sekolah->from('peserta_kelas pk');
		$this->db_sekolah->join("kelas k", 'pk.id_kelas = k.id_kelas');
		$this->db_sekolah->join("lms_sd_manager.tahun_ajaran ta", 'k.id_tahun_ajaran = ta.id_tahun_ajaran');
		$this->db_sekolah->where('pk.id_siswa', $id);
		$query = $this->db_sekolah->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function count_data_siswa($filter = NULL)
	{
		$this->db_sekolah->select('id_siswa');
		$this->db_sekolah->from('siswa');
		$this->db_sekolah->where(array('deleted' => 'N', 'aktif' => 'Y'), $filter);
		return $this->db_sekolah->count_all_results();
	}
}