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
            $request_data = array(
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('kata_sandi'),
            );

            [$error, $message, $status, $response_data] = curl_post('login', $request_data);
            $data['status'] = !$error;

            if ($error) {

                $data['status'] = FALSE;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $message;
                echo json_encode($data);
                exit;
            } else {
                $dbs['lms_sd_wali_server']      = $response_data->server;
                $this->session->set_userdata($dbs);

                $arruser['lms_wali_id_wali']    = $response_data->id_wali;
                $arruser['lms_wali_nama']       = $response_data->nama;
                $arruser['lms_wali_role']       = $response_data->role;
                $arruser['lms_wali_id_sekolah'] = $response_data->id_sekolah;
                $this->session->set_userdata($arruser);

                $data['status'] = TRUE;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = $message;
                $data['redirect'] = base_url('home');
            }

            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
