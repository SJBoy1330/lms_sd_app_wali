<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        $this->load->model('wali_m');
    }

    public function ubah_password_proses()
    {
        $arrVar['nowpassword']  = 'Password sekarang';
        $arrVar['newpassword'] = 'Password baru';
        $arrVar['repeat_newpassword'] = 'Ulangi kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (in_array(false, $arrAccess)) {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }

        if ($newpassword != $repeat_newpassword) {
            $data['required'][] = ['req_repeat_newpassword', 'Kata sandi tidak sesuai dengan input sandi baru !'];
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }

        $idwali = $this->session->userdata('lms_wali_id_wali');
        $data_wali = $this->wali_m->get_data_wali($idwali);


        $idsekolah = $this->session->userdata('lms_wali_id_sekolah');
        $passhash = hash_my_password($idsekolah, $data_wali->username, $nowpassword);
        if ($passhash != $data_wali->password) {
            $data['required'][] = ['req_nowpassword', 'Kata sandi salah !'];
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }

        $newpassword = hash_my_password($idsekolah, $data_wali->username, $newpassword);
        $this->wali_m->update(array('password' => $newpassword), $idwali);

        $data['status'] = true;
        $data['redirect'] = base_url('profil');
        echo json_encode($data);
        exit;
    }
}
