<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-start">
                            <span class="me-auto f-monserat title-top-navbar">Transfer wallet to Bank</span>
                        </div>
                    </div>
                    <div class="col-12 infobank-list-app my-4">
                        <div class="col-12 py-4">
                            <form action="<?= base_url() ?>bank/banknotif" method="post">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="account_number" value="<?= $data["account_number"] ?>">
                                <input type="hidden" name="recipient" value="<?= $data["recipient"] ?>">
                                <input type="hidden" name="causal" value="<?= $data["causal"] ?>">
                                <input type="hidden" name="amount" value="<?= $data["amount"] ?>">
                                <input type="hidden" name="transfer_type" value="<?= $data["transfer_type"] ?>">
                                <input type="hidden" name="swift" value="<?= $data["swift"] ?>">
                                <?php
                                if ($_SESSION["currency"] == "USD") { ?>
                                <input type="hidden" name="bank_name" value="<?= $data["bank_name"] ?>">
                                <input type="hidden" name="address" value="<?= $data["address"] ?>">
                                <input type="hidden" name="account_type" value="<?= $data["account_type"] ?>">
                                <input type="hidden" name="city" value="<?= $data["city"] ?>">
                                <input type="hidden" name="state" value="<?= $data["state"] ?>">
                                <input type="hidden" name="postalcode" value="<?= $data["postalcode"] ?>">
                                <input type="hidden" name="country" value="<?= $data["country"] ?>">
                                <?php } ?>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Receptients uniqeu code</span>
                                    <span><?= $data["recipient"] ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Amount</span>
                                    <span><?= $data["amount"] ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Transaction fee</span>
                                    <span><?= $data["fee"] ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Total Deducted</span>
                                    <span><?= $data["deduct"] ?></span>
                                </div>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>New Balance</span>
                                    <span><?= $_SESSION['balance'] - $data["deduct"] ?></span>
                                </div>

                                <div class="col-12 d-flex flex-row mt-5">
                                    <a href="<?= base_url() ?>bank"
                                        class="btn btn-wallet-cancle py-2 me-auto">Cancle</a>
                                    <button class="btn btn-receive-bank px-5 py-2" type="submit">OK</button>
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