<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-start">
                            <span class="me-auto f-monserat title-top-navbar">Transfer wallet to wallet</span>
                        </div>
                    </div>
                    <div class="col-12 infobank-list-app my-4">
                        <div class="col-12 py-4">
                            <form method="POST" action="<?= base_url() ?>wallet/send_notif" id="form_submit"
                                onsubmit="return validate()">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Recipients uniqeu code</span>
                                    <span><?= $data["ucode"] ?></span>
                                    <input type="text" class="form-control mb-4" name="ucode" id="ucode"
                                        placeholder="Unique code" value="<?= $data["ucode"] ?>" hidden>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Amount</span>
                                    <span><?= number_format($data["amount"], 2) ?></span>
                                    <input type="text" class="form-control mb-4" name="amount" id="amount"
                                        placeholder="Amount" value="<?= $data["amount"] ?>" hidden>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Transaction fee</span>
                                    <span><?= number_format($data["fee"], 2) ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Total Deducted</span>
                                    <span><?= number_format($data["deduct"], 2) ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>New Balance</span>
                                    <span><?= number_format(balance($_SESSION['user_id'], $_SESSION["currency"]) - $data["deduct"], 2) ?></span>
                                </div>

                                <img src="<?=base_url()?>assets/img/notif-sender-1.png" alt="" class="img-fluid mb-3">

                                <div class="col-12 d-flex flex-row mt-5">
                                    <a href="<?= base_url() ?>wallet"
                                        class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                    <button class="btn btn-receive-bank px-5 py-2" type="submit"
                                        id="btnconfirm">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-app fixed-bottom d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4 box-navbar-freedy d-flex justify-content-center align-items-center">
        <a href="<?= base_url() ?>wallet" class="d-flex align-items-center border-0">
            <div class="icon-menus d-flex align-items-center home-svg">
                <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.875 9.5L10.125 1.25M1.875 9.5L10.125 17.75M1.875 9.5H21.125" stroke="#0078F0"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </a>
    </div>
</div>