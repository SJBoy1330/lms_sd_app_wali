<!-- main page content -->
<div class="main-container container">
    <div class="row mb-3">
        <a data-bs-toggle="modal" data-bs-target="#tambahSuratIjin" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
            <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
        </a>
        <?php if (count($result->siswa) > 1) : ?>
            <div class="col-12 px-0">
                <!-- swiper categories -->
                <div class="swiper-container connectionwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($result->siswa as $siswa) : ?>
                            <a href="<?= base_url('surat/index/' . $siswa->id_siswa); ?>" class="swiper-slide">
                                <div class="tag border <?php if ($siswa->id_siswa == $id_siswa) {
                                                            echo 'active';
                                                        } ?>">
                                    <span class="text-uppercase"><?= $siswa->nama; ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if ($result->surat) : ?>
                <?php foreach ($result->surat as $surat) : ?>
                    <div class="row mb-3">
                        <a class="detail_surat" data-bs-toggle="modal" data-id="<?= $surat->id_surat_ijin; ?>" data-bs-target="#detailSuratIjin">
                            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                                <span class="size-14 fw-bold">Surat Keterangan <?php if ($surat->tipe == 1) {
                                                                                    echo 'ijin';
                                                                                } else {
                                                                                    echo 'sakit';
                                                                                } ?></span>
                                <p class="mb-0 fw-normal size-13 text-secondary"><?= nice_time($surat->tanggal); ?></p>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-graduation-cap size-15 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Nama Siswa/Siswi</p>
                                        <p class="mb-0 fw-bold size-15"><?= $surat->nama; ?></p>
                                    </div>
                                </div>
                                <div class="row py-1 px-2">
                                    <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-building-user size-15 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Kelas</p>
                                        <p class="mb-0 fw-bold size-15"><?= ifnull($surat->nama_kelas, ' - '); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <?= vector_default("vector_surat_ijin_kosong.svg", "Tidak ada surat ijin!", "Siswa anda belum pernah melakukan izin, tambahkan surat ijin jika anda akan  mengizinkan putra/putri anda!"); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Page ends-->

<!-- Modal Detail Surat Ijin -->
<div class="modal fade" id="detailSuratIjin" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="detailSuratIjinModal">Detail Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="display_ijin"></div>
        </div>
    </div>
</div>

<!-- Modal Tambah Surat Ijin -->
<div class="modal fade" id="tambahSuratIjin" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="detailSuratIjinModal">Tambah Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="mb-0">
                        <label for="jenis_surat" class="form-label title-3">Jenis Surat</label>
                        <select class="form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih jenis surat</option>
                            <option value="1">Izin</option>
                            <option value="2">Sakit</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="formFile" class="form-label title-3">File Surat</label>
                        <input class="form-control form-control-solid form-control-pribadi file-input border-0" type="file" id="formFile">
                        <div class="wrapper-files">
                            <span class="fw-medium">Pilih File</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kata_sandi" class="form-label title-3">Berlaku Mulai</label>
                        <div class="wrapper-password d-flex">
                            <input type="date" class="form-control form-control-pribadi text-start border-0" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="kata_sandi" class="form-label title-3">Berlaku Sampai</label>
                        <div class="wrapper-password d-flex">
                            <input type="date" class="form-control form-control-pribadi text-start birder-0" autocomplete="off">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
            </div>
        </div>
    </div>
</div>