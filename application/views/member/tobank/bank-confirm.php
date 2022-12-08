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
                            <form action="<?= base_url() ?>bank/banknotif" method="post" id="form_submit"
                                onsubmit="return validate()">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
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
                                        value="<?= $data['accountHolderName'] ?>">
                                </div>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="amount"
                                        value="<?= $data['amount'] ?>">

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
                                    <input class="form-control me-2" type="text" name="IBAN"
                                        value="<?= $data['IBAN'] ?>">
                                </div>

                                <?php }
                                    // TAXID
                                    if (($_SESSION["currency"] == 'ARS')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="taxId"
                                        value="<?= $data['taxId'] ?>">
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
                                        value="<?= $data['accountNumber'] ?>">
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
                                        value="<?= $data['countryCode'] ?>">
                                </div>

                                <?php } else { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="country"
                                        value="<?= $data['country'] ?>">
                                </div>

                                <?php } ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="postCode"
                                        value="<?= $data['postCode'] ?>">
                                </div>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="city"
                                        value="<?= $data['city'] ?>">
                                </div>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="firstLine"
                                        value="<?= $data['firstLine'] ?>">
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
                                        value="<?= $data['accountType'] ?>">
                                </div>

                                <?php }
                                    // bsbCode
                                    if (($_SESSION["currency"] == 'AUD')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="bsbCode"
                                        value="<?= $data['bsbCode'] ?>">
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
                                        value="<?= $data['bankCode'] ?>">
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
                                        value="<?= $data['branchCode'] ?>">
                                </div>

                                <?php }
                                    // cpf
                                    if (($_SESSION["currency"] == 'BRL')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="cpf" value="<?= $data['cpf'] ?>">
                                </div>

                                <?php }
                                    // rut
                                    if (($_SESSION["currency"] == 'CLP')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="rut" value="<?= $data['rut'] ?>">
                                </div>

                                <?php }
                                    // sortCode
                                    if (($_SESSION["currency"] == 'GBP')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="sortCode"
                                        value="<?= $data['sortCode'] ?>">
                                </div>

                                <?php }
                                    // ifscCode
                                    if (($_SESSION["currency"] == 'INR')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="ifscCode"
                                        value="<?= $data['ifscCode'] ?>">
                                </div>

                                <?php }
                                    // clabe
                                    if (($_SESSION["currency"] == 'MXN')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="clabe"
                                        value="<?= $data['clabe'] ?>">
                                </div>

                                <?php }
                                    // clabe
                                    if (($_SESSION["currency"] == 'MYR') ||
                                        ($_SESSION["currency"] == 'VND') ||
                                        ($_SESSION["currency"] == 'ZAR')
                                    ) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="swiftCode"
                                        value="<?= $data['swiftCode'] ?>">
                                </div>

                                <?php }
                                    // dateOfBirth & email
                                    if (($_SESSION["currency"] == 'KRW')) { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="dateOfBirth"
                                        value="<?= $data['dateOfBirth'] ?>">
                                </div>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="email"
                                        value="<?= $data['email'] ?>">
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
                                        value="<?= $data['phoneNumber'] ?>">
                                </div>

                                <?php }
                                    // abartn
                                    if ($_SESSION["currency"] == 'USD') { ?>
                                <div class="d-flex flex-row align-items-center my-3">
                                    <input class="form-control me-2" type="text" name="abartn"
                                        value="<?= $data['abartn'] ?>">
                                </div>
                                <?php }
                                }
                                ?>
                                <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                                    <span>Amount</span>
                                    <span><?= number_format($data["amount"], 2) ?></span>
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
                                    <span><?= number_format(balance($_SESSION['user_id'], $_SESSION["currency"]) - $data["deduct"], 2)  ?></span>
                                </div>

                                <div class="col-12 d-flex flex-row mt-5">
                                    <a href="<?= base_url() ?>bank"
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