<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home/list_pengumuman'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h5>Detail Pengumuman</h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="profile.html" target="_self" class="btn btn-44">

                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container top-20">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-12">
<<<<<<< Updated upstream
                        <figure class="overflow-hidden rounded-15 text-center detail-pengumuman">
                            <img src="<?= base_url('linker/img_konten/' . base64url_encode($pengumuman->gambar != '' || $pengumuman->gambar != NULL ? $pengumuman->gambar : 'kosong') . '/' . base64url_encode($pengumuman->create_date)) ?>" alt="" class="w-100 mx-auto">
=======
                        <figure class="overflow-hidden rounded-15 text-center">
                            <img src="<?= $pengumuman->gambar; ?>" alt="" class="w-100 mx-auto">
>>>>>>> Stashed changes
                        </figure>
                    </div>
                </div>

                <div class="row mx-2">
                    <p class="mt-2 mb-3 title-1-home"><?= $pengumuman->judul ?></p>
                    <p class="mb-1 title-2">Tanggal dibuat: </p>
                    <p class="mb-1 title-3"><?= nice_date_time($pengumuman->create_date) ?></p>
                </div>

                <div class="mt-3 mb-4 mx-2">
                    <p class="text-secondary deskripsi-berita"><?= $pengumuman->detail ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->