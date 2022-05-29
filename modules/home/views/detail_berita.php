<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home/list_berita'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Detail Berita</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"> </a>
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
                        <figure class="overflow-hidden rounded-15 text-center detail-berita" style="background-position: center; background-size: cover; background-image: url('<?= $berita->gambar != '' || $berita->gambar != NULL ? $berita->gambar : 'kosong' ?>');">
                        </figure>
                    </div>
                </div>

                <div class="row mx-2">
                    <p class="mt-2 mb-3 title-1-home"><?= $berita->judul ?></p>
                    <p class="mb-1 title-2">Tanggal dibuat : </p>
                    <p class="mb-1 title-3"><?= nice_date_time($berita->create_date) ?></p>
                </div>

                <div class="mt-3 mb-4 mx-2">
                    <p class="text-secondary deskripsi-berita"><?= $berita->detail ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->