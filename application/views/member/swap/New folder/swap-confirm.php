<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <div class="row">
            <div class="col-12 col-lg-2 text-center mb-3 mb-lg-0">
                <img src="<?= base_url() ?>assets/img/freedy/logo-app.png" alt="" class="app-logo">
            </div>
            <div class="col-12 col-lg-8 d-flex align-items-center justify-content-center">
                <h4 class="text-center title-confirm">Confirmation</h4>
            </div>
            <div class="d-none d-lg-grid col-lg-2">&nbsp;</div>
        </div>
        <form action="<?=base_url()?>swap/notif" method="post">
            <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <input type="hidden" name="quoteid" value="<?=$data["quoteid"]?>">
            <input type="hidden" name="toswap" value="<?=$data["target"]?>">
            <input type="hidden" name="amount" value="<?=$data["amount"]?>">
            <div class="row d-flex justify-content-center">
                <div class="col-12 settings-currency col-sm-8 col-lg-8 d-flex pt-2 pt-md-4 pb-5 py-lg-0">
                    <div class="col-12 back-btn-transaction my-4 text-start border-top-freedy">
                        <div class="d-flex my-5 justify-content-between">
                            <a href="<?= base_url() ?>swap">
                                <img src="<?= base_url() ?>assets/img/freedy/back.png" alt="">
                            </a>
                            <div class="d-flex flex-column text-center">
                                <span class="title-top mb-2">You convert</span>
                                <span class="title-second"><?=$_SESSION["symbol"]?> <?=$data["amount"]?></span>
                            </div>
                            <div class="">&nbsp;</div>
                        </div>
                        <div class="col-12 px-0 px-lg-5">
                            <div class="col-12 form-confirm d-flex flex-column mb-5">
                                <span class="title-convert">You Receive &asymp;</span>
                                <span class="amout-convert"><?=$data["symbol"]?> <?=$data["amountget"]?></span>
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <button class="btn btn-currency">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>