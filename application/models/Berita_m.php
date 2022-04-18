<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Berita_m extends MY_Model
{
    protected $_table_name = 'sekolah';
    protected $_primary_key = 'id_sekolah';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_list_berita()
    {
        # code...
    }
}
