<?php $this->load->view("member/tobank/countries-list"); ?>
<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-start">
                            <span class="me-auto f-monserat title-top-navbar">Wallet to bank - Local bank</span>
                        </div>
                    </div>
                    <div class="col-12 infobank-list-app my-4">
                        <div class="py-4">
                            <?php if (@isset($_SESSION["failed"])) { ?>
                            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php } ?>
                            <?php if (@isset($_SESSION["success"])) { ?>
                            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                                <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php } ?>
                            <form action="<?= base_url() ?>bank/banklocalconfirm" method="post">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="transfer_type" value="circuit">
                                <div class="tab-pane box-tab-bank" id="us">
                                    <?php if (($_SESSION["currency"] == "AED") || ($_SESSION["currency"] == "EUR")) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="recipient" id="us1"
                                            placeholder="Recipient's Name">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="account_number" id="us2"
                                            placeholder="IBAN">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="amount" id="us3"
                                            placeholder="Amount">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="causal" id="us4"
                                            placeholder="Causal">
                                    </div>
                                    <?php } elseif ($_SESSION["currency"] == "USD") { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="recipient" id="inter1"
                                            placeholder="Recipient">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="account_number" id="inter2"
                                            placeholder="Account Number">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="swift" id="inter3"
                                            placeholder="Routing Number">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <select name="account_type" class="form-control me-2">
                                            <option value="savings">Saving</option>
                                            <option value="checking">Checking</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="amount" id="inter4"
                                            placeholder="Amount">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="causal" id="inter5"
                                            placeholder="Causal">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="address" id="inter6"
                                            placeholder="Recipient Address">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="city" id="inter7"
                                            placeholder="Recipient City">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="state" id="inter8"
                                            placeholder="Recipient State">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="postalcode" id="inter9"
                                            placeholder="Recipient Postalcode">
                                    </div>
                                    <?php } ?>
                                    <div class="col-12 d-flex flex-row mt-5">
                                        <a href="<?= base_url() ?>bank"
                                            class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                        <button class="btn btn-receive-bank px-5 py-1" type="submit">Confirm</button>
                                    </div>
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
        <a href="<?= base_url() ?>bank" class="d-flex align-items-center border-0">
            <div class="icon-menus d-flex align-items-center home-svg">
                <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.875 9.5L10.125 1.25M1.875 9.5L10.125 17.75M1.875 9.5H21.125" stroke="#0078F0"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </a>
    </div>
</div>