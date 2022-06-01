<div class="modal-body bg-white">
    <div class="row m-2fix d-flex justify-content-center">
        <div class="col-11 p-0">
            <?php if (!in_array($extension, ['pdf'])) : ?>
                <figure class="overflow-hidden rounded-15 text-center detail-pengumuman" style="background-position: center; background-size: cover; background-image: url('<?= $file_surat ?>');">
                </figure>
            <?php else : ?>
                <figure class="overflow-hidden rounded-15 text-center" style="background-color: #FFE6E6; padding: 40px;">
                    <i class="fa-solid fa-file-pdf" style="font-size: 7rem;"></i>
                </figure>
                <a class="btn btn-block btn-md btn-filter" href="<?= $file_surat ?>">DOWNLOAD</a>
            <?php endif; ?>
        </div>
    </div>
    <form id="form_edit_surat" method="post" action="<?= base_url('surat/edit'); ?>" enctype="multipart/form-data" class="row g-3 mt-1 mb-4">
        <div id="div_upload_file" class="col-12 d-none">
            <div class="" id="req_surat">
                <label for="formFile2" class="form-label title-3">File Surat</label>
                <input class="form-control form-control-solid form-control-pribadi file-input border-0" type="file" name="surat" id="formFile2" style="line-height: 40px;">
            </div>
        </div>
        <div class="col-12" id="req_edit_tipe">
            <label class="form-label fw-bold size-14">Jenis Surat</label>
            <input type="hidden" name="id_surat" value="<?= $id_surat_ijin; ?>">
            <input type="text" id="div_tipe" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?php if ($tipe == 1) {
                                                                                                                                        echo 'Surat Keterangan Ijin';
                                                                                                                                    } else {
                                                                                                                                        echo 'Surat Keterangan Sakit';
                                                                                                                                    } ?>" readonly>
            <select name="tipe" id="edit_tipe" class="form-select form-select-pribadi border-0 d-none" aria-label="Default select example">
                <option selected disabled>Pilih jenis surat</option>
                <option value="1" <?php if ($tipe == 1) {
                                        echo 'selected';
                                    }  ?>>Surat Keterangan Ijin</option>
                <option value="2" <?php if ($tipe == 2) {
                                        echo 'selected';
                                    }  ?>>Surat Keterangan Sakit</option>
            </select>
        </div>
        <div class="col-12" id="req_edit_mulai_berlaku">
            <label class="form-label fw-bold size-14">Mulai Berlaku</label>
            <input type="date" id="mulai_berlaku" name="mulai_berlaku" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?= $berlaku_mulai; ?>" readonly>
        </div>
        <div class="col-12" id="req_edit_berlaku_hingga">
            <label class="form-label fw-bold size-14">Berlaku Sampai</label>
            <input type="date" id="berlaku_hingga" name="berlaku_hingga" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" value="<?= $berlaku_sampai; ?>" readonly>
        </div>

        <?php if (strtotime($berlaku_mulai) > strtotime(date('Y-m-d'))) : ?>
            <button type="button" id="edit_surat_ijin" class=" btn btn-warning">EDIT</button>
            <div id="display_button_action" class="d-none">
                <button type="button" onclick="submit_form(this,'#form_edit_surat')" id="simpan_edit_surat_ijin" class=" btn btn-warning">Simpan</button>
                <button type="button" id="batal_edit_surat_ijin" class=" btn btn-warning">Batal</button>
            </div>
        <?php endif; ?>

    </form>
</div>

<script>
    var div = document.getElementById('div_tipe');
    var select = document.getElementById('edit_tipe');
    var file = document.getElementById('div_upload_file');
    var edit_surat_ijin = document.getElementById('edit_surat_ijin');
    var display_button_action = document.getElementById('display_button_action');
    $('#edit_surat_ijin').on('click', function() {
        $('#mulai_berlaku').prop('readonly', false);
        $('#berlaku_hingga').prop('readonly', false);
        div.classList.add('d-none');
        select.classList.remove('d-none');
        file.classList.remove('d-none');
        edit_surat_ijin.classList.add('d-none');
        display_button_action.classList.remove('d-none');
    })

    $('#batal_edit_surat_ijin').on('click', function() {
        $('#mulai_berlaku').prop('readonly', true);
        $('#berlaku_hingga').prop('readonly', true);
        div.classList.remove('d-none');
        select.classList.add('d-none');
        file.classList.add('d-none');
        edit_surat_ijin.classList.remove('d-none');
        display_button_action.classList.add('d-none');
    })
</script>