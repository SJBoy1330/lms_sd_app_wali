<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home') ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h5>Berita</h5>
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
                <!-- List Berita -->
                <div class="row mb-3">
                    <div class="col">
                        <h6 class="title">Berita Hari Ini</h6>
                    </div>
                    <div class="col-auto">
                        <!-- <a href="bills.html" class="small">Pay Bill</a> -->
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12 px-0">
                        <!-- swiper categories -->
                        <div class="swiper-container connectionwiper">
                            <div class="swiper-wrapper">
                                <a class="swiper-slide" href="<?= base_url('home/list_berita') ?>">
                                    <div class="tag border <?= !isset($_GET['kategori']) ? 'active' : '' ?>">
                                        <span class="text-uppercase">Semua</span>
                                    </div>
                                </a>
                                <?php foreach ($data_kategori as $k) : ?>
                                    <a class="swiper-slide" href="<?= base_url('home/list_berita?kategori=' . $k->id_kategori_konten) ?>">
                                        <div class="tag border <?= $_GET['kategori'] == $k->id_kategori_konten ? 'active' : '' ?>">
                                            <span class="text-uppercase"><?= $k->nama ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php foreach ($data_berita as $b) : ?>
                    <a href="<?= base_url('home/detail_berita/') . $b->id_konten ?>" class="col-12 text-dark">
                        <div class="row">
                            <div class="col-12">
                                <figure class="overflow-hidden rounded-15 text-center">
                                    <img src="<?= $b->gambar != '' || $b->gambar != NULL ? $b->gambar : 'kosong' ?>" alt="" class="w-100 mx-auto">
                                </figure>
                            </div>
                        </div>

                        <div class="row mb-4 mx-2">
                            <div class="col-12">
                                <p class="my-2 title-1-home"><?= $b->judul ?></p>
                                <p class="text-secondary deskripsi-berita"><?= $b->keterangan ?><a href="<?= base_url('home/detail_berita/') . $b->id_konten ?>" class="label-merah">Selengkapnya</a></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="lds-ripple">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->