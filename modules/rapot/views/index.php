<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header tugas-ujian position-fixed" style="background-color: #EC3528;">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home') ?>" target="_self" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-white"></i>
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center text-center">
                <h5 class="text-white"><?= $data_siswa->nama ?></h5>
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
            <div class="col-12 col-md-12 col-lg-12" style="margin-top: 60px;">
                <div class="card shadow-none bg-transparent">
                    <div class="card-body tabcontent-wali" id="Tugas" style="padding: 6px 0px;">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row mt-2 mb-3">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto align-self-center">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-school size-13 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Nama Sekolah</p>
                                            <p class="mb-0 size-12 fw-medium"><?= $data_sekolah->nama_sekolah ?></p>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="col-auto align-self-center">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-building-user size-13 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Kelas</p>
                                            <p class="mb-0 size-12 fw-medium"><?= $data_kelas->nama ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto align-self-center">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-location-dot size-16 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Alamat Sekolah</p>
                                            <p class="mb-0 size-12 fw-medium">Jalan Tanimbar No.22</p>
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
                                            <p class="mb-0 size-12 fw-medium"><?= $data_kelas->tahun_ajaran ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-graduation-cap size-16 text-white"></i>
                                                    <i class="fa-solid fa-globe-stand size-18 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-2 align-self-center" style="flex-wrap: wrap;">
                                            <p class="mb-0 size-10 fw-normal text-secondary">Nama</p>
                                            <p class="mb-0 size-12 fw-medium"><?= $data_siswa->nama ?></p>
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

                        <?php foreach ($data_pelajaran as $p) : ?>
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
                                            <p class="mb-0 size-16 fw-medium"><?= $p->nama ?></p>
                                            <?php if ($p->jumlah_tugas != 0) : ?>
                                                <div class="progress mt-1 rounded-10" style="height:20px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $p->persen_tugas ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?= $p->persen_tugas ?>%</div>
                                                </div>
                                            <?php else : ?>
                                                Tidak ada tugas
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                        <div class="wrapper-searching-tugas">
                            <div class="wrapper-samaran"></div>
                            <div class="row">
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

<!-- Modal Detail Tugas -->
<div class="modal fade" id="modalDetailTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail-tugas-ujian">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tugas Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row bg-white" style="position: fixed; z-index: 1;">
                    <div class="col-9">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                            <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <button class="btn btn-secondary filter-tugas border-0" data-bs-toggle="modal" data-bs-target="#filterTugasModal">
                            <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                        </button>
                    </div>
                </div>
                <div class="page-scroll pt-5">
                    <div class="card my-4">
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
                                <div class="col-auto align-self-center">
                                    <div class="nilai-tugas">
                                        <p>150</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                                    <p class="mb-0 size-14 fw-normal text-warning">Terlambat</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                                    <p class="mb-0 size-14 fw-normal text-warning">Terlambat</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-4">
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
                                <div class="col-auto align-self-center">
                                    <div class="nilai-tugas">
                                        <p>150</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                                    <p class="mb-0 size-14 fw-normal text-warning">Terlambat</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
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
                                    <p class="mb-0 size-14 fw-normal text-warning">Terlambat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Filter Tugas Modal -->
<div class="modal fade" id="filterTugasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keterangan Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label title-3">Keterangan tugas</label>
                    <select class="form-select-pribadi" aria-label="Default select example">
                        <option selected>Pilih keterangan tugas</option>
                        <option value="1">Tuntas</option>
                        <option value="2">Belum Tuntas</option>
                        <option value="3">Terlambat</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
            </div>
        </div>
    </div>
</div>

<!-- Filter Ujian Modal -->
<div class="modal fade" id="filterUjianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keterangan Ujian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label title-3">Pelajaran</label>
                    <select class="form-select form-select-pribadi" aria-label="Default select example">
                        <option selected>Pilih pelajaran</option>
                        <option value="1">XI IPA 1</option>
                        <option value="2">XI IPA 2</option>
                        <option value="3">XI IPA 3</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="exampleFormControlInput3" class="form-label title-3">Keterangan Ujian</label>
                    <select class="form-select form-select-pribadi" aria-label="Default select example">
                        <option selected>Pilih keterangan</option>
                        <option value="1">Tuntas</option>
                        <option value="2">Belum Tuntas</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
            </div>
        </div>
    </div>
</div>

<!-- Filter Detail Ujian Modal -->
<div class="modal fade" id="detailUjianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Ujian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-6 ps-1 pe-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto pe-2 ps-2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0 pe-1">
                                        <p class="mb-0 size-12 fw-medium">Mata Pelajaran</p>
                                        <p class="mb-0 size-10 fw-normal text-secondary">Bahasa Indonesia...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 ps-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto pe-2 ps-2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-hourglass-clock size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0 pe-1">
                                        <p class="mb-0 size-12 fw-medium">Batas Akhir</p>
                                        <p class="mb-0 size-10 fw-normal text-secondary">30 Maret 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 ps-1 pe-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto pe-2 ps2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-memo mt-0 size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0 pe-1">
                                        <p class="mb-0 size-12 fw-medium">Keterangan</p>
                                        <p class="mb-0 size-10 fw-normal text-secondary">Tugas Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 ps-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto pe-2 ps-2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-book-open-cover mt-0 size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0 pe-1">
                                        <p class="mb-0 size-12 fw-medium">Status Ujian</p>
                                        <p class="mb-0 size-10 fw-normal text-success">Tuntas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>