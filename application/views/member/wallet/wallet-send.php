<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <?php $this->load->view("member/header"); ?>

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-11 col-lg-10 transaction pt-3 pt-lg-5">
                <span class="info-tc">Send wallet to wallet</span>
                <div class="col-12 info-saldo-wallet d-flex justify-content-center mt-3">
                    <span class="me-3">Your Balance</span>
                    <span class="me-3 text-blue-freedy">:</span>
                    <span class="text-blue-freedy"><?=$_SESSION["symbol"]?> <?=number_format($_SESSION["balance"],2)?></span>
                </div>
                <div class="col-12 back-btn-transaction my-4 text-start">
                    <a href="<?=base_url()?>wallet"><img src="<?= base_url() ?>assets/img/freedy/back.png" alt=""></a>
                </div>
                <div class="col-12 form-send-wallet">
                    <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <?php if (@isset($_SESSION["success"])) { ?>
                    <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>                    
                    <form method="POST" action="<?= base_url() ?>wallet/send_confirm" class="text-center">
                        <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="text" class="form-control my-4" name="ucode" id="ucode" placeholder="Unique code">
                        <input type="text" class="form-control my-4" name="confirm_ucode" id="confirm_ucode" placeholder="Confirm Unique code">
                        <input type="text" class="form-control my-4" name="amount" id="amount" placeholder="Amount"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        <input type="text" class="form-control my-4" name="confirm_amount" id="confirm_amount"
                            placeholder="Confirm Amount"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                        <button class="btn btn-next">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>