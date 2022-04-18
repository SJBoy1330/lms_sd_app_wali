<main class="h-100">
    <!-- main page content -->
<div class="main-container container">
    <!-- Header -->
    <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="<?= base_url('profil')?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left size-18"></i>
                    </a>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <h5>Ubah Profil</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" target="_self" class="btn btn-44">
                    
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->
    <!-- comment -->
    <div class="row mx-2">
        <div class="col-12">
            <form class="row g-3 mt-1">
                <div class="col-12">
                    <label for="nis" class="form-label fw-bold size-14">Nomer Induk Siswa (NIS)</label>
                    <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="nis" placeholder="203131341321t" autocomplete="off">
                </div>
                <div class="col-12">
                    <label for="nama" class="form-label fw-bold size-14">Nama lengkap</label>
                    <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="nama" placeholder="Dono kasino indro..." autocomplete="off">
                </div>
                <div class="col-12">
                    <label class="form-label fw-bold size-14">Gender</label>
                    <div class="row">
                        <div class="col bg-f5f5f5 mx-2 py-2 d-flex align-items-center rounded-10 gender-laki">
                            <input class="form-check-input p-2 m-0 bg-grey border-white" type="radio" name="flexRadioDefault" id="gender" autocomplete="off">
                            <label class="ms-2 form-check-label size-14 text-secondary" for="gender">
                                laki-laki
                            </label>
                        </div>
                        <div class="col bg-f5f5f5 mx-2 py-2 d-flex align-items-center rounded-10 gender-perempuan">
                            <input class="form-check-input p-2 m-0 bg-grey border-white" type="radio" name="flexRadioDefault" id="gender2" autocomplete="off">
                            <label class="ms-2 form-check-label size-14 text-secondary" for="gender2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label fw-bold size-14">Alamat</label>
                    <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="alamat" placeholder="203131341321t" autocomplete="off">
                </div>
                <div class="col-12">
                    <label for="nohp" class="form-label fw-bold size-14">No. Handphone</label>
                    <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="nohp" placeholder="08123111111">
                </div>
                <div class="col-12 mb-4">
                    <label for="email" class="form-label fw-bold size-14">Email</label>
                    <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="email" placeholder="tes@mail.com" autocomplete="off">
                </div>
            </form>
        </div>

        <div class="col-11 col-sm-11 mt-auto mx-auto pt-4 pb-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center d-grid">
                    <button type="submit" class="w-100 py-3 rounded-pill btn btn-primary bg-ec3528 border-white size-10 fw-lighter btn-simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- main page content ends -->
</main>