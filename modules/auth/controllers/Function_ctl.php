<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function login_proses()
    {
        $arrVar['kode_sekolah'] = 'Kode sekolah';
        $arrVar['username']     = 'Username';
        $arrVar['kata_sandi']   = 'Kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(false, $arrAccess)) {
            $kds = $this->sekolah_m->get_single(array('kode_sekolah' => $kode_sekolah));
            // CEK KODDE SEKOLAH
            if ($kds) {
                // CETAK SESSION SERVER
                $dbs['lms_sd_wali_server'] = $kds->server;
                $this->session->set_userdata($dbs);
                $this->db2 = $this->load->database('db_sekolah', TRUE);
                $user = $this->db2->get_where('wali', ['username' => $username])->row();
                if ($user) {
                    if (hash_my_password($kds->id_sekolah, $user->username, $kata_sandi) == $user->password) {
                        $arruser['lms_wali_id_wali'] = $user->id_wali;
                        $arruser['lms_wali_nama'] = $user->nama;
                        $arruser['lms_wali_role'] = 'wali';
                        $arruser['lms_wali_id_sekolah'] = $kds->id_sekolah;
                        $this->session->set_userdata($arruser);

                        $data['status'] = true;
                        $data['redirect'] = base_url('home');
                        echo json_encode($data);
                        exit;
                    } else {
                        $this->session->unset_userdata('lms_sd_wali_server');
                        $data['required'][] = ['req_kata_sandi', 'Kata sandi salah !'];
                        $data['status'] = false;
                        echo json_encode($data);
                        exit;
                    }
                } else {
                    $this->session->unset_userdata('lms_sd_wali_server');
                    $data['required'][] = ['req_username', 'Username tidak terdaftar !'];
                    $data['status'] = false;
                    echo json_encode($data);
                    exit;
                }
            } else {
                $data['required'][] = ['req_kode_sekolah', 'Kode sekolah tidak terdaftar !'];
                $data['status'] = false;
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
