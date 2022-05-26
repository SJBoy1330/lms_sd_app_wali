<!-- Sidebar main menu -->
<div class="sidebar-wrap  sidebar-overlay">
    <!-- Add pushcontent or fullmenu instead overlay -->
    <div class="closemenu text-muted">Close Menu</div>
    <div class="sidebar">
        <!-- user information -->
        <div class="row my-3">
            <div class="col-12 profile-sidebar">
                <div class="row mt-3">
                    <div class="col-auto">
                        <figure class="avatar avatar-80 rounded-20 p-1 bg-white shadow-sm">
                            <img src="<?= base_url('assets/images/mia-khalifa.png') ?>" alt="" class="rounded-18">
                        </figure>
                    </div>
                    <div class="col px-0 align-self-center">
                        <h5 class="mb-0 fw-normal text-white">Mia Khalifah</h5>
                        <p class="text-muted size-12">XI IPA 1</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- user emnu navigation -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('home'); ?>">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-house"></i></div>
                            <div class="col">Dashboard</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url('spp'); ?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-envelope-open-dollar"></i></div>
                            <div class="col">SPP</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('suratijin') ?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                            <div class="col">Surat Ijin</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/list_pengumuman') ?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-bullhorn"></i></div>
                            <div class="col">Pengumuman</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/list_berita') ?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-newspaper"></i></div>
                            <div class="col">Berita</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('toko') ?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-shop"></i></div>
                            <div class="col">Toko</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item logout">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>?>" tabindex="-1">
                            <div class="avatar avatar-40 icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                            <div class="col">Keluar</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar main menu ends -->