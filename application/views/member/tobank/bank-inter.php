<?php require_once("countries-list.php"); ?>
<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row d-flex justify-content-center">
                    <?php if (file_exists(APPPATH . 'views/member/tobank/currency/' . $_SESSION['currency'] . '.php')) { ?>
                    <div class="col-12">
                        <div class="text-start">
                            <span class="me-auto f-monserat title-top-navbar"><?= $_SESSION["currency"] ?> - Withdraw -
                                International</span>
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
                            <form action="<?= base_url() ?>bank/bankconfirm" method="post" id="form_submit"
                                onsubmit="return validate()">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="transfer_type" value="outside">
                                <input type="hidden" name="currencycode" id="currencycode" value="<?= $currencycode ?>">
                                <input type="hidden" name="url" value="inter">
                                <div class="tab-pane box-tab-bank" id="us">

                                    <div class=" align-items-center my-3">
                                        <small class="text-danger">MAX
                                            : <?= $_SESSION["symbol"] ?>
                                            <?= number_format(balance($_SESSION['user_id'], $_SESSION["currency"]) - $fee,2) ?></small>
                                        <input class="form-control money-input me-2" type="text" name="amount"
                                            placeholder="Amount">
                                    </div>
                                    <div class=" align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="accountHolderName"
                                            placeholder="Recipient Name">
                                    </div>

                                    <?php
                                        $data['type'] = "inter";
                                        $data['countries_list'] = $countries_list;
                                        $this->load->view('member/tobank/currency/' . @$_SESSION['currency'], $data)
                                        ?>

                                    <div class=" align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="causal" placeholder="Causal">
                                    </div>

                                    <div class="d-flex flex-row col-12 mt-5">
                                        <a href="<?= base_url() ?>bank"
                                            class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                        <button class="btn btn-receive-bank px-5 py-1" type="submit"
                                            id="btnconfirm">Confirm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="col-12 my-4">
                        <div class="col-12 py-4">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= base_url() ?>assets/img/logo-2.png" alt="" style="width: 100px;"
                                    class="mt-5">
                                <span class="b-qr">Coming Soon!</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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