<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-44 menu-btn">
                    <img src="<?= base_url(); ?>assets/icons/hamburger.png" width="24" alt="">
                </a>
            </div>
            <div class="col text-center">
                <!-- <div class="logo-small">
                        <img src="assets/img/logo.png" alt="" />
                        <h5><span class="text-secondary fw-light">Finance</span><br />Wallet</h5>
                    </div> -->
            </div>
            <div class="col-auto">
                <a href="notifikasi-SD.html" target="_self" class="btn btn-44 rounded-circle btn-notifikasi">
                    <img src="<?= base_url(); ?>assets/icons/notif.png" width="24" alt="">
                    <span class="count-indicator"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">
        <!-- Ucapan Selamat Datang -->
        <div class="row my-4 text-start">
            <div class="col-9">
                <p class="mb-0 ms-2 title-2">Halo, Wali <?= $nama_wali ?></p>
                <p class="mb-0 ms-2 title-1-home">Selamat Datang</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <?php foreach ($data_siswa as $siswa) : ?>
                    <a href="<?= base_url('rapot') ?>" class="card mx-1 anak-wali">
                        <div class="card-body">
                            <div class="row mt-3 d-flex justify-content-center align-items-center">
                                <div class="col-auto">
                                    <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-circle anak-wali" style="background-image: url(<?= base_url(); ?>assets/images/maria-ozawa.png)"></div>
                                </div>
                            </div>
                            <div class="row mt-3 d-flex justify-content-center align-items-center">
                                <div class="col align-self-center ps-0">
                                    <p class="size-14 text-center text-secondary mb-0"><?= $siswa->nis ?></p>
                                    <p class="text-center label-merah fw-medium"><?= $siswa->nama ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pengumuman -->
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Pengumuman</h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="list-pengumuman-SD.html" class="label-merah">Lihat Semua</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="detail-pengumuman-SD.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">

                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-1 size-13 fw-normal">Himbauan mengikuti vaksin covid 19
                                    untuk melakukan kegiatan PTM...</p>
                                <p class="fw-normal text-secondary size-12">3 bulan yang lalu</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="detail-pengumuman-SD.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                    <img src="<?= base_url(); ?>assets/images/orasi-osis.jpg" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-1 size-13 fw-normal">Orasi kandidat calon ketua osis diadakan
                                    di sekolah SMK Negeri 4 Malang...</p>
                                <p class="fw-normal text-secondary size-12">3 bulan yang lalu</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="detail-pengumuman-SD.html" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                    <img src="<?= base_url(); ?>assets/images/no-photo.png" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-1 size-13 fw-normal">Jadwal PTM dan PAS Gasal 4 - 11 jatuh
                                    pada bulan januari sehinggaa di...</p>
                                <p class="fw-normal text-secondary size-12">3 bulan yang lalu</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Berita -->
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Berita</h6>
            </div>
            <div class="col-auto">
                <a href="list-berita-SD.html" class="label-merah">Lihat Semua</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper cardswiper-berita">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= base_url(); ?>assets/images/tari-saman.png');">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto position-absolute badge-status">
                                            <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal">Hot
                                                News</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-text shadow-sm">
                                <div class="row px-3 py-3">
                                    <p class="mb-1 title-1-home-text">Tari Saman</p>
                                    <p class="mb-0 title-4-home-text">Tari Saman Adalah tarian Suku Gayo yang
                                        didirikan dan di kembangkan oleh ulama asal Aceh Tenggara, Tari Saman
                                        ditampilkan...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= base_url(); ?>assets/images/tari-saman.png');">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto position-absolute badge-status">
                                            <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal">Hot
                                                News</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-text shadow-sm">
                                <div class="row px-3 py-3">
                                    <p class="mb-1 title-1-home-text">Tari Saman</p>
                                    <p class="mb-0 title-4-home-text">Tari Saman Adalah tarian Suku Gayo yang
                                        didirikan dan di kembangkan oleh ulama asal Aceh Tenggara, Tari Saman
                                        ditampilkan...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= base_url(); ?>assets/images/tari-saman.png');">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto position-absolute badge-status">
                                            <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal">Hot
                                                News</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-text shadow-sm">
                                <div class="row px-3 py-3">
                                    <p class="mb-1 title-1-home-text">Tari Saman</p>
                                    <p class="mb-0 title-4-home-text">Tari Saman Adalah tarian Suku Gayo yang
                                        didirikan dan di kembangkan oleh ulama asal Aceh Tenggara, Tari Saman
                                        ditampilkan...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends -->
</main>
<!-- Page ends-->