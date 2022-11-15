<div class="d-flex justify-content-center">
    <div class="col-5">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center flex-row mb-3">
                            <span class="me-auto f-monserat title-top-navbar">Home</span>
                            <a href="" class="btn btn-primary p-2 d-flex align-items-center">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 17L13.1333 13.1333M8.11111 3.66667C10.5657 3.66667 12.5556 5.65651 12.5556 8.11111M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3 text-center">
                            <div class="copy-uqcode mt-3 mb-5">
                                <span class="">UNIQUE CODE : <?= $_SESSION["ucode"] ?></span>
                            </div>
                            <div class="currency-btn-setting mb-5">
                                <a href="<?= base_url() ?>homepage/setting_currency" class="p-3">Active/Deactive
                                    Currencies</a>
                            </div>
                            <span class="">Copy & share your referral link to earn money</span>
                            <div class="copy-refcode d-flex flex-row justify-content-center mb-4">
                                <input class="col-7 me-2" type="text" name="" id="refcode"
                                    value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                                <a class="btn btn-copy me-2" id="btnref">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                                            stroke="#0078F0" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 menus-list-app mb-4">
                        <div class="col-12">
                            <a href="" class="d-flex flex-row justify-content-center align-items-center py-2 my-3">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.1 26.7982H3.9C3.55522 26.7982 3.22456 26.6463 2.98076 26.3759C2.73696 26.1055 2.6 25.7388 2.6 25.3564V13.8218H0L12.0796 0.422869C12.2003 0.288813 12.3437 0.182465 12.5015 0.109906C12.6593 0.0373469 12.8285 0 12.9993 0C13.1702 0 13.3394 0.0373469 13.4972 0.109906C13.655 0.182465 13.7984 0.288813 13.9191 0.422869L26 13.8218H23.4V25.3564C23.4 25.7388 23.263 26.1055 23.0192 26.3759C22.7754 26.6463 22.4448 26.7982 22.1 26.7982ZM10.4 16.7054H15.6V23.9146H20.8V12.132L13 3.48099L5.2 12.132V23.9146H10.4V16.7054Z"
                                        fill="#0078F0" />
                                </svg>
                                <span class="ms-2">Home</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 curencies-list-app">
                        <div
                            class="col-12 d-flex flex-row justify-content-center align-items-center title-curencies-list">
                            <span class="me-auto">Curencies</span>
                            <span>Balance</span>
                        </div>
                        <div class="col-12">
                            <?php foreach ($currency as $dt) {
                                if ($dt->status == 'active') {
                            ?>
                            <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>"
                                class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                <span class="me-auto"><?= $dt->currency ?></span>
                                <span><?= $dt->symbol; ?> <?= $dt->balance ?></span>
                            </a>
                            <?php
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