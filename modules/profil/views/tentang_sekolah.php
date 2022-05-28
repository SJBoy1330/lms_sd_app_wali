<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('profil') ?>" class="btn btn-44">
                    <img src="<?= base_url(); ?>assets/icons/kembali.svg" width="24" alt="">
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Tentang Sekolah</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    <!-- main page content -->
    <div class="main-container container">
        <div class="vektor-bantuan-satu">
            <img src="<?= base_url('assets/images/vektor-bantuan-1.png') ?>" width="175" alt="">
        </div>
        <div class="vektor-bantuan-dua">
            <img src="<?= base_url('assets/images/vektor-bantuan-2.png') ?>" width="175" alt="">
        </div>
        <div class="row justify-content-end pe-3">
            <div class="col-6">
                <div class="row mb-3 bg-f5f5f5 py-3 rounded-10 rows-1">
                    <div class="col-auto">
                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                <i class="fa-solid fa-school size-15 mt-0 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-13 fw-medium">Nama Sekolah</p>
                        <p class="mb-0 size-10 fw-normal text-secondary"><?= $data_sekolah->nama_sekolah ?></p>
                    </div>
                </div>
                <div class="row mb-3 bg-f5f5f5 py-3 rounded-10 rows-1">
                    <div class="col-auto">
                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                <i class="fa-solid fa-id-badge size-15 mt-0 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-13 fw-medium">NPSM</p>
                        <p class="mb-0 size-10 fw-normal text-secondary"><?= $data_sekolah->npsm ?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row my-5 ps-3 rows-1">
            <div class="col-6 mb-3 rounded-10 p-2">
                <div class="row mb-3 bg-f5f5f5 py-3 rounded-10">
                    <div class="row d-flex justify-content-center align-items-center mb-2">
                        <div class="col-auto">
                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                    <i class="fa-solid fa-school size-15 mt-0 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto align-self-center ps-0">
                        <p class="mb-0 size-13 fw-medium mb-2 text-center">Alamat Sekolah</p>
                        <p class="mb-0 size-10 fw-normal text-secondary ps-3"><?= $data_sekolah->alamat ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-around align-items-center rows-1">
            <div class="col-5">
                <div class="row bg-f5f5f5 py-3 rounded-10">
                    <div class="col-auto ps-2 pe-2">
                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                <i class="fa-solid fa-graduation-cap size-15 mt-0 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-12 fw-medium">Jumlah Siswa</p>
                        <p class="mb-0 size-10 fw-normal text-secondary"><?= $count_siswa ?> Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row bg-f5f5f5 py-3 rounded-10">
                    <div class="col-auto ps-2 pe-2">
                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                <i class="fa-solid fa-chalkboard-user size-15 mt-0 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-12 fw-medium">Jumlah Staf</p>
                        <p class="mb-0 size-10 fw-normal text-secondary"><?= $count_staf ?> Staf</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends -->

</main>