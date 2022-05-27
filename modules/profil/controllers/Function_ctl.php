<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
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

        $idsekolah = $this->session->userdata('lms_wali_id_sekolah');
        $idwali = $this->session->userdata('lms_wali_id_wali');

        $request_data = [
            "id_sekolah" => $idsekolah,
            "id_wali" => $idwali,
            "old_password" => $nowpassword,
            "new_password" => $newpassword,
            "repeat_password" => $repeat_newpassword
        ];

        [$error, $message, $status, $response_data] = curl_post('profil/edit_password', $request_data);
        $data['status'] = !$error;

        if ($error) {
            if ($message === "Kata sandi lama anda salah!") {
                $data['required'][] = ['req_nowpassword', 'Kata sandi salah !'];
            }

            if ($message === "Kata sandi tidak sama!") {
                $data['required'][] = ['req_repeat_newpassword', 'Kata sandi tidak sesuai dengan input sandi baru !'];
            }
        } else {
            $data['redirect'] = base_url('profil');
        }
        echo json_encode($data);
        exit;
    }

    public function edit_profil_proses()
    {
        $arrVar['username']  = 'Username';
        $arrVar['email'] = 'Email';
        $arrVar['agama'] = 'Agama';
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

        $idsekolah = $this->session->userdata('lms_wali_id_sekolah');
        $idwali = $this->session->userdata('lms_wali_id_wali');
        $request_data = [
            "id_sekolah" => $idsekolah,
            "id_wali" => $idwali,
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "telp" => $this->input->post('nohp'),
            "username" => $username,
            "email" => $email,
            "id_agama" => $agama,
        ];

        [$error, $message, $status, $response_data] = curl_post('profil/edit', $request_data);
        // $data['status'] = false;
        // $data['res'] = [
        //     "message" => $message,
        //     "status" => $status,
        //     "response_data" => $response_data
        // ];
        // echo json_encode($data);
        // exit;

        $data['status'] = !$error;
        if (!$error) {
            $data['redirect'] = base_url('profil/ubah_profil');
        }
        echo json_encode($data);
        exit;
    }

    public function edit_foto()
    {
        $arr['id_sekolah'] = $id_sekolah = $this->input->post('id_sekolah');
        $arr['id_wali'] = $id_wali = $this->input->post('id_wali');
        $arrFile['foto'] = $_FILES['foto'];

        $result = curlPost('profil/edit_foto', $arr, $arrFile);

        echo json_encode($result);
    }
}
