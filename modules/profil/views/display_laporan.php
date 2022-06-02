<div class="col-12">
    <h6 class="pt-3 ps-3 my-2"><?= $tanggal; ?></h6>
    <?php if ($result->mapel) : ?>
        <h6 class="pt-1 ps-3 mb-2">Presensi Harian</h6>
        <a class="card mb-3 mx-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-15 fw-medium">Scan Masuk</p>
                        <p class="mb-0 size-13 fw-normal"><?= ifnull($result->presensi_siswa->scan_masuk, ' - '); ?></p>
                    </div>
                </div>
            </div>
        </a>

        <a class="card mb-3 mx-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <p class="mb-0 size-15 fw-medium">Scan Pulang</p>
                        <p class="mb-0 size-13 fw-normal"><?= ifnull($result->presensi_siswa->scan_pulang, ' - '); ?></p>
                    </div>
                </div>
            </div>
        </a>
        <h6 class="pt-1 ps-3 mb-2">Presensi Mata Pelajaran</h6>
        <?php foreach ($result->mapel as $row) : ?>
            <a class="card mb-3 mx-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-15 fw-medium"><?= $row->nama_pelajaran ?></p>
                            <?php
                            if ($row->status == 1) {
                                $warna = 'text-success';
                            } elseif ($row->status == 2) {
                                $warna = 'text-info';
                            } elseif ($row->status == 3) {
                                $warna = 'text-warning';
                            } else {
                                $warna = 'text-danger';
                            }
                            ?>
                            <p class="mb-0 size-13 fw-normal <?= $warna; ?>"><?= $row->status_presensi; ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <?= vector_default("vector_laporan_kosong.svg", "Tidak ada jadwal", "Tidak ada jadwal pada hari ini, Silahkan pilih hari lain atau hubungi pihak sekolah jika terjadi kesalahan!"); ?>
    <?php endif; ?>
</div>