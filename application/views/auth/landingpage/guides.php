<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>/link/guide">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($guide == 1) { ?>

            <div class="col-12 my-5 text-center">
                <h2 class="title-top-header f-lexend">Wallet</h2>
            </div>

            <div class="col-12 text-center mb-5">
                <div class="text-center bg-flowers-pink">
                    <p class="d-inline-block">
                        <b>Your wallet is identified through the </b><b translate="no"> ‘’Unique Code’’ </b><br>
                        (you can find it on the home page of your account)<br>
                        <b>You have to use your Unique Code in order to top up your wallet and receive incoming
                            transfers</b>
                    </p>
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
                                    <span class="head">How to Topup your wallet and receive funds</span>
                                    <span class="small" id="seemoreOne">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageTwo">
                            <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to transfers funds between wallet to wallet</span>
                                    <span class="small" id="seemoreTwo">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageThree">
                            <button id="btnaccorionThree" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to convert currencies </span>
                                    <span class="small" id="seemoreThree">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-3'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageFour">
                            <button id="btnaccorionFour" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to withdraw funds and make bank transfers</span>
                                    <span class="small" id="seemoreFour">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

            <?php if ($guide == 2) { ?>

            <div class="col-12 my-5 text-center">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-2.png" alt="">
                    <h3 class="text-blue-freedy f-lexend">Easy trips</h3>
                </div>
            </div>
            <div class="col-12 text-center">
                <p>Follow few easy steps to instant convert FIAT currencies and<br> make easy payments from wherever you
                    want</p>
            </div>

            <div class="col-12">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <span class="fw-bold text-blue-freedy mb-3">Step 1</span>
                        <div class="box-trips p-3">
                            <p>
                                <b>Top up your wallet by bank transfers</b><br>
                                in one of the 10 currencies that allows you to receive bank transfers (see the list).
                                You just need to follow the easy procedure that you can find in the ‘’Deposit/Receive’’
                                section of your wallet
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <span class="fw-bold text-blue-freedy mb-3">Step 2</span>
                        <div class="box-trips p-3">
                            <p>
                                <b>Select one of the currency </b><br>
                                in where you have the funds and<br>
                                <b>Click the button ‘’Swap’’</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <span class="fw-bold text-blue-freedy mb-3">Step 3</span>
                        <div class="box-trips p-3">
                            <p>
                                <b>Enter the amount and choose </b><br>
                                one of the 50 currencies that allows you to convert and send (see the list) and <br>
                                <b>click ‘’Confirm’’</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <span class="fw-bold text-blue-freedy mb-3">Step 4</span>
                        <div class="box-trips p-3">
                            <p>
                                <b>Congratulations! </b><br>
                                Now you can make easy and fast payments in the currencies of the country you are in
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

            <?php if ($guide == 3) { ?>
            <div class="col-12 my-5 text-center">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/service-3.png" alt="">
                    <h3 class="text-blue-freedy f-lexend">Capital Exportation</h3>
                </div>
            </div>
            <div class="col-12 text-center">
                <p>
                    The user who wants to send capital abroad will have to open a <b translate="no"> FreedyBank </b>
                    account<br> and will have
                    to
                    carry out the following procedure to remain in the legality and away<br> from tax assessments:
                </p>
            </div>

            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-10 col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <div class="box-trips p-3">
                            <span class="fw-bold text-blue-freedy mb-3">Step 1</span>
                            <p>
                                Top up wallet (the top up is not a credit transfer and therefore is not fiscally
                                relevant as it is not comparable to a payment);
                            </p>
                            <img src="<?= base_url() ?>assets/img/img-14.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <div class="box-trips p-3">
                            <span class="fw-bold text-blue-freedy mb-3">Step 2</span>
                            <p>
                                Convert the amount to export into the currency of the destination country (the currency
                                conversion is also not fiscally relevant);
                            </p>
                            <img src="<?= base_url() ?>assets/img/img-15.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-3 text-center p-3 d-flex flex-column">
                        <div class="box-trips p-3">
                            <span class="fw-bold text-blue-freedy mb-3">Step 3</span>
                            <p>
                                Send the converted amount, via our platform, as a national transfer (with this procedure
                                the international transfer is eliminated).
                            </p>
                            <img src="<?= base_url() ?>assets/img/img-16.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


            <?php if ($guide == 4) { ?>
            <div class="col-12 text-center">
                <h3>Coming soon!</h3>
            </div>

            <div class="col-12">
                <div class="logo-text text-center">
                    <h2 class="title-top-header fw-bold">
                        Buy and sell crypto using FIAT currencies
                    </h2>
                </div>
            </div>
            <div class="col-12 mb-5 mt-3">
                <div class="col-12 text-center mb-5">
                    <h3 class="fw-bold text-blue-freedy">How to top up crypto wallet</h3>

                    <p class="mt-3">In order to top up your <b translate="no"> FreedyBank </b> crypto wallet follow the
                        procedure below :</p>

                </div>
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <div class="in-crypto">
                        <span>Step 1</span>
                        <div class="box-crypto">
                            <p class="mb-3">Log in to your <b translate="no"> FreedyBank </b> wallet and select
                                crypto</p>
                            <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-1-1.png" alt="">
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 2</span>
                        <div class="box-crypto">
                            <p class="mb-3">Click top up button</p>
                            <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-1-2.png" alt="">
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 3</span>
                        <div class="box-crypto">
                            <p class="mb-3">Select the FIAT currency that you want to convert in USDX, enter the
                                amount and click convert</p>
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 4</span>
                        <div class="box-crypto">
                            <p class="mb-3">After clicking convert make sure that all data are correct and then click
                                on the button confirm</p>
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 5</span>
                        <div class="box-crypto">
                            <p class="mb-3">Congratulations! Now you can start to buy and sell crypto</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <h3 class="fw-bold text-blue-freedy">How to buy and sell crypto by placing limit order</h3>

                    <p class="mt-3 fw-bold">
                        <b translate="no"> FreedyBank </b>, being a <b translate="no"> trade-off </b> platform, the
                        ‘’Buy’’ and ‘’Sell’’ orders are just ‘’LIMIT’’ orders.
                    </p>

                    <p class="mt-3">
                        A buy limit order will be executed only at the limit price or a lower price; and a sell limit
                        order will be executed only at the limit price or a higher one.
                        <br>
                        The price is guaranteed, but the filling of the order is not. Limit orders will be executed only
                        if the price meets the order qualifications.
                    </p>

                    <div class="box-p-crypto">
                        <p>
                            To start trading, enter the price you want to trade at, once you've entered the amount, you
                            can choose to enter the amount of cryptocurrency you want to buy/sell  or the USDX amount
                            you want to spend or receive.
                        </p>
                    </div>

                    <h3 class="fw-bold text-blue-freedy">How to buy and sell crypto by placing limit order</h3>

                    <p class="mt-3">
                        In order to withdraw your your funds follow the procedure below :
                    </p>

                </div>

                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <div class="in-crypto">
                        <span>Step 1</span>
                        <div class="box-crypto">
                            <p class="mb-3">From your wallet, in crypto section, click the button withdraw</p>
                            <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-1-3.png" alt="">
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 2</span>
                        <div class="box-crypto">
                            <p class="mb-3">Enter the USDX amount that you want to convert, choose your favorite FIAT
                                currency and click withdraw</p>
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 3</span>
                        <div class="box-crypto">
                            <p class="mb-3">After clicking withdraw make sure that all data are correct and then click
                                on confirm</p>
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 4</span>
                        <div class="box-crypto">
                            <p class="mb-3">Congratulations! Now your balance is available on your FIAT wallet, in the
                                chosen currency</p>
                        </div>
                    </div>
                    <div class="in-crypto">
                        <span>Step 5</span>
                        <div class="box-crypto">
                            <p class="mb-3">Now you can transfer your funds to any bank account, even if is not under
                                your name, in more than 50 currencies</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <h3>Coming soon!</h3>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->