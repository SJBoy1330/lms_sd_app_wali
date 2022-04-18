<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Pengumuman_m extends MY_Model
{
    protected $_table_name = 'sekolah';
    protected $_primary_key = 'id_sekolah';

    private $db_sekolah = NULL;
    public function __construct()
    {
        parent::__construct();
        $this->db_sekolah = $this->load->database('db_sekolah', TRUE);
    }

    public function get_list_berita($array = NULL, $limit = 20, $offset = 0)
    {
        $this->db_sekolah->where($array);
        if ($offset > 0) {
            $this->db_sekolah->limit($limit, $offset);
        } else {
            $this->db_sekolah->limit($limit);
        }

        $query = $this->db->get($this->_table_name);
        return $query->result();
    }
}
