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
                <a href="<?= base_url('notifikasi'); ?>" target="_self" class="btn btn-44 rounded-circle btn-notifikasi">
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
                    <a href="<?= base_url('rapot') ?><?= "/{$siswa->id_siswa}" ?>" class="card mx-1 anak-wali">
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
        <?php if (count($data_pengumuman) > 0) : ?>
            <div class="row mt-4 mb-3 px-1">
                <div class="col">
                    <h6 class="title">Pengumuman</h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="<?= base_url('home/list_pengumuman'); ?>" class="label-merah">Lihat Semua</a>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data_pengumuman as $pengumuman) : ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?= base_url('home/detail_pengumuman/') . $pengumuman->id_pengumuman ?>" class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                            <?php
                                            if ($pengumuman->gambar != '' || $pengumuman->gambar != NULL) {
                                                $gambar = base64url_encode($pengumuman->gambar);
                                            } else {
                                                $gambar = base64url_encode('kosong');
                                            }
                                            ?>
                                            <img src="<?= base_url('linker/img_konten/' . $gambar . '/' . base64url_encode($pengumuman->create_date)) ?>" loading="lazy" alt="">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-1 size-13 fw-normal"><?= $pengumuman->judul ?></p>
                                        <p class="fw-normal text-secondary size-12"><?= nice_time($pengumuman->create_date) ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Berita -->
        <?php if (count($data_berita) > 0) : ?>
            <div class="row mt-4 mb-3 px-1">
                <div class="col">
                    <h6 class="title">Berita</h6>
                </div>
                <div class="col-auto">
                    <a href="<?= base_url('home/list_berita'); ?>" class="label-merah">Lihat Semua</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 px-0">
                    <div class="swiper-container cardswiper cardswiper-berita">
                        <div class="swiper-wrapper">
                            <?php foreach ($data_berita as $b) : ?>
                                <div class="swiper-slide">
                                    <?php

                                    if ($b->gambar != '' || $b->gambar != NULL) {

                                        $gambar = base64url_encode($b->gambar);
                                    } else {

                                        $gambar = base64url_encode('kosong');
                                    }

                                    ?>
                                    <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= site_url('linker/img_konten/' . $gambar . '/' . base64url_encode($b->create_date)); ?>');">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto position-absolute badge-status">
                                                    <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal"><?= $b->nama ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper-text shadow-sm">
                                        <div class="row px-3 py-3">
                                            <p class="mb-1 title-1-home-text"><?= $b->judul ?></p>
                                            <p class="mb-0 title-4-home-text"><?= $b->keterangan ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <!-- main page content ends -->
</main>
<!-- Page ends-->