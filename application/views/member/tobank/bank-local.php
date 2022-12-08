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
                            <form action="<?= base_url() ?>bank/banklocalconfirm" method="post" id="form_submit"
                                onsubmit="return validate()">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="transfer_type" value="circuit">
                                <div class="tab-pane box-tab-bank" id="us">

                                    <?php
                                    if (
                                        ($_SESSION["currency"] == 'AED') ||
                                        ($_SESSION["currency"] == 'ARS') ||
                                        ($_SESSION["currency"] == 'AUD') ||
                                        ($_SESSION["currency"] == 'BDT') ||
                                        ($_SESSION["currency"] == 'BGN') ||
                                        ($_SESSION["currency"] == 'BRL') ||
                                        ($_SESSION["currency"] == 'CAD') ||
                                        ($_SESSION["currency"] == 'CHF') ||
                                        ($_SESSION["currency"] == 'CLP') ||
                                        ($_SESSION["currency"] == 'CNY') ||
                                        ($_SESSION["currency"] == 'CZK') ||
                                        ($_SESSION["currency"] == 'DKK') ||
                                        ($_SESSION["currency"] == 'EGP') ||
                                        ($_SESSION["currency"] == 'EUR') ||
                                        ($_SESSION["currency"] == 'GBP') ||
                                        ($_SESSION["currency"] == 'GEL') ||
                                        ($_SESSION["currency"] == 'GHS') ||
                                        ($_SESSION["currency"] == 'HKD') ||
                                        ($_SESSION["currency"] == 'HRK') ||
                                        ($_SESSION["currency"] == 'HUF') ||
                                        ($_SESSION["currency"] == 'IDR') ||
                                        ($_SESSION["currency"] == 'ILS') ||
                                        ($_SESSION["currency"] == 'INR') ||
                                        ($_SESSION["currency"] == 'JPY') ||
                                        ($_SESSION["currency"] == 'KES') ||
                                        ($_SESSION["currency"] == 'KRW') ||
                                        ($_SESSION["currency"] == 'LKR') ||
                                        ($_SESSION["currency"] == 'MAD') ||
                                        ($_SESSION["currency"] == 'MXN') ||
                                        ($_SESSION["currency"] == 'MYR') ||
                                        ($_SESSION["currency"] == 'NGN') ||
                                        ($_SESSION["currency"] == 'NOK') ||
                                        ($_SESSION["currency"] == 'NPR') ||
                                        ($_SESSION["currency"] == 'NZD') ||
                                        ($_SESSION["currency"] == 'PHP') ||
                                        ($_SESSION["currency"] == 'PKR') ||
                                        ($_SESSION["currency"] == 'PLN') ||
                                        ($_SESSION["currency"] == 'RON') ||
                                        ($_SESSION["currency"] == 'SEK') ||
                                        ($_SESSION["currency"] == 'SGD') ||
                                        ($_SESSION["currency"] == 'THB') ||
                                        ($_SESSION["currency"] == 'TRY') ||
                                        ($_SESSION["currency"] == 'UAH') ||
                                        ($_SESSION["currency"] == 'USD') ||
                                        ($_SESSION["currency"] == 'VND') ||
                                        ($_SESSION["currency"] == 'ZAR')
                                    ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="accountHolderName"
                                            placeholder="accountHolderName">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="amount" placeholder="amount">

                                    </div>

                                    <?php
                                        // IBAN
                                        if (($_SESSION["currency"] == 'AED') ||
                                            ($_SESSION["currency"] == 'BGN') ||
                                            ($_SESSION["currency"] == 'CHF') ||
                                            ($_SESSION["currency"] == 'DKK') ||
                                            ($_SESSION["currency"] == 'EGP') ||
                                            ($_SESSION["currency"] == 'EUR') ||
                                            ($_SESSION["currency"] == 'GEL') ||
                                            ($_SESSION["currency"] == 'HKD') ||
                                            ($_SESSION["currency"] == 'HRK') ||
                                            ($_SESSION["currency"] == 'ILS') ||
                                            ($_SESSION["currency"] == 'NOK') ||
                                            ($_SESSION["currency"] == 'PKR') ||
                                            ($_SESSION["currency"] == 'PLN') ||
                                            ($_SESSION["currency"] == 'RON') ||
                                            ($_SESSION["currency"] == 'SEK') ||
                                            ($_SESSION["currency"] == 'TRY')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="IBAN" placeholder="IBAN">
                                    </div>

                                    <?php }
                                        // TAXID
                                        if (($_SESSION["currency"] == 'ARS')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="taxId" placeholder="taxId">
                                    </div>

                                    <?php }
                                        // accountNumber
                                        if (($_SESSION["currency"] == 'ARS') ||
                                            ($_SESSION["currency"] == 'AUD') ||
                                            ($_SESSION["currency"] == 'BDT') ||
                                            ($_SESSION["currency"] == 'BGN') ||
                                            ($_SESSION["currency"] == 'BRL') ||
                                            ($_SESSION["currency"] == 'CAD') ||
                                            ($_SESSION["currency"] == 'CHF') ||
                                            ($_SESSION["currency"] == 'CLP') ||
                                            ($_SESSION["currency"] == 'CNY') ||
                                            ($_SESSION["currency"] == 'CZK') ||
                                            ($_SESSION["currency"] == 'DKK') ||
                                            ($_SESSION["currency"] == 'EGP') ||
                                            ($_SESSION["currency"] == 'EUR') ||
                                            ($_SESSION["currency"] == 'GBP') ||
                                            ($_SESSION["currency"] == 'GEL') ||
                                            ($_SESSION["currency"] == 'GHS') ||
                                            ($_SESSION["currency"] == 'HKD') ||
                                            ($_SESSION["currency"] == 'HRK') ||
                                            ($_SESSION["currency"] == 'HUF') ||
                                            ($_SESSION["currency"] == 'IDR') ||
                                            ($_SESSION["currency"] == 'ILS') ||
                                            ($_SESSION["currency"] == 'INR') ||
                                            ($_SESSION["currency"] == 'JPY') ||
                                            ($_SESSION["currency"] == 'KES') ||
                                            ($_SESSION["currency"] == 'KRW') ||
                                            ($_SESSION["currency"] == 'LKR') ||
                                            ($_SESSION["currency"] == 'MAD') ||
                                            ($_SESSION["currency"] == 'MXN') ||
                                            ($_SESSION["currency"] == 'MYR') ||
                                            ($_SESSION["currency"] == 'NGN') ||
                                            ($_SESSION["currency"] == 'NOK') ||
                                            ($_SESSION["currency"] == 'NPR') ||
                                            ($_SESSION["currency"] == 'NZD') ||
                                            ($_SESSION["currency"] == 'PHP') ||
                                            ($_SESSION["currency"] == 'PKR') ||
                                            ($_SESSION["currency"] == 'PLN') ||
                                            ($_SESSION["currency"] == 'RON') ||
                                            ($_SESSION["currency"] == 'SEK') ||
                                            ($_SESSION["currency"] == 'SGD') ||
                                            ($_SESSION["currency"] == 'THB') ||
                                            ($_SESSION["currency"] == 'TRY') ||
                                            ($_SESSION["currency"] == 'UAH') ||
                                            ($_SESSION["currency"] == 'USD') ||
                                            ($_SESSION["currency"] == 'VND') ||
                                            ($_SESSION["currency"] == 'ZAR')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="accountNumber"
                                            placeholder="accountNumber">
                                    </div>

                                    <?php }
                                        // Address
                                        if (
                                            ($_SESSION["currency"] == 'AUD') ||
                                            ($_SESSION["currency"] == 'PHP') ||
                                            ($_SESSION["currency"] == 'THB') ||
                                            ($_SESSION["currency"] == 'UAH') ||
                                            ($_SESSION["currency"] == 'USD')
                                        ) {
                                            if (($_SESSION["currency"] == 'AUD')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="countryCode"
                                            placeholder="countryCode">
                                    </div>

                                    <?php } else { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="country"
                                            placeholder="country">
                                    </div>

                                    <?php } ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="postCode"
                                            placeholder="postCode">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="city" placeholder="city">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="firstLine"
                                            placeholder="firstLine">
                                    </div>

                                    <?php }
                                        // accountType
                                        if (
                                            ($_SESSION["currency"] == 'BRL') ||
                                            ($_SESSION["currency"] == 'CAD') ||
                                            ($_SESSION["currency"] == 'CLP') ||
                                            ($_SESSION["currency"] == 'JPY') ||
                                            ($_SESSION["currency"] == 'USD')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="accountType"
                                            placeholder="accountType">
                                    </div>

                                    <?php }
                                        // bsbCode
                                        if (($_SESSION["currency"] == 'AUD')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="bsbCode"
                                            placeholder="bsbCode">
                                    </div>

                                    <?php }
                                        // bankCode
                                        if (
                                            ($_SESSION["currency"] == 'BDT') ||
                                            ($_SESSION["currency"] == 'BRL') ||
                                            ($_SESSION["currency"] == 'CLP') ||
                                            ($_SESSION["currency"] == 'CZK') ||
                                            ($_SESSION["currency"] == 'GHS') ||
                                            ($_SESSION["currency"] == 'IDR') ||
                                            ($_SESSION["currency"] == 'JPY') ||
                                            ($_SESSION["currency"] == 'KES') ||
                                            ($_SESSION["currency"] == 'KRW') ||
                                            ($_SESSION["currency"] == 'LKR') ||
                                            ($_SESSION["currency"] == 'MAD') ||
                                            ($_SESSION["currency"] == 'NGN') ||
                                            ($_SESSION["currency"] == 'NPR') ||
                                            ($_SESSION["currency"] == 'PHP') ||
                                            ($_SESSION["currency"] == 'SGD') ||
                                            ($_SESSION["currency"] == 'THB')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="bankCode"
                                            placeholder="bankCode">
                                    </div>

                                    <?php }
                                        // branchCode
                                        if (
                                            ($_SESSION["currency"] == 'BDT') ||
                                            ($_SESSION["currency"] == 'BRL') ||
                                            ($_SESSION["currency"] == 'JPY') ||
                                            ($_SESSION["currency"] == 'LKR') ||
                                            ($_SESSION["currency"] == 'VND')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="branchCode"
                                            placeholder="branchCode">
                                    </div>

                                    <?php }
                                        // cpf
                                        if (($_SESSION["currency"] == 'BRL')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="cpf" placeholder="cpf">
                                    </div>

                                    <?php }
                                        // rut
                                        if (($_SESSION["currency"] == 'CLP')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="rut" placeholder="rut">
                                    </div>

                                    <?php }
                                        // sortCode
                                        if (($_SESSION["currency"] == 'GBP')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="sortCode"
                                            placeholder="sortCode">
                                    </div>

                                    <?php }
                                        // ifscCode
                                        if (($_SESSION["currency"] == 'INR')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="ifscCode"
                                            placeholder="ifscCode">
                                    </div>

                                    <?php }
                                        // clabe
                                        if (($_SESSION["currency"] == 'MXN')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="clabe" placeholder="clabe">
                                    </div>

                                    <?php }
                                        // clabe
                                        if (($_SESSION["currency"] == 'MYR') ||
                                            ($_SESSION["currency"] == 'VND') ||
                                            ($_SESSION["currency"] == 'ZAR')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="swiftCode"
                                            placeholder="swiftCode">
                                    </div>

                                    <?php }
                                        // dateOfBirth & email
                                        if (($_SESSION["currency"] == 'KRW')) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="dateOfBirth"
                                            placeholder="dateOfBirth">
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="email" placeholder="email">
                                    </div>

                                    <?php }
                                        // phoneNumber
                                        if (
                                            ($_SESSION["currency"] == 'BRL') ||
                                            ($_SESSION["currency"] == 'CLP') ||
                                            ($_SESSION["currency"] == 'UAH')
                                        ) { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="phoneNumber"
                                            placeholder="phoneNumber">
                                    </div>

                                    <?php }
                                        // abartn
                                        if ($_SESSION["currency"] == 'USD') { ?>
                                    <div class="d-flex flex-row align-items-center my-3">
                                        <input class="form-control me-2" type="text" name="abartn" placeholder="abartn">
                                    </div>
                                    <?php }
                                    }
                                    ?>
                                    <div class="col-12 d-flex flex-row mt-5">
                                        <a href="<?= base_url() ?>bank"
                                            class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                        <button class="btn btn-receive-bank px-5 py-1" type="submit"
                                            id="btnconfirm">Confirm</button>
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