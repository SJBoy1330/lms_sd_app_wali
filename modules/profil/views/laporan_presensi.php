<div class="main-container container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="row mb-2 my-2">
                <div class="col-12 px-0">
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
                                    <span class="text-uppercase">Nanda</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Nabila</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="calendar" class="my-2 rounded-3 shadow-sm"></div>
        </div>

        <div class="col-12">
            <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 01</p>
                            <p class="mb-0 size-13 fw-normal text-danger">Belum Presensi</p>
                        </div>
                    </div>
                </div>
            </a>

            <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 02</p>
                            <p class="mb-0 size-13 fw-normal text-success">Sudah Presensi</p>
                        </div>
                    </div>
                </div>
            </a>

            <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 03</p>
                            <p class="mb-0 size-13 fw-normal text-danger">Belum Presensi</p>
                        </div>
                    </div>
                </div>
            </a>

            <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-range size-26 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-15 fw-medium">Materi Pelajaran 04</p>
                            <p class="mb-0 size-13 fw-normal text-success">Sudah Presensi</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<!-- Modal Presensi Siswa -->
<div class="modal fade" id="modalPresensiSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-4">
                <h5 class="modal-title">Detail Presensi Siswa</h5>
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-check size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Hadir</p>
                                        <p class="fw-normal text-success size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-xmark size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Sakit</p>
                                        <p class="fw-normal text-danger size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-exclamation size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Ijin</p>
                                        <p class="fw-normal text-warning size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-question size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Tidak Hadir</p>
                                        <p class="fw-normal text-secondary size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>