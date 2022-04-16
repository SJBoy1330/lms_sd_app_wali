<main class="h-100">

<!-- main page content -->
<div class="main-container container">
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="javascript:void(0)" target="_self" class="btn btn-44 menu-btn">
                        <img src="<?= base_url('assets/icons/hamburger.png')?>" width="24" alt="">
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
                        <img src="<?= base_url('assets/icons/notif.png')?>" width="24" alt="">
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>
        <!-- comment -->
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item rounded-20 py-1 px-1 mb-3 shadow-sm ">
                            <div class="row p-2">
                                <div class="d-flex col-auto align-items-center ">
                                    <div class="avatar avatar-50 shadow-sm rounded-12 avatar-presensi-outline">
                                       <div class="avatar avatar-40 rounded-10 avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                       </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0">
                                    <p class="mb-0 fw-bold size-15">Sisa Tagihan</p>
                                </div>
                                <div class="col-auto d-flex justify-content-end align-items-center ps-0">
                                    <div class="">
                                        <p class="mb-0 fw-bold size-13 text-danger text-end mb-0">Jumlah Tagihan</p>
                                        <p class="mb-0 fw-normal size-12 text-secondary text-end">Rp.1.000.000,00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="row">
                    <a data-bs-toggle="modal" data-bs-target="#detailTagihan">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                            <span class="py-2 px-3 text-light size-12 position-absolute top-0 end-0 bg-ec3528 rounded-15-start-bottom blm-lns">Belum Lunas</span>
                            <span class="size-14 fw-bold">SPP MARET 2022</span>
                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                       <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
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
                                            <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                       </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Nama Bank</p>
                                    <p class="mb-0 fw-bold size-15">Bank BNI</p>
                                </div>
                            </div>

                            <div class="row mt-4 mx-1">
                                <a data-bs-toggle="modal" data-bs-target="#formulirPembayaran" role="button" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tagihan</a>
                            </div>

                        </div>
                    </a>
            </div>
        </div>
    </div>

    <!-- Page ends-->
<div class="modal fade" id="detailTagihan" tabindex="-1" aria-labelledby="detailTagihanModal" aria-hidden="true">
    <div class="modal-dialog">
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
                                        <i class="fa-solid fa-receipt mt-0 size-18 text-white"></i>
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
                                        <i class="fa-solid fa-calendar-week size-18 text-white"></i>
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
                                        <i class="fa-solid fa-rupiah-sign size-18 text-white"></i>
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
                                        <i class="fa-solid fa-building-columns size-18 text-white"></i>
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
                                        <i class="fa-solid fa-money-bill-transfer size-18 text-white"></i>
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
                                        <i class="fa-solid fa-building-columns mt-0 size-18 text-white"></i>
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
    <div class="modal-dialog">
        <div class="modal-content">
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
                                        <i class="fa-solid fa-receipt mt-0 size-18 text-white"></i>
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
                                        <i class="fa-solid fa-rupiah-sign mt-0 size-18 text-white"></i>
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
                        <span class="fw-bolder size-15">Metode Pembayaran</span>
                        <form class="mt-2">
                            <select class="form-select rounded-10 text-secondary bg-f5f5f5 size-11"
                                    aria-label="Default select example">
                                <option selected value="1">BRI</option>
                                <option value="2">BNI</option>
                                <option value="3">BCA</option>
                            </select>
                        </form>
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center aign-items-center my-2">
                                <div class="avatar avatar-70 d-flex align-items-center">
                                    <img src="<?= base_url()?>assets/images/BRI-removebg-preview%201.png" alt="">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center my-2">
                                <span class="size-18 fw-medium">Bank Rakyat Indonesia</span>
                            </div>
                            <div class="col-12">
                                <span class="size-9 fw-bold">Silahkan Tranfer Ke</span>
                                <ul class="ul-form-pembayaran">
                                    <li class="size-9 fw-bolder">Bank BRI Cabang SIDOARJO</li>
                                    <li class="size-9 fw-bolder">No. Rekening : 777777</li>
                                    <li class="size-9 fw-bolder">Atas Nama : SMA NASIONAL</li>
                                </ul>
                                <div class="box">
                                    <p class="d-block size-9 fw-bold mb-0">Mohon Tuliskan Berita:</p>
                                    <p class="fw-bolder size-9">INVOICE 03/1</p>
                                </div>
                            </div>
                        </div>
                        <button class="w-100 my-2 py-2 rounded-10 btn btn-primary bg-ec3528 border-white size-12 fw-lighter">
                            UPLOAD BUKTI PEMBAYARAN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>