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
                                        <p class="mb-0 size-12 fw-medium"><?= $result->detail->sekolah; ?></p>
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
                                        <p class="mb-0 size-12 fw-medium"><?= $result->detail->kelas; ?></p>
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
                                        <p class="mb-0 size-10 fw-normal text-secondary">Tahun Ajaran</p>
                                        <p class="mb-0 size-12 fw-medium"><?= $result->detail->tahun_ajaran; ?></p>
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
                                        <p class="mb-0 size-10 fw-normal text-secondary">Alamat</p>
                                        <p class="mb-0 size-12 fw-medium"><?= $result->detail->alamat; ?></p>
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
                    <?php if (isset($result->tugas) && $result->tugas != NULL) : ?>
                        <?php foreach ($result->tugas as $tugas) : ?>
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
                                            <p class="mb-0 size-16 fw-medium"><?= $tugas->nama_pelajaran; ?></p>
                                            <?php if ($tugas->persentase != 0) : ?>
                                                <div class="progress mt-1 rounded-10" style="height:20px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width :<?= $tugas->persentase; ?>% ;" aria-valuemin="0" aria-valuemax="100"><?= $tugas->persentase . '%' ?></div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <?= vector_default("vector_tugas_kosong.svg", "Tidak ada data tugas", "Kelas putra/putri anda belum memberikan tugas apapun, Hubungi pihak sekolah jika terjadi kesalahan data"); ?>
                    <?php endif; ?>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <?php if ($result->ujian) : ?>
                        <div class="wrapper-searching-tugas mb-3">
                            <div class="wrapper-samaran"></div>
                            <div class="row bg-white" style="width: 100vw;">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" onkeyup="search(this, '#display_ujian', 'a')" class=" form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                        <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="page-scroll-full pt-5" id="display_ujian">
                        <?php if (isset($result->ujian) && $result->ujian != NULL) : ?>
                            <?php foreach ($result->ujian as $ujian) : ?>
                                <a data-bs-toggle="offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight-<?= $ujian->id_pelajaran; ?>" aria-controls="offcanvasRight" class="card my-4">
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
                                                <p class="mb-0 size-15 fw-medium search_target"><?= $ujian->nama_pelajaran; ?></p>
                                            </div>
                                            <div class="col-auto align-self-center pe-3">
                                                <i class="fa-regular fa-chevron-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight-<?= $ujian->id_pelajaran; ?>" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel-<?= $ujian->id_pelajaran ?>">Daftar Ujian</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="row bg-white" style="width: 100vw;">
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <input onkeyup="search(this, '#display_ujian_detail_<?= $ujian->id_pelajaran ?>', 'a .card-body')" type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="search-ujian-<?= $ujian->id_pelajaran; ?>">
                                                    <button class="input-group-text searhing" id="search-ujian-<?= $ujian->id_pelajaran; ?>" style="background-color:#EC3528;;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex justify-content-center align-items-center ps-0">
                                                <button class="btn btn-secondary filter-tugas border-0 button_filter" data-id="<?= $ujian->id_pelajaran; ?>" data-bs-toggle="modal" data-bs-target="#filterUjian">
                                                    <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="display_ujian_detail_<?= $ujian->id_pelajaran ?>">
                                            <?php foreach ($ujian->result as $row) : ?>
                                                <a data-bs-toggle="modal" data-status="<?php
                                                                                        if ($row->nilai < $row->kkm) {
                                                                                            echo 'belum_lulus';
                                                                                        } else {
                                                                                            echo 'lulus';
                                                                                        }
                                                                                        ?>" data-id="<?= $row->id_ujian; ?>" href="#detailUjianModal" role="button" class="card my-4 zoom-filter button_detail_ujian">
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
                                                                <p class="mb-0 size-13 fw-medium"><?= $row->nama_paket; ?></p>
                                                                <p class="mb-0 size-14 fw-normal 
                                                                  <?php
                                                                    if ($row->nilai < $row->kkm) {
                                                                        echo 'text-danger';
                                                                    } else {
                                                                        echo 'text-success';
                                                                    }
                                                                    ?>">
                                                                    <?php
                                                                    if ($row->nilai < $row->kkm) {
                                                                        echo 'Tidak lulus';
                                                                    } else {
                                                                        echo 'Lulus';
                                                                    }
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-auto align-self-center pe-3">
                                                                <i class="fa-regular fa-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php else : ?>
                            <?= vector_default("vector_ujian_kosong.svg", "Tidak ada data ujian", "Sekolah belum menyediakan ujian atau siswa belum mengikuti ujian satupun, Hubungi pihak sekolah jika terjadi kesalahan data!"); ?>
                        <?php endif; ?>
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
                    <div class="wrapper-searching-tugas mb-3">
                        <div class="wrapper-samaran"></div>
                        <div class="row bg-white" style="width: 100vw;">
                            <div class="col-10">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                    <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                                </div>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center ps-0">
                                <button class="btn btn-secondary filter-tugas border-0" data-bs-toggle="modal" data-bs-target="#filterUjian">
                                    <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                                </button>
                            </div>
                        </div>
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
        </div>
    </div>
</div>

<!-- Filter Keterangan Raport -->
<div class="modal fade" id="filterUjian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label title-3">Keterangan Ujian</label>
                    <select class="form-select form-select form-select-pribadi border-0" id="status_ujian">
                        <option value="all">Semua</option>
                        <option value="lulus">Lulus</option>
                        <option value="belum_lulus">Belum Lulus</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <input type="hidden" id="id_pelajaran_display">
                <button type="button" onclick="filter_rapot()" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</button>
            </div>
        </div>
    </div>
</div>