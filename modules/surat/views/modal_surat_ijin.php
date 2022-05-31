<div class="modal-body">
    <div class="row m-2fix d-flex justify-content-center">
        <div class="col-11 p-0">
            <?php if (!in_array($extension, ['pdf'])) : ?>
                <figure class="overflow-hidden rounded-15 text-center">
                    <img src="<?= $file_surat ?>" alt="" class="w-100 mx-auto">
                </figure>
            <?php else : ?>
                <figure class="overflow-hidden rounded-15 text-center">
                    <i class="fa-solid fa-file-pdf" style="font-size : 10em;"></i>
                </figure>
                <a class="btn btn-block btn-md btn-danger btn-filter" href="<?= $file_surat ?>">DOWNLOAD</a>
            <?php endif; ?>
        </div>
    </div>
    <form class="row g-3 mt-1 mb-4">
        <div class="col-12">
            <label class="form-label fw-bold size-14">Jenis Surat</label>
            <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?php if ($tipe == 1) {
                                                                                                                            echo 'Surat Keterangan Ijin';
                                                                                                                        } else {
                                                                                                                            echo 'Surat Keterangan Sakit';
                                                                                                                        } ?>" readonly>
        </div>
        <div class="col-12">
            <label class="form-label fw-bold size-14">Mulai Berlaku</label>
            <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?= $berlaku_mulai; ?>" readonly>
        </div>
        <div class="col-12">
            <label class="form-label fw-bold size-14">Berlaku Sampai</label>
            <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?= $berlaku_sampai; ?>" readonly>
        </div>
    </form>
</div>