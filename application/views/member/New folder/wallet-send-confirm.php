<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <div class="row">
            <div class="col-12 col-lg-2 text-center mb-3 mb-lg-0">
                <img src="<?= base_url() ?>assets/img/freedy/logo-app.png" alt="" class="app-logo">
            </div>
            <div class="col-12 col-lg-8 d-flex justify-content-center">
                &nbsp;
            </div>
            <div class="d-none d-lg-grid col-lg-2">&nbsp;</div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-12 settings-currency col-sm-8 col-lg-8 d-flex pt-2 pt-md-4 pb-5 py-lg-5">
                <div class="col-12 back-btn-transaction my-4 text-start">
                    <a href="app-send-wallet-1.html">
                        <img src="<?= base_url() ?>assets/img/freedy/back.png" alt="">
                    </a>
                    <div class="col-12 px-0 px-lg-5">
                        <h4 class="text-center title-confirm mb-5">Confirmation</h4>
                        <form class="check-currency" method="POST" action="<?= base_url() ?>wallet/send_notif">
                            <div class="col-12 form-confirm">
                                <textarea type="text" class="form-control form-confirm-input">
                                    </textarea>
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <button class="btn btn-currency">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>