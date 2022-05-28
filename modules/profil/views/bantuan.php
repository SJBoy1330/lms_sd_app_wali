<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('profil') ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left size-18"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Bantuan</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>

    <!-- main page content -->
    <div class="main-container container top-20">
        <div class="row">
            <div class="h-190 bg-ec3528 text-white text-center col-12 d-flex justify-content-center flex-column">
                <h3 class="mt-5 pt-3">Bagaimana cara kita membantu anda?</h3>
                <span class="mb-4 pb-3 fw-lighter">Cari topik sesuai dengan kendala anda</span>
                <form class="d-flex">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group searching" style="width: 92vw;">
                                <input type="text" class="form-control form-control-pribadi text-start pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 mb-2">
            <div class="col-12 col-md-12 col-lg-12">
                <span class="size-15 fw-bolder">Trending Topik</span>
                <div class="row mb-2 my-2">
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
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-0">
                <div class="box-fiture">
                    <a data-bs-toggle="modal" data-bs-target="#modalDetailNotifikasi" class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-3 mx-3">
                        <div class="row p-2">
                            <div class="col align-self-center ps-2">
                                <p class="mb-0 fw-bold size-14">Bagaimana cara melakukan login?</p>
                            </div>
                            <div class="col-auto d-flex justify-content-end align-items-center ps-0">
                                <div class="fs-3">
                                    <i class="fa-solid fa-chevron-right size-14"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
</main>

<div class="modal fade" id="modalDetailNotifikasi" tabindex="-1" aria-labelledby="detailTagihanModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail-tagihan">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="detailTagihanModal">Detail Tagihan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-2fix">
                    <div class="col-6 px-1 mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-receipt mt-0 size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-15">No. Tagihan</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">03/44545</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-1  mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2 ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-week size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-15">Tanggal</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">30 Maret 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-1 mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-money-check-pen mt-0 size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-13">Kategori Biaya</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">SPP Maret 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-1  mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2 ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-rupiah-sign size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-15">Jumlah</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">30 Maret 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-1 mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-building-columns size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-13">Metode Bayar</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">Bank BRI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-1  mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2 ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-money-bill-transfer size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-13">Status Tagihan</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">30 Maret 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2fix d-flex justify-content-center">
                    <div class="col-12 px-1 mb-3">
                        <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-building-columns mt-0 size-16 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-bold size-15">Bukti Pembayaran</p>
                                <p class="mb-0 fw-normal size-12 text-secondary">bukti bayar spp.png</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 p-0">
                        <figure class="overflow-hidden rounded-15 text-center">
                            <img src="assets/img/news1.jpg" alt="" class="w-100 mx-auto">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>