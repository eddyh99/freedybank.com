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

            <?php if ($service == 1) { ?>
            <div class="col-12 mt-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-1.png" alt="">
                    <span class="f-lexend">Custody</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 col-md-8 mb-5 text-center mx-auto">
                    <h2 class="title-top-header fw-bold">Keep your money anonymously and untouchable with <b
                            translate="no">Freedy</b></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-none d-md-grid m-auto">
                        <img src="<?= base_url() ?>assets/img/img-17.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-center my-auto">
                        <p>
                            <b translate="no">Freedybank</b> wants to be your virtual safe, it allows you to custody
                            your funds anonymously
                            and
                            free of charge.
                        </p>
                        <p>
                            The guarantee of your anonimity is given by our account opening procedure. Operating under
                            different jurisdictions, we are not obliged to perform the Know Your Customer procedure
                            (KYC).
                        </p>
                        <p>
                            No oneother than you will know of the existence of your <b translate="no">Freedy</b> account
                            or the movements made
                            on
                            it.
                        </p>
                        <p>
                            This allows us to expand our service even to those who cannot or do not want to access the
                            traditional banking system and allows us to provide the highest degree of privacy. As we are
                            not
                            requiring any type of document for opening and managing the account , no information can be
                            provided, neither under the request of national or international authorities.

                        </p>
                    </div>
                </div>
                <div class="col-12 text-center mt-3 mb-5">
                    <div class="container">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h4 class="text-blue-freedy black link-lp fw-bold f-lexend mb-5 col-12 mx-auto">
                                        This makes <b translate="no">FreedyBank</b> the safest place in the world where
                                        to custody your money.
                                    </h4>
                                    <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12 mx-auto">
                                        GET YOUR <b translate="no">FREEDY</b> ACCOUNT IN LESS THAN A MINUTE
                                    </h4>
                                    <div class="text-center">
                                        <a href="<?= base_url(); ?>auth/signup"
                                            class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                            <span>Sign Up</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($service == 2) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-2.png" alt="">
                    <span class="f-lexend">Essential for <br> your trip</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">With <b translate="no">Freedy</b> your money
                            travels with you.</h2>
                        <p>
                            Thanks to the best exchange rates you can find on the market, without fees, you can, from
                            your multi-currency wallet, instantly convert your balances into the currency of the country
                            you are in and carry out comfortably all the payments you want, quickly and easily.</p>
                        <div class="col-12 mt-5 d-grid d-md-none d-lg-grid text-center">
                            <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12">
                                We make the bureaucracy simple so you can manage your money stress-free.
                            </h4>
                            <div class="text-center">
                                <a href="<?= base_url(); ?>auth/signup"
                                    class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                    <span>Sign Up</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-18.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mt-5 d-none d-md-grid d-lg-none text-center">
                        <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12">
                            We make the bureaucracy simple so you can manage your money stress-free.
                        </h4>
                        <div class="text-center">
                            <a href="<?= base_url(); ?>auth/signup"
                                class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                <span>Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($service == 3) { ?>
            <div class="col-12 mt-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-3.png" alt="">
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 col-md-8 mb-3 text-center mx-auto">
                    <h2 class="title-top-header fw-bold">Export your capital to any
                        country legally and immediately</h2>
                    <p>To stay legally strictly follow the procedure below :</p>
                </div>
                <div class="col-12 mb-3 text-center">
                    <div class="col-12 col-sm-8 col-lg-4 text-center mx-auto">
                        <img src="<?= base_url() ?>assets/img/img-14.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-center mx-auto  mb-3">
                        <p>
                            Top up your <b translate="no">Freedy</b> wallet with a domestic transfer (the top up is not
                            a credit transfer and
                            therefore is not fiscally relevant as it is not comparable to a payment).
                        </p>
                    </div>
                    <div class="col-12 col-sm-8 col-lg-4 text-center mx-auto">
                        <img src="<?= base_url() ?>assets/img/img-15.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-center mx-auto mb-3">
                        <p>
                            Convert without fees, into the currency of the destination country, the amount to be
                            exported (the currency conversion is also not fiscally relevant).
                        </p>
                    </div>
                    <div class="col-12 col-sm-8 col-lg-4 text-center mx-auto">
                        <img src="<?= base_url() ?>assets/img/img-16.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-center mx-auto">
                        <p>
                            Send the converted amount to the destination country, via our platform, as a domestic
                            transfer (with this procedure the international transfer is eliminated).
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-8 text-center mx-auto text-center my-5">
                    <div class="container">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h2 class="title-top-header fw-bold f-lexend mb-3 col-12 mx-auto">
                                        How we make this service possible?
                                    </h2>
                                    <p>
                                        <b translate="no">Freedy</b>, thanks to the use of the TracklessMoney gateway,
                                        which makes use of the
                                        huge capital and multiple offices of PBS online, in order to respect the laws in
                                        force on the matter, will not make an international transfer but will send a
                                        domestic transfer from the current account of the country of destination to the
                                        current account required by the sender, in the same country and will carrying
                                        out an internal clearing only afterwards (the internal clearing procedure is
                                        100% legal).
                                    </p>
                                    <div class="text-center">
                                        <a href="<?= base_url(); ?>auth/signup"
                                            class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                            <span>Sign Up</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($service == 4) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-4.png" alt="">
                    <span class="f-lexend">Collections & <br> Payments</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6 text-start">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">We make your business easy with our tools
                            ready-to-use to scale your business </h2>
                        <p>
                            <b>We will take care of the rest</b><br>
                            Designed to be the solution for all kind of business and to recieve your funds anonymously,
                            without limits and to keep them safe and untraceable
                            Immidiate activation and without any document request
                        </p>

                    </div>
                    <div class="col-6 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-19.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h4 class="text-blue-freedy black link-lp fw-bold f-lexend text-center my-4">What <b
                        translate="no">Freedy</b> offers to you :
                </h4>
                <div class="accordion" id="accordionFreedy">
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageOne">
                            <button id="btnaccorionOne" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">Gateway</span>
                                    <span class="small" id="seemoreOne">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/service-collections-1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageTwo">
                            <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">Payment Link</span>
                                    <span class="small" id="seemoreTwo">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/service-collections-2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageThree">
                            <button id="btnaccorionThree" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">QR Code Payment</span>
                                    <span class="small" id="seemoreThree">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/service-collections-3'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageFour">
                            <button id="btnaccorionFour" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">POS</span>
                                    <span class="small" id="seemoreFour">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/service-collections-4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($service == 5) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-5.png" alt="">
                    <span class="f-lexend">Daily use</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 mb-5 text-center">
                    <h2 class="title-top-header fw-bold">Receive, Send and Pay Anonymously</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 text-start my-auto content-freedy">
                            <p>
                                The <b translate="no">Freedy</b> System is suitable for all daily payments, even for
                                small amounts.
                            </p>
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy text-start">
                                    <ul class="ps-0">
                                        <li class="ali">Low and fixed fees</li>
                                        <li class="ali">Convert currencies for free during your trip</li>
                                        <li class="ali">Faster and safer than the use of cash </li>
                                        <li class="ali">Payments can be done from your own device </li>
                                        <li class="ali">Balance update in real time</li>
                                        <li class="ali">Balance can be consulted directly through the specific
                                            application</li>
                                        <li class="ali">Respect of the privacy as no sms, email or any paper
                                            will be sent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center my-5">
                    <div class="container">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <div class="text-center">
                                        <a href="<?= base_url(); ?>auth/signup"
                                            class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                            <span>Sign Up</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($service == 6) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-6.png" alt="">
                    <span class="f-lexend">Get Reward</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 col-md-8 mb-5 text-center mx-auto">
                    <h2 class="title-top-header fw-bold">Tell everyone about <b translate="no">Freedy bank</b> and earn
                        every time they use
                        it.</h2>
                </div>
                <div class="col-12">
                    <div class="col-12 text-center">
                        <h2 class="title-top-header fw-bold" style="color: #000 !important;">How does it work:</h2>
                    </div>
                    <div class="row my-5">
                        <div class="col-12 col-md-6 p-3">
                            <img src="<?= base_url() ?>assets/img/img-list-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 p-3">
                            <img src="<?= base_url() ?>assets/img/img-list-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 p-3">
                            <img src="<?= base_url() ?>assets/img/img-list-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 p-3">
                            <img src="<?= base_url() ?>assets/img/img-list-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="col-12 text-center mb-5">
                        <h4 class="text-blue-freedy black link-lp fw-bold f-lexend">For example:</h2>
                    </div>
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col-12 col-md-4 card-arrow-freedy px-3 px-md-4 px-lg-3 py-3 py-md-0">
                            <p class="mb-5 me-lg-5 my-md-0">If you invite 100 persons/companies to open an account using
                                your link</p>
                            <img class="arrow" src="<?= base_url() ?>assets/img/arrow-right.png" alt="">
                        </div>
                        <div class="col-12 col-md-4 card-arrow-freedy px-3 px-md-4 px-lg-3 py-3 py-md-0">
                            <p class="mt-5 mb-5 me-lg-5 my-md-0">They do 5 operations a day
                                (payment by card, wallet to wallet etc)</p>
                            <img class="arrow" src="<?= base_url() ?>assets/img/arrow-right.png" alt="">
                        </div>
                        <div class="mt-5 my-md-0 col-12 col-md-4 card-arrow-freedy px-3 px-md-4 px-lg-3 py-3 py-md-0">
                            <p>You would earn 750 euros monthly,
                                accedited directly to your wallet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-5">
                    <div class="col-12 text-center content-freedy">
                        <p>We at <b translate="no">Freedybank</b> strongly believe that a banking system must be a win -
                            win ecosystem, so
                            unlike traditional banks, we have created a system that rewards our users.</p>
                    </div>
                </div>
                <div class="col-12 text-center my-5">
                    <div class="container">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12 mx-auto">
                                        GET YOUR <b translate="no">FREEDY</b> ACCOUNT IN LESS THAN 15 SECONDS
                                        START YO EARNING NOW
                                    </h4>
                                    <div class="text-center">
                                        <a href="<?= base_url(); ?>auth/signup"
                                            class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                                            <span>Sign Up</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->