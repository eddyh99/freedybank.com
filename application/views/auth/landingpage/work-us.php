<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 mb-5 mt-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/logo-2.png" alt="">
                    <span class="f-lexend">Work with us</span>
                </div>
            </div>
            <div class="col-12 mb-5 d-flex flex-row">
                <div class="col-12 col-lg-8">
                    <h2 class="title-top-header fw-bold">It`s time to become your own boss with our affilate program
                        WIN-WIN
                    </h2>
                    <p class="mt-4">With <b translate="no">FreedyBank</b> you can choose from our 3 partnership programs
                        :<br> Online
                        affiliate partner / Consultant partner / charging point</p>
                </div>
                <div class="col-4 d-none d-lg-grid">
                    <img src="<?= base_url() ?>assets/img/img-3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionFreedy">
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageOne">
                            <button id="btnaccorionOne" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">ONLINE AFFILIATE PARTNER</span>
                                    <span class="small" id="seemoreOne">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/work-us-1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageTwo">
                            <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">CONSULTANT PARTNER</span>
                                    <span class="small" id="seemoreTwo">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/work-us-2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageThree">
                            <button id="btnaccorionThree" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head"><b translate="no">FREEDYBANK</b> POINT</span>
                                    <span class="small" id="seemoreThree">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/work-us-3'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->