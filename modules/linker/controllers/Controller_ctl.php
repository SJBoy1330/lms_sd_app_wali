<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
    var $base_link = "";
    var $id_sekolah = "";
    public function __construct()
    {
        // Load the constructer from MY_Controller

        parent::__construct();
        $this->base_link = APPPATH . '../../data_sd/';
        $this->id_sekolah = $this->session->userdata('lms_wali_id_sekolah');
    }

    public function index()
    {
        show_404();
    }

    public function img_splash($gambar)
    {
        $path = $this->base_link . 'splash/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }

    public function img_banner($gambar)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/banner/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }

    public function img_konten($gambar, $date)
    {
        $dt = date_create(base64url_decode($date));
        $tahun = date_format($dt, "Y");
        $bulan = date_format($dt, "m");
        // var_dump($dt);die;
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/konten/' . $tahun . '/' . $bulan . '/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }
    public function img_chat($gambar)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/chatting/image/';

        $filename = base64url_decode($gambar);
        image_access($path, $filename);
    }
    public function get_video($video)
    {
        // var_dump($dt);die;
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/materi/video/';

        $filename = base64url_decode($video);

        video_access($path, $filename);
    }
    public function img_default($gambar)
    {
        $path = $this->base_link . 'default/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }
    public function img_user($gambar)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/siswa/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }
    public function img_staf($gambar)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/staf/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }
    public function img_jawaban($file)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/tugas_siswa/';

        $filename = base64url_decode($file);

        image_access($path, $filename);
    }

    public function img_soal($gambar)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/soal/image/';

        $filename = base64url_decode($gambar);

        image_access($path, $filename);
    }

    public function audio_soal($audio)
    {
        $path = $this->base_link . 'sekolah_' . $this->id_sekolah . '/soal/audio/';

        $filename = base64url_decode($audio);

        audio_access($path, $filename);
    }



    // CEK FILE EXIST
    public function file_exists($path, $file, $tipe = 1)
    {
        $filename = base64url_decode($file);
        $location = base64url_decode($path);
        if ($tipe == 1) {
            $loc = $this->base_link . 'sekolah_' . $this->id_sekolah . '/' . $location;
        } else {
            $loc = $this->base_link . '/' . $location;
        }
        if (file_exists($loc . $filename)) {
            $data = true;
        } else {
            $data = false;
        }

        return $data;
    }
    // DOWNLOAD
    public function download_file($location, $file, $redirect = NULL)
    {
        if ($redirect == NULL) {
            $link = $_SERVER['HTTP_REFERER'];
        } else {
            $link = base64url_decode($redirect);
        }
        if (isset($file)) {
            $filename    = base64url_decode($file);

            // // $back_dir    ="assets/";
            $loc = $this->base_link . 'sekolah_' . $this->id_sekolah . '/' . base64url_decode($location) . '/' . $filename;

            if (file_exists($loc)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($loc));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: private');
                header('Pragma: private');
                header('Content-Length: ' . filesize($loc));
                ob_clean();
                flush();
                readfile($loc);

                exit;
            } else {
                $this->session->set_flashdata('message', 'File Rusak! Silahkan hubungi staf bersangkutan');

                $this->session->set_flashdata('judul', ' ');

                $this->session->set_flashdata('icon', 'warning');

                redirect($link);
            }
        }
    }
}
