<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php $this->load->view("member/header"); ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 menus-list-app mb-4">
                        <div class="col-12">
                            <a href="<?= base_url() ?>homepage"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.1 26.7982H3.9C3.55522 26.7982 3.22456 26.6463 2.98076 26.3759C2.73696 26.1055 2.6 25.7388 2.6 25.3564V13.8218H0L12.0796 0.422869C12.2003 0.288813 12.3437 0.182465 12.5015 0.109906C12.6593 0.0373469 12.8285 0 12.9993 0C13.1702 0 13.3394 0.0373469 13.4972 0.109906C13.655 0.182465 13.7984 0.288813 13.9191 0.422869L26 13.8218H23.4V25.3564C23.4 25.7388 23.263 26.1055 23.0192 26.3759C22.7754 26.6463 22.4448 26.7982 22.1 26.7982ZM10.4 16.7054H15.6V23.9146H20.8V12.132L13 3.48099L5.2 12.132V23.9146H10.4V16.7054Z"
                                        fill="#0078F0" />
                                </svg>
                                <span class="ms-2">Home</span>
                            </a>
                            <a href="<?= base_url() ?>homepage/wallet"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3">
                                <svg width="49" height="49" viewBox="0 0 49 49" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.1666 16.3333C31.1666 20.0152 28.1818 23 24.4999 23C20.818 23 17.8333 20.0152 17.8333 16.3333C17.8333 12.6514 20.818 9.66667 24.4999 9.66667C28.1818 9.66667 31.1666 12.6514 31.1666 16.3333Z"
                                        stroke="#0078F0" stroke-width="3" stroke-linecap="round" />
                                    <path
                                        d="M11.3017 30.8551C12.3529 28.6639 14.6856 27.5625 17.1158 27.5625H31.8842C34.3144 27.5625 36.6471 28.6639 37.6983 30.8551C38.6461 32.8308 39.6148 35.5852 39.7859 38.8115C39.8151 39.363 39.3648 39.8125 38.8125 39.8125H10.1875C9.63521 39.8125 9.18485 39.363 9.2141 38.8115C9.38522 35.5852 10.3539 32.8308 11.3017 30.8551Z"
                                        stroke="#0078F0" stroke-width="3" stroke-linecap="round" />
                                </svg>
                                <span class="ms-2">My wallet</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="receive-title d-flex flex-row justify-content-center align-items-center mb-4">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.1665 14.3333L6.10584 13.2727L5.04518 14.3333L6.10584 15.394L7.1665 14.3333ZM34.3332 17.9167C34.3332 18.7451 35.0047 19.4167 35.8332 19.4167C36.6616 19.4167 37.3332 18.7451 37.3332 17.9167L34.3332 17.9167ZM13.2725 6.10601L6.10584 13.2727L8.22716 15.394L15.3938 8.22733L13.2725 6.10601ZM6.10584 15.394L13.2725 22.5607L15.3938 20.4393L8.22716 13.2727L6.10584 15.394ZM7.1665 15.8333L33.8332 15.8333L33.8332 12.8333L7.1665 12.8333L7.1665 15.8333ZM34.3332 16.3333L34.3332 17.9167L37.3332 17.9167L37.3332 16.3333L34.3332 16.3333ZM33.8332 15.8333C34.1093 15.8333 34.3332 16.0572 34.3332 16.3333L37.3332 16.3333C37.3332 14.4003 35.7662 12.8333 33.8332 12.8333L33.8332 15.8333Z"
                                    fill="#0078F0" />
                                <path
                                    d="M35.8335 28.6667L36.8942 27.606L37.9548 28.6667L36.8942 29.7273L35.8335 28.6667ZM7.37516 28.6667L7.37516 27.1667L7.37516 28.6667ZM3.87516 25.0833C3.87516 24.2549 4.54674 23.5833 5.37516 23.5833C6.20359 23.5833 6.87516 24.2549 6.87516 25.0833L3.87516 25.0833ZM29.7275 20.4393L36.8942 27.606L34.7728 29.7273L27.6062 22.5607L29.7275 20.4393ZM36.8942 29.7273L29.7275 36.894L27.6062 34.7727L34.7728 27.606L36.8942 29.7273ZM35.8335 30.1667L7.37516 30.1667L7.37516 27.1667L35.8335 27.1667L35.8335 30.1667ZM3.87516 26.6667L3.87516 25.0833L6.87516 25.0833L6.87516 26.6667L3.87516 26.6667ZM7.37516 30.1667C5.44217 30.1667 3.87516 28.5997 3.87516 26.6667L6.87516 26.6667C6.87516 26.9428 7.09902 27.1667 7.37516 27.1667L7.37516 30.1667Z"
                                    fill="#0078F0" />
                            </svg>
                            <span class="ms-2">Swap</span>
                        </div>
                        <div class="col-12 recive-bank  d-flex align-items-center flex-column text-center">
                            <form method="POST" id="swapconfirm" action="<?= base_url() ?>swap/confirm"
                                class="swap text-center" onsubmit="return validate()">

                                <?php if (@isset($_SESSION["failed"])) { ?>
                                <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>

                                <div id="notifcalculate" class="col-12 alert alert-warning alert-dismissible fade show"
                                    role="alert">
                                    <span class="notif-login f-poppins" id="txtnotif"></span>
                                </div>

                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" id="amountget" name="amountget">
                                <input type="hidden" id="quoteid" name="quoteid">
                                <div class="swap-form-icon d-flex flex-row align-items-center my-4">
                                    <label for=""><?= $_SESSION["symbol"] ?></label>
                                    <input type="text" class="form-control money-input text-end" name="amount"
                                        id="amount" placeholder="0.00">
                                </div>

                                <div class="swap-selection d-flex flex-column align-items-start justify-content-start">
                                    <div class="col-4">
                                        <span class="t-select">Convert to</span>
                                        <select name="toswap" id="toswap" class="form-select">
                                            <?php if ($_SESSION["currency"] != "USD") { ?>
                                            <option data-currency="&dollar;" value="USD">USD</option>
                                            <?php } ?>
                                            <?php if ($_SESSION["currency"] != "EUR") { ?>
                                            <option data-currency="&euro;" value="EUR">EUR</option>
                                            <?php } ?>
                                            <?php foreach ($currency as $dt) {
                                                if ($dt->status == 'active') {
                                                    if (($dt->currency != "USD") && ($dt->currency != "EUR") && ($_SESSION["currency"] != $dt->currency)) {
                                            ?>
                                            <option data-currency="<?= $dt->symbol ?>" value="<?= $dt->currency ?>"
                                                <?php echo ($_SESSION["currency"] == $dt->currency) ? "selected" : "" ?>>
                                                <?= $dt->currency?></option>
                                            <?php       }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="swap-form-icon d-flex flex-row align-items-center my-4">
                                    <label for=""><span id="tocurrency"></span></label>
                                    <input type="text" class="form-control money-input text-end" name="receive"
                                        id="receive" placeholder="0.00" readonly>
                                </div>
                                <div class="row">
                                    <div class="d-flex flex-row mt-4">
                                        <button class="btn btn-receive-bank px-3 py-2 ms-auto" type="submit"
                                            id="btnconfirm" disabled>Confirm</button>
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