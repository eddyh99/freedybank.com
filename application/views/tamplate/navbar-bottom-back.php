<?php if($card != 'confirm' && $card != 'success' && $requestcard != 'detailcard' && $requestcard_physical != 'success' && $requestcard_physical != 'summary'){?>
<div class="navbar-app  fixed-top d-flex justify-content-center ">
    <div class="col-12 col-lg-8 col-xl-6 navbar-bottom-back box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom">
        <a href="<?= base_url() ?>homepage" class="d-flex align-items-center border-0 ms-0 me-auto ">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <img class="" src="<?= base_url() ?>assets/img/logo-app.png" height="80" width="auto" alt="test">
            </div>
        </a>
    </div>
</div>
<?php }?>


<?php if($card != 'success' && $requestcard_physical != 'success' ){?>
<div class="navbar-app  fixed-bottom d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 footer-bottom-back box-navbar-freedy d-flex justify-content-center align-items-center top">
        <!-- Start Back -->
        <a href="
            <?php if($requestcard == 'requestcard' ) {?>
                <?= base_url() ?>homepage
            <?php }?>

            <?php if($requestcard == 'virtual' ) {?>
                <?= base_url() ?>homepage/requestcard?requestcard=<?= base64_encode('requestcard')?>
            <?php }?>

            <?php if($requestcard == 'activenow' ) {?>
                <?= base_url() ?>homepage/requestcard?requestcard=<?= base64_encode('virtual')?>
            <?php }?>

            <?php if($requestcard == 'detailcard' ) {?>
                <?= base_url() ?>homepage/requestcard?requestcard=<?= base64_encode('activenow')?>
            <?php }?>

            <?php if($card == 'card' ) {?>
                <?= base_url() ?>homepage
            <?php }?>

            <?php if($card == 'topup' ) {?>
                <?= base_url() ?>homepage/card?card=<?= base64_encode('card')?>
            <?php }?>

            <?php if($card == 'confirm' ) {?>
                <?= base_url() ?>homepage/card?card=<?= base64_encode('topup')?>
            <?php }?>

            <?php if($requestcard_physical == 'requestcard_physical' ) {?>
                <?= base_url() ?>homepage/card
            <?php }?>

            <?php if($requestcard_physical == '3dpassword' ) {?>
                <?= base_url() ?>homepage/requestcard_physical?requestcard_physical=<?= base64_encode('requestcard_physical')?>
            <?php }?>

            <?php if($requestcard_physical == 'shippingdetails' ) {?>
                <?= base_url() ?>homepage/requestcard_physical?requestcard_physical=<?= base64_encode('3dpassword')?>
            <?php }?>
            
            <?php if($requestcard_physical == 'summary' ) {?>
                <?= base_url() ?>homepage/requestcard_physical?requestcard_physical=<?= base64_encode('shippingdetails')?>
            <?php }?>


        " 
        class="d-flex align-items-center me-auto footer-noborder">
            <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="41" height="35" fill="#0099FF"/>
            <path d="M32.4587 17.5236H8.54199" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20.5003 27.7338L8.54199 17.5245L20.5003 7.31531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <!-- End back -->
        
        <!-- Start logout -->
        <a href="<?= base_url() ?>auth/logout" class="d-flex align-items-center footer-noborder">
            <span>Log out</span>
            <div class="icon-menus d-flex align-items-center home-svg">
                <svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.1087 8.81998C22.1677 6.45544 20.4359 4.49034 18.2084 3.25949C15.981 2.02865 13.3956 1.60823 10.893 2.06986C8.39026 2.5315 6.12506 3.84662 4.48331 5.79116C2.84157 7.73569 1.92485 10.1893 1.88936 12.734C1.85387 15.2786 2.70181 17.7569 4.28869 19.7465C5.87558 21.736 8.10322 23.1138 10.5921 23.645C13.0809 24.1763 15.677 23.8281 17.9379 22.6599C20.1988 21.4916 21.9847 19.5756 22.9913 17.2382L20.8356 16.3099C20.0438 18.1485 18.6389 19.6557 16.8604 20.5747C15.0819 21.4937 13.0398 21.7675 11.082 21.3497C9.12423 20.9318 7.3719 19.848 6.12361 18.2829C4.87533 16.7179 4.20832 14.7684 4.23623 12.7667C4.26415 10.765 4.98526 8.83492 6.27671 7.3053C7.56815 5.77567 9.35002 4.74116 11.3187 4.37803C13.2874 4.01489 15.3211 4.34561 17.0733 5.31382C18.8254 6.28204 20.1877 7.82784 20.9279 9.68785L23.1087 8.81998Z" fill="url(#paint0_linear_319_7)" />
                    <path d="M18 13.4414L34 13.4414" stroke="url(#paint1_linear_319_7)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M26 7.00036L34 13.4396L26 19.8789" stroke="url(#paint2_linear_319_7)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                        <linearGradient id="paint0_linear_319_7" x1="10.7999" y1="2.08743" x2="14.9766" y2="23.6873" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9E00FF" />
                            <stop offset="1" stop-color="#9E00FF" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_319_7" x1="26" y1="13.4414" x2="26" y2="12.4414" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9E00FF" />
                            <stop offset="1" stop-color="#9E00FF" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_319_7" x1="30" y1="19.8789" x2="30" y2="7.00036" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9E00FF" />
                            <stop offset="1" stop-color="#9E00FF" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </a>
        <!-- End Logout -->
    </div>
</div>
<?php }?>
