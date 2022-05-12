<!-- Begin page -->
<main class="h-100">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h5>Pengumuman</h5>
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
    <div class="main-container container">
        <!-- Pengumuman -->
        <div class="row mb-3 px-1">
            <div class="col"></div>
            <div class="col-auto align-self-center">
                <h6 class="title">10 dari 12 Pengumuman</h6>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data_pengumuman as $p) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?= base_url("home/detail_pengumuman/{$p->id_pengumuman}"); ?>" class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">
                                        <img src="<?= base_url(); ?>assets/images/no-photo.png" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-1 size-13 fw-normal"><?= $p->judul ?></p>
                                    <p class="fw-normal text-secondary size-12"><?= nice_time($p->create_date) ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="lds-ripple">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->