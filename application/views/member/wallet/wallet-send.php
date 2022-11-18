<div class="d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-start">
                            <span class="me-auto f-monserat title-top-navbar">Wallet Send</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <svg width="62" height="59" viewBox="0 0 62 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.6203" y="1.93042" width="61" height="57" rx="8" fill="#0078F0" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.16669 12.0649V21.7168C5.16669 23.0494 6.32328 24.1297 7.75002 24.1297C9.17676 24.1297 10.3334 23.0494 10.3334 21.7168V12.0649C10.3334 10.7322 11.49 9.65189 12.9167 9.65189H23.25C24.6768 9.65189 25.8334 8.57156 25.8334 7.23891C25.8334 5.90626 24.6768 4.82594 23.25 4.82594H12.9167C8.63648 4.82594 5.16669 8.06691 5.16669 12.0649ZM38.75 4.82594H49.0834C53.3636 4.82594 56.8334 8.06691 56.8334 12.0649V21.7168C56.8334 23.0494 55.6768 24.1297 54.25 24.1297C52.8233 24.1297 51.6667 23.0494 51.6667 21.7168V12.0649C51.6667 10.7322 50.5101 9.65188 49.0834 9.65188H38.75C37.3233 9.65188 36.1667 8.57156 36.1667 7.23891C36.1667 5.90626 37.3233 4.82594 38.75 4.82594ZM54.25 33.7816C52.8233 33.7816 51.6667 34.862 51.6667 36.1946V45.8465C51.6667 47.1792 50.5101 48.2595 49.0834 48.2595H38.75C37.3233 48.2595 36.1667 49.3398 36.1667 50.6725C36.1667 52.0051 37.3233 53.0854 38.75 53.0854H49.0834C53.3636 53.0854 56.8334 49.8445 56.8334 45.8465V36.1946C56.8334 34.862 55.6768 33.7816 54.25 33.7816ZM12.9167 48.2595H23.25C24.6768 48.2595 25.8334 49.3398 25.8334 50.6725C25.8334 52.0051 24.6768 53.0854 23.25 53.0854H12.9167C8.63648 53.0854 5.16669 49.8445 5.16669 45.8465V36.1946C5.16669 34.862 6.32329 33.7816 7.75002 33.7816C9.17676 33.7816 10.3334 34.862 10.3334 36.1946V45.8465C10.3334 47.1792 11.49 48.2595 12.9167 48.2595ZM20.6667 14.4778H41.3334C44.1868 14.4778 46.5 16.6385 46.5 19.3038V38.6076C46.5 41.2729 44.1868 43.4335 41.3334 43.4335H20.6667C17.8132 43.4335 15.5 41.2729 15.5 38.6076V19.3038C15.5 16.6385 17.8132 14.4778 20.6667 14.4778ZM20.6667 19.3038H41.3334V38.6076H20.6667V19.3038Z"
                                    fill="white" />
                            </svg>
                            <span class="b-qr">Scan QR</span>
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
                            <span class="b-qr">Input manual</span>
                            <form method="POST" action="<?= base_url() ?>wallet/send_confirm" class="text-center">
                                <input type="hidden" id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="text" class="form-control my-4" name="ucode" id="ucode"
                                    placeholder="Unique code">
                                <input type="text" class="form-control my-4" name="confirm_ucode" id="confirm_ucode"
                                    placeholder="Confirm Unique code">
                                <input type="text" class="form-control my-4" name="amount" id="amount"
                                    placeholder="Amount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                <input type="text" class="form-control my-4" name="confirm_amount" id="confirm_amount"
                                    placeholder="Confirm Amount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                <div class="row">
                                    <div class="d-flex flex-row mt-4">
                                        <a href="<?= base_url() ?>wallet"
                                            class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                        <button class="btn btn-receive-bank px-5 py-2" type="submit">OK</button>
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