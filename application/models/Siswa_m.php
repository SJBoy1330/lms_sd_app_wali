<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Siswa_m extends MY_Model
{
    private $db_sekolah = NULL;

    public function __construct() {
        $this->db_sekolah = $this->load->database('db_sekolah', TRUE);;
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
}