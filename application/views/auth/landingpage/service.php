<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            
            <?php if($service != 8) {?>
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>
            <?php }?>
            
            <!-- Start Button Back Shadow -->
            <?php if($service == 8) {?>
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/backShadow.png" alt="">
                    </a>
                </div>
            </div>
            <?php }?>
            <!-- End Button Back Shadow -->

            <?php if ($service == 99) { ?>
            <div class="col-12 mt-5">
                <div class="logo-text text-center">
                    <!-- <img src="<?= base_url() ?>assets/img/service-1.png" alt=""> -->
                    <span class="f-lexend">Coming Soon!</span>
                </div>
            </div>
            <?php } ?>


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
                            translate="no"> Freedy </b></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-none d-md-grid m-auto">
                        <img src="<?= base_url() ?>assets/img/img-17.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-center my-auto">
                        <p>
                            <b translate="no"> Freedybank </b> wants to be your virtual safe, it allows you to custody
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
                            No oneother than you will know of the existence of your <b translate="no"> Freedy </b>
                            account
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
                                        This makes <b translate="no"> FreedyBank </b> the safest place in the world
                                        where
                                        to custody your money.
                                    </h4>
                                    <h4 class="text-blue-freedy link-lp fw-bold f-lexend mb-3 col-12 mx-auto">
                                        GET YOUR <b translate="no"> FREEDY </b> ACCOUNT IN LESS THAN A MINUTE
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
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">With <b translate="no"> Freedy </b> your
                            money
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
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-3.png" alt="">
                    <h2 class="title-top-header fw-bold">
                        Export your capital to any<br>
                        country legally and immediately
                    </h2>
                </div>
            </div>
            <div class="col-12 mb-5 text-center">
                <p>
                    Given the increasingly stringent and restrictive regulations on international bank transfers,
                    FreedyBank offers a simple, risk-free and 100% legal solution.
                </p>
                <h3 class="text-blue-freedy fw-bold">How do we make this service possible?</h3>
                <p>
                    Freedy, thanks to the use of the TracklessMoney gateway which makes use of the huge capital and
                    multiple offices of PBS online, in order to respect the laws in force on the matter, will not make
                    an international transfer but will send a domestic transfer from the current account of the country
                    of destination to the current account required by the sender, in the same country, only afterwards
                    will carry out an internal clearing (the internal clearing procedure is 100% legal).
                </p>
            </div>
            <div class="col-12 mb-5 text-center">
                <a href="<?= base_url(); ?>auth/signup"
                    class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                    <span>Sign Up</span>
                </a>
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
                <h4 class="text-blue-freedy black link-lp fw-bold f-lexend text-center my-4">What <b translate="no">
                        Freedy </b> offers to you :
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
                                The <b translate="no"> Freedy </b> System is suitable for all daily payments, even for
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
                    <h2 class="title-top-header fw-bold">Tell everyone about <b translate="no"> Freedy bank </b> and
                        earn
                        every time they use
                        it.</h2>
                </div>
                <div class="col-12">
                    <div class="col-12 text-center">
                        <h2 class="title-top-header fw-bold" style="color: #000 !important;">How does it work:</h2>
                    </div>
                    <div class="row my-5">
                        <div class="col-12 col-md-12 col-lg-6 p-3">
                            <div class="box-service-list d-flex flex-row">
                                <div class="text-content d-flex flex-column">
                                    <div class="top d-flex flex-row">
                                        <span class="number">01.</span>
                                        <span class="title">Open your account</span>
                                    </div>
                                    <div class="bot">
                                        <p>You can easly open your account in only 15 seconds</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="<?=base_url()?>assets/img/icon-service-1.png" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-3">
                            <div class="box-service-list d-flex flex-row">
                                <div class="text-content d-flex flex-column">
                                    <div class="top d-flex flex-row">
                                        <span class="number">02.</span>
                                        <span class="title">Get your personal
                                            link</span>
                                    </div>
                                    <div class="bot">
                                        <p>You will have your personal link after create an account</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="<?=base_url()?>assets/img/icon-service-2.png" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-3">
                            <div class="box-service-list d-flex flex-row">
                                <div class="text-content d-flex flex-column">
                                    <div class="top d-flex flex-row">
                                        <span class="number">03.</span>
                                        <span class="title">Invite people</span>
                                    </div>
                                    <div class="bot">
                                        <p>
                                            Invite people/companies to register on <b translate="no"> FreedyBank </b>
                                            using your link
                                        </p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="<?=base_url()?>assets/img/icon-service-3.png" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-3">
                            <div class="box-service-list d-flex flex-row">
                                <div class="text-content d-flex flex-column">
                                    <div class="top d-flex flex-row">
                                        <span class="number">04.</span>
                                        <span class="title">Congratulation!</span>
                                    </div>
                                    <div class="bot">
                                        <p>
                                            From now you will start receiving a commission on every transaction that the
                                            person/company will make.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="<?=base_url()?>assets/img/icon-service-4.png" alt="icon">
                                </div>
                            </div>
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
                        <p>We at <b translate="no"> Freedybank </b> strongly believe that a banking system must be a win
                            -
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
                                        GET YOUR <b translate="no"> FREEDY </b> ACCOUNT IN LESS THAN 15 SECONDS
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

            <?php if ($service == 7) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-7.png" alt="">
                    <span class="f-lexend">Crypto trading</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2 class="title-top-header fw-bold text-center">
                            Boost your crypto exchange experience
                        </h2>
                    </div>
                    <div class="col-12 text-center">
                        <p>
                            <b translate="no"> FreedyBank </b>, being a <b translate="no"> trade-off </b> platform, the
                            ‘’Buy’’ and ‘’Sell’’
                            orders are just LIMIT
                            orders.<br>
                            A buy limit order will be executed only at the limit price or a lower price; and a sell
                            limit order will be executed only at the limit price or a higher one.<br>
                            The price is guaranteed, but the filling of the order is not. Limit orders will be executed
                            only if the price meets the order qualifications.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 p-3">
                                <div class="crypto-list-page d-flex flex-column px-3 py-4">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/img/crypto-1.png" alt="">
                                    </div>
                                    <span class="mb-3">Open your account</span>

                                    <p class="mb-3">Simple and fast opening without documents and KYC request
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 p-3">
                                <div class="crypto-list-page d-flex flex-column px-3 py-4">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/img/crypto-2.png" alt="">
                                    </div>
                                    <span class="mb-3">Top up your wallet</span>

                                    <p class="mb-3">Topup, through a bank transfer, your <b translate="no"> Freedybank
                                        </b> wallet with your
                                        favorite FIAT currency and than convert any amount into USDX to start to trading
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 p-3">
                                <div class="crypto-list-page d-flex flex-column px-3 py-4">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/img/crypto-3.png" alt="">
                                    </div>
                                    <span class="mb-3">Start buying and selling</span>

                                    <p class="mb-3">You are ready to buy and sell Crypto Currencies, placing limit
                                        orders, in an anonymous way
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 p-3">
                                <div class="crypto-list-page d-flex flex-column px-3 py-4">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/img/crypto-4.png" alt="">
                                    </div>
                                    <span class="mb-3">Withdraw your earning</span>

                                    <p class="mb-3">You will be able to withdraw, anonymously, your FIAT earnings to any
                                        bank account
                                        <b class="text-uppercase"> even if are not registered under you name</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- Start Find Me & Search -->
            <?php if ($service == 8) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-8.png" alt="">
                    <span class="f-poppins fw-bold text-blue-findme py-1">Find me & Search</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <!-- Start Findme -->       
                <div class="col-12 f-poppins">
                    <div class="row">
                        <div class="col-12 col-lg-6 text-start my-auto content-freedy">
                            <p>
                                <b translate="no"> Freedy Bank </b> allows you to increase the visibility of your
                                business by including it in
                                the search section that will be in every single wallet of all the <b translate="no">
                                    Freedy Bank </b> users.<br>
                                In this way your company will be easily accessible and traceable by all users who use
                                <b translate="no"> Freedy Bank </b> for daily payments.
                            </p>
                            <p>
                                <b class="text-blue-findme fw-bold">How to access to FIND ME service :</b><br>
                            </p>
                            <form id="form-input-unique-code" class="w-100">
                                <input type="text" class="input-unique-code" placeholder="Enter your Unique Code">
                                <a href="<?= base_url(); ?>link/findme?findme=1">
                                    <button type="button" class="btn-unique-code d-block btn my-3">
                                        <div class="circle-btn-unique-code flex justify-content-center">
                                            <i class="ri-arrow-right-line fs-4"></i>
                                        </div>
                                        <div class="pt-2 fw-semibold text-next">
                                            Next
                                        </div>
                                    </button>
                                </a>
                            </form>
                            <p class="pt-5 text-black">
                                Enter your unique code in order to validate your account, then click next and fill out all the fields that you find on the next pages, make sure to have ready an image of your business logo of and prepare the google maps link your business locations.
                            </p>
                        </div>
                        <div class="col-md-6 d-none d-lg-grid">
                            <img src="<?= base_url() ?>assets/img/img-38.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- End Findme -->

                <div class="col-12 mb-5">
                    <div class="row content-freedy">
                        <p class="col-12 col-lg-8 text-start">If you encounter problems while applying, contact our support service :</p>
                        <p class="col-12 col-lg-4 text-start">
                            <u>
                                <a href="#" class="text-black fw-semibold">
                                    contact@freedybankservice.com 
                                </a>
                            </u>
                        </p>
                    </div>
                </div>

                <!-- Start Search -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-39.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 text-start content-freedy">
                            <h2 class="title-top-header-findme f-lexend fw-bold mb-3 mb-lg-5">Search</h2>
                            <p class="text-black f-poppins">
                                With this function in your wallet you will be able to see all the activities that accept
                                <b translate="no"> FREEDY BANK </b> as a collection and payment system.
                            </p>
                        </div>
                    </div>
                </div>
                 <!-- End Search -->
            </div>
            <?php } ?>
            <!-- End Find Me & Search -->
            
        </div>
    </div>
</section><!-- End Hero -->