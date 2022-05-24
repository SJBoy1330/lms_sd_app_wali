<main class="h-100">

    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-44 menu-btn">
                    <img src="<?= base_url('assets/icons/hamburger.png') ?>" width="24" alt="">
                </a>
            </div>
            <div class="col text-center"></div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44" data-bs-toggle="modal" data-bs-target="#filterSPP"><i class="fa-regular fa-filter"></i></a>
            </div>
        </div>
    </header>

    <!-- main page content -->
    <div class="main-container container">
        <div class="row">
            <?php if (count($data_siswa) > 1) : ?>
                <div class="col-12 px-0">
                    <!-- swiper categories -->
                    <div class="swiper-container connectionwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tag border active">
                                    <span class="text-uppercase">Saka</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Aljen</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Nabila</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Nanda</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item rounded-20 py-1 px-1 mb-3 shadow-sm ">
                            <div class="row p-2">
                                <div class="d-flex col-auto align-items-center ">
                                    <div class="avatar avatar-50 shadow-sm rounded-12 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-10 avatar-presensi-inline">
                                            <i class="fa-solid fa-envelope-open-text size-24 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0">
                                    <p class="mb-0 fw-bold size-15">Sisa Tagihan</p>
                                </div>
                                <div class="col-auto d-flex justify-content-end align-items-center ps-0">
                                    <div class="">
                                        <p class="mb-0 fw-bold size-13 text-danger text-end mb-0">Jumlah Tagihan</p>
                                        <p class="mb-0 fw-normal size-12 text-secondary text-end"><?= rupiah($data_spp->jumlah_tagihan) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($data_spp->result as $spp) : ?>
                    <a class="row mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#detailTagihan">
                            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                                <?php if ($spp->lunas === 'Y') : ?>
                                    <span class="py-2 px-3 text-light size-14 position-absolute top-0 end-0 bg-00DFA3 rounded-15-start-bottom blm-lns">Lunas</span>
                                <?php else : ?>
                                    <span class="py-2 px-3 text-light size-12 position-absolute top-0 end-0 bg-ec3528 rounded-15-start-bottom blm-lns">Belum Lunas</span>
                                <?php endif; ?>
                                <span class="size-14 fw-bold">SPP <?= month_from_number($spp->bulan) ?> <?= $spp->tahun ?></span>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-rupiah-sign size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Jumlah bayar</p>
                                        <p class="mb-0 fw-bold size-15"><?= rupiah($spp->jumlah) ?></p>
                                    </div>
                                </div>
                                <?php if ($spp->lunas === 'Y') : ?>
                                    <div class="row py-1 px-2 mb-3">
                                        <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-building-columns size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-normal size-13 text-secondary">Nama Bank</p>
                                            <p class="mb-0 fw-bold size-15"><?= $spp->nama_bank ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($spp->lunas === 'Y') : ?>
                                    <div class="row mt-4 mx-1">
                                        <a data-bs-toggle="modal" data-id="<?= $spp->id_tagihan; ?>" data-bs-target="#detailTagihan" role="button" class="btn btn-block btn-md btn-danger btn-detail-tugas button_detail_ajax">Detail Tagihan</a>
                                    </div>
                                <?php else : ?>
                                    <div class="row mt-4 mx-1">
                                        <a data-bs-toggle="modal" data-bs-target="#formulirPembayaran" role="button" class="btn btn-block btn-md btn-danger btn-detail-tugas">Bayar Tagihan</a>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </a>
                    </a>
                <?php endforeach; ?>
                <!-- 
                <a class="row mb-3">
                    <a data-bs-toggle="modal" data-bs-target="#">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                            <span class="py-2 px-3 text-light size-14 position-absolute top-0 end-0 bg-00DFA3 rounded-15-start-bottom blm-lns">Lunas</span>
                            <span class="size-14 fw-bold">SPP APRIL 2022</span>
                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-rupiah-sign size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Jumlah bayar</p>
                                    <p class="mb-0 fw-bold size-15">Rp.500.000</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mb-3">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-building-columns size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Nama Bank</p>
                                    <p class="mb-0 fw-bold size-15">Bank BNI</p>
                                </div>
                            </div>

                            <div class="row mt-4 mx-1">
                                <a data-bs-toggle="modal" data-bs-target="#detailTagihan" role="button" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tagihan</a>
                            </div>

                        </div>
                    </a>
                </a> -->
            </div>
        </div>
    </div>

    <!-- Page ends-->
    <div class="modal fade" id="detailTagihan" tabindex="-1" aria-labelledby="detailTagihanModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content detail-tagihan">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="detailTagihanModal">Detail Tagihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Ngko di hapus yo wkwkw -->
                <h1 id="tampil_sementara"></h1>
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

    <div class="modal fade" id="formulirPembayaran" tabindex="-1" aria-labelledby="formPembayaranModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content formulir-pembayaran">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="formPembayaranModal">Formulir Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row p-2">
                        <div class="col-12 px-1 mb-3">
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
                        <div class="col-12 px-1 mb-3">
                            <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                    <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-money-check-pen mt-0 size-16 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-bold size-15">Kategori Pembayaran</p>
                                    <p class="mb-0 fw-normal size-12 text-secondary">03/44545</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-1 mb-3">
                            <div class="col-12  d-flex py-2 px-2 mt-2 rounded-15 shadow-sm ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2  ">
                                    <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-rupiah-sign mt-0 size-16 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-bold size-15">Jumlah Pembayaran</p>
                                    <p class="mb-0 fw-normal size-12 text-secondary">Rp. 1.000.000,00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 rounded-15 shadow-sm mb-2 p-2 border p-2">
                            <p class="mb-0 fw-bolder size-15 my-2 ms-1">Metode Pembayaran</p>
                            <form class="mt-2 mx-1">
                                <select class="form-select form-select-pribadi text-secondary bg-f5f5f5 size-11 border-0">
                                    <option selected value="1">BRI</option>
                                    <option value="2">BNI</option>
                                    <option value="3">BCA</option>
                                </select>
                            </form>
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center aign-items-center my-2">
                                    <div class="avatar avatar-70 d-flex align-items-center">
                                        <img src="<?= base_url() ?>assets/images/BRI-removebg-preview%201.png" alt="">
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center my-2">
                                    <span class="size-15 fw-medium">Bank Rakyat Indonesia</span>
                                </div>
                                <div class="col-12 ps-4 mb-1">
                                    <p class="mb-0 size-14 text-dark">Silahkan transfer ke</p>
                                </div>
                                <div class="col-12 d-flex ps-5 flex-column">
                                    <div class="detail-tft d-flex my-2">
                                        <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                            <i class="fa-solid fa-circle" style="color: #ec3528"></i>
                                        </div>
                                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-bold size-13">Bank BRI cabang SIDOARJO</p>
                                        </div>
                                    </div>

                                    <div class="detail-tft d-flex mb-2">
                                        <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                            <i class="fa-solid fa-circle" style="color: #ec3528"></i>
                                        </div>
                                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-bold size-13">No. Rekening : 777777</p>
                                        </div>
                                    </div>

                                    <div class="detail-tft d-flex mb-2">
                                        <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                            <i class="fa-solid fa-circle" style="color: #ec3528"></i>
                                        </div>
                                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-bold size-13">Atas Nama : SMA NASIONAL</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 ps-4 my-2">
                                    <p class="mb-0 size-14 text-dark">Mohon tuliskan berita :</p>
                                    <p class="mb-0 size-15 fw-medium">INVOICE 03/1</p>
                                </div>
                            </div>
                            <button class="w-100 my-2 py-2 rounded-10 btn btn-danger bg-ec3528 border-white size-12 fw-lighter">
                                UPLOAD BUKTI PEMBAYARAN
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Tagihan -->
    <div class="modal fade" id="detailTagihan" tabindex="-1" aria-labelledby="detailTagihanModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
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
                                    <p class="mb-0 fw-normal size-12 text-success">Lunas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Status SPP -->
    <div class="modal fade" id="filterSPP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label title-3">Kategori Pembayaran</label>
                        <select class="form-select form-select form-select-pribadi border-0">
                            <option selected>Pilih kategori</option>
                            <?php foreach ($data_spp->kategori as $kategori) : ?>
                                <option value="<?= $kategori->id_kategori_biaya ?>"><?= $kategori->nama ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label title-3">Status</label>
                        <select class="form-select form-select form-select-pribadi border-0">
                            <option selected>Pilih status</option>
                            <option value="1">Lunas</option>
                            <option value="2">Belum Lunas</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
                </div>
            </div>
        </div>
    </div>