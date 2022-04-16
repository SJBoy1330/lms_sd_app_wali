<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home')?>" target="_self" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-white"></i>
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center text-center">
                <h5 class="text-white">Mia Khalifah</h5>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44 rounded-circle">

                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="tablinknya-tugas-ujian">
                <div class="col-12 align-self-center tab-wali" style="display: flex; justify-content:center; align-items:center;">
                    <button id="defaultOpen" class="tablinks-wali" onclick="openCity(event, 'Tugas')" style=" width: 100%; height: 100%; padding: 10px;">Tugas</button>
                    <button class="tablinks-wali" onclick="openCity(event, 'Ujian')" style="width: 100%; height: 100%; padding: 10px;">Ujian</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">
        <div class="row mb-2">
            <div class="col-12 col-md-12 col-lg-12 mt-5">
                <div class="card shadow-none bg-transparent">
                    <div class="card-body tabcontent-wali" id="Tugas" style="padding: 6px 0px;">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-school size-13 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Nama Sekolah</p>
                                            <p class="mb-0 size-12 fw-medium">SMK Negeri 4 Malang</p>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-building-user size-13 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Kelas</p>
                                            <p class="mb-0 size-12 fw-medium">XI IPA 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-location-dot size-16 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Alamat</p>
                                            <p class="mb-0 size-12 fw-medium">Jalan Tanimbar No.22</p>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-calendar-circle-user size-16 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Semester</p>
                                            <p class="mb-0 size-12 fw-medium">Ganjil</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-graduation-cap size-16 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Nama</p>
                                            <p class="mb-0 size-12 fw-medium">Mia Khalifah</p>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-globe-stand size-18 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Tahun Pelajaran</p>
                                            <p class="mb-0 size-12 fw-medium">2021 / 2022 Ganjil</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="title"><i class="fa-solid fa-circle nilai me-2"></i>Nilai Akademik</h6>
                            </div>
                        </div>

                        <a data-bs-toggle="modal" href="#modalDetailTugas" role="button" class="card mb-4">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-14 fw-normal text-secondary">Mata Pelajaran</p>
                                        <p class="mb-0 size-16 fw-medium">Lorem ipsum dolor sit amet consectetur...</p>
                                        <div class="progress mt-1 rounded-10" style="height:20px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <h6 class="title tugas"><i class="fa-light fa-circle tugas me-2"></i>5 Tugas</h6>
                                            <h6 class="title tugas-telat"><i class="fa-solid fa-xmark tugas-telat ms-3 me-2"></i>1 Tugas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="card mb-4">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-14 fw-normal text-secondary">Mata Pelajaran</p>
                                        <p class="mb-0 size-16 fw-medium">Lorem ipsum dolor sit amet consectetur...</p>
                                        <div class="progress mt-1 rounded-10" style="height:20px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <h6 class="title tugas"><i class="fa-light fa-circle tugas me-2"></i>5 Tugas</h6>
                                            <h6 class="title tugas-telat"><i class="fa-solid fa-xmark tugas-telat ms-3 me-2"></i>1 Tugas</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                        <div class="wrapper-searching-tugas">
                            <div class="wrapper-samaran"></div>
                            <div class="row bg-white">
                                <div class="col-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                        <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-secondary filter-tugas border-0" data-bs-toggle="modal" data-bs-target="#filterUjianModal">
                                        <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="page-scroll-full pt-5">
                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-success">Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-bs-toggle="modal" href="#detailUjianModal" role="button" class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0 size-13 fw-medium">Mengerjakan Soal Aljabar</p>
                                            <p class="mb-0 size-14 fw-normal text-danger">Belum Tuntas</p>
                                        </div>
                                        <div class="col-auto align-self-center pe-3">
                                            <i class="fa-regular fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends -->
</main>
<!-- Page ends-->