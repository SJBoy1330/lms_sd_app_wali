<!-- Begin page -->
<main class="h-100">

<!-- Header -->
<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('home')?>" class="btn btn-44">
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
                            <div class="swiper-slide">
                                <div class="tag border active">
                                    <span class="text-uppercase">Semua</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Hiburan</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Perlombaan</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Music</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Accessories</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Camera</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Jwellery</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <a href="<?= base_url('home/detail_berita'); ?>" class="col-12 text-dark">
                <div class="row">
                    <div class="col-12">
                        <figure class="overflow-hidden rounded-15 text-center">
                            <img src="<?= base_url('assets/images/tari-saman.png');?>" alt="" class="w-100 mx-auto">
                        </figure>
                    </div>
                </div>

                <div class="row mb-4 mx-2">
                    <div class="col-12">
                        <p class="my-2 title-1-home">Tari Saman</p>
                        <p class="text-secondary deskripsi-berita">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... <a href="#" class="label-merah">Selengkapnya</a></p>
                    </div>
                </div>
            </a>

            <a href="<?= base_url('home/detail_berita'); ?>" class="col-12 text-dark">
                <div class="row">
                    <div class="col-12">
                        <figure class="overflow-hidden rounded-15 text-center">
                            <img src="<?= base_url('assets/images/no-photo-big.png');?>" alt="" class="w-100 mx-auto">
                        </figure>
                    </div>
                </div>

                <div class="row mb-4 mx-2">
                    <div class="col-12">
                        <p class="my-2 title-1-home">Lorem Ipsum is simply dummy...</p>
                        <p class="text-secondary deskripsi-berita">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... <a href="#" class="label-merah">Selengkapnya</a></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>
    </div>
</div>
<!-- main page content ends -->


</main>
<!-- Page ends-->