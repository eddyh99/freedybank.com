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
                    <a href="<?=base_url()?>wallet/send">
                        <img src="<?= base_url() ?>assets/img/freedy/back.png" alt="">
                    </a>
                    <div class="col-12 px-0 px-lg-5">
                        <h4 class="text-center title-confirm mb-5">Confirmation</h4>
                        <form class="check-currency" method="POST" action="<?= base_url() ?>wallet/send_notif">
                            <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <label>Unique Code</label>
                            <input type="text" class="form-control my-4" name="ucode" id="ucode" placeholder="Unique code" value="<?=$data["ucode"]?>" readonly>
                            <label>Amount</label>
                            <input type="text" class="form-control my-4" name="amount" id="amount" placeholder="Amount" value="<?=$data["amount"]?>" readonly>
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