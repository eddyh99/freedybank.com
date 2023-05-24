<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center flex-row mb-3">
                            <span class="me-auto f-monserat title-top-navbar">Home</span>
                            <a href="<?= base_url() ?>search" class="btn btn-primary p-2 d-flex align-items-center">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 17L13.1333 13.1333M8.11111 3.66667C10.5657 3.66667 12.5556 5.65651 12.5556 8.11111M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3 text-center">
                                <div class="copy-uqcode mt-1 d-flex justify-content-center align-items-center  text-center">
                                    <span class="me-auto">UNIQUE CODE : <?= $_SESSION["ucode"] ?></span>
                                    <div class="mb-4">
                                        <a href="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>Thumbnail.png" download class="qrcode-download  ms-auto mt-3 d-flex flex-column align-items-center ">
                                            <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="80" height="50" >
                                            <!-- <div>
                                                <img class="img-fluid d-block d-sm-none" src="<?=base_url()?>assets/img/btn-qrdw-mobile.png" alt="dw-qr" width="15" height="auto">
                                            </div> -->
                                            <img class="img-fluid" src="<?=base_url()?>assets/img/btn-qrdw.png" alt="dw-qr" width="90" height="90" >
                                            <div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <span class="">Copy & share your referral link to earn money</span>
                            <div class="copy-refcode d-flex flex-row justify-content-center mb-4">
                                <input class="col-7 me-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                                <a class="btn btn-copy me-2" id="btnref">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z" stroke="#0078F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="w-100 text-center">
                                <div class="d-inline-block btn-head-crypto">
                                    <a class="crypto px-4 py-2 active" href="<?= base_url() ?>homepage/">FIAT</a>
                                    <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="row my-4 btn-dashome d-flex justify-content-center">
                        <div class="col-6">
                            <a href="<?= base_url() ?>homepage/setting_currency" class=" d-flex justify-content-center align-items-center my-2">
                                <span class="text-center">
                                    Active/Deactive <br> Currencies
                                </span>
                            </a>
                        </div>
                        <!-- <div class="col-6">
                            <a href="<?= base_url() ?>card" class="d-flex justify-content-center align-items-center my-2">
                                <div class="text-center d-flex card-dashome justify-content-center align-items-center">
                                    <svg width="55" height="55" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.5" y="9" width="27" height="19.5" rx="2" stroke="white" stroke-width="3"/>
                                        <path d="M10.5 22.5H10.5146" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M6 16.5H31.5" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                    </svg>
                                    <span class="mx-2">
                                        Card
                                    </span>
                                </div>
                            </a>
                        </div> -->

                    </div>
                    <!-- End Dashboard -->
                    <div class="col-12 curencies-list-app">
                        <div class="col-12 d-flex flex-row justify-content-center align-items-center title-curencies-list">
                            <span class="me-auto">Curencies</span>
                            <span>Balance</span>
                        </div>
                        <div class="col-12">
                            <?php foreach ($currency as $dt) {
                                if ($dt->status == 'active') {
                                    if (($dt->currency == "USD") || ($dt->currency == "EUR")) {
                            ?>
                                        <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                            <span class="me-auto"><?= $dt->currency ?></span>
                                            <span><?= $dt->symbol; ?>
                                                <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                        </a>
                            <?php }
                                }
                            }
                            ?>
                            <?php foreach ($currency as $dt) {
                                if ($dt->status == 'active') {
                                    if (($dt->currency != "USD") && ($dt->currency != "EUR")) {
                            ?>
                                        <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                            <span class="me-auto"><?= $dt->currency ?></span>
                                            <span><?= $dt->symbol; ?>
                                                <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                        </a>
                            <?php }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>