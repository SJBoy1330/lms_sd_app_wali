<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Pengumuman_m extends MY_Model
{
    protected $_table_name = 'pengumuman';
    protected $_primary_key = 'id_pengumuman';

    private $db_sekolah = NULL;
    public function __construct()
    {
        parent::__construct();
        $this->db_sekolah = $this->load->database('db_sekolah', TRUE);
    }

    public function get_list_pengumuman($array = NULL, $limit = 20, $offset = 0)
    {
        // return $this->db_sekolah;
        $this->db_sekolah->where($array);
        if ($offset > 0) {
            $this->db_sekolah->limit($limit, $offset);
        } else {
            $this->db_sekolah->limit($limit);
        }

        $query = $this->db_sekolah->get($this->_table_name);
        return $query->result();
    }

    public function get_detail_pengumuman($id)
    {
        // return $this->db_sekolah;
        $this->db_sekolah->where(array("id_pengumuman" => $id));
        $query = $this->db_sekolah->get($this->_table_name);
        return $query->row();
    }
}
