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
                            <h6>Bantuan</h6>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                        
                        </a>
                    </div>
                </div>
            </header>
        <!-- comment -->
        <div class="row">
            <div class="h-190 bg-ec3528 text-white text-center col-12 d-flex justify-content-center flex-column">
                <h3 class="mt-5 pt-3">Bagaimana cara kita membantu anda?</h3>
                <span class="mb-4 pb-3 fw-lighter">Cari topik sesuai dengan kendala anda</span>
                <form class="d-flex">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group searching" style="width: 92vw;">
                                <input type="text" class="form-control form-control-pribadi text-start pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5 mb-2">
            <div class="col-12 px-0">
                <span class="size-15 mx-3 fw-bolder">Trending Topik</span>
                <div class="row mb-1 my-2 ms-0">
                    <div class="col-12 px-0">
                        <!-- swiper categories -->
                        <div class="swiper-container connectionwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tag border active">
                                        <span class="text-uppercase">Semua</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Hiburan</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Perlombaan</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Music</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Accessories</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Camera</span>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tag border ">
                                        <span class="text-uppercase">Jwellery</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row g-0">
        <div class="col-12">
            <div class="accordion accordion-flush p-0" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="row">
                            <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                            <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>

                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <span class="d-block size-15 mb-1 fw-bolder">Ujian</span>
                                <span class="size-13 text-muted">cara melakukan ujian online</span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body size-11">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
    </div>
    <!-- main page content ends -->

</main>