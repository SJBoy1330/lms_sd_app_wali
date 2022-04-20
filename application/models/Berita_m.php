<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Berita_m extends MY_Model
{
    private $db_sekolah = NULL;
    protected $_table_name = 'konten';
    protected $_primary_key = 'id_konten';

    public function __construct()
    {
        parent::__construct();
        $this->db_sekolah = $this->load->database('db_sekolah', TRUE);
    }

    public function get_list_berita($array = NULL, $limit = 20, $offset = 0)
    {
        $array["k.deleted"] = "N";
        $this->db_sekolah->select("k.*, kt.nama");
        $this->db_sekolah->from("konten k");
        $this->db_sekolah->join("kategori_konten kt", 'k.id_kategori_konten = kt.id_kategori_konten');
        $this->db_sekolah->where($array);
        if ($offset > 0) {
            $this->db_sekolah->limit($limit, $offset);
        } else {
            $this->db_sekolah->limit($limit);
        }

        $query = $this->db_sekolah->get();
        return $query->result();
        // return $this->db_sekolah->get_compiled_select();
    }

    public function get_list_kategori()
    {
        $this->db_sekolah->where(array("deleted" => "N"));
        $query = $this->db_sekolah->get("kategori_konten");
        return $query->result();
    }

    public function get_detail_berita($id)
    {
        // return $this->db_sekolah;
        $this->db_sekolah->where(array($this->_primary_key => $id));
        $query = $this->db_sekolah->get($this->_table_name);
        return $query->row();
    }
}
