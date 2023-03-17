
<?php if($requestcard == 'detailcard') {?>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5 ">
                    <div class="row">
                        <h3 class="text-center text-blue-freedy fw-bolder f-poppins mt-5 pt-5 col-11 mx-auto">YOUR VIRTUAL CARD DETAILS</h3>
                        <div class="mt-5 wrap-border-topup p-3 p-md-4 col-10 mx-auto">
                            <div class="d-flex justify-content-between px-3  py-4 text-blue-freedy fw-bold">
                                <span>Card number</span>
                                <span>xxxxxxxxx</span>
                            </div>
                            <div class="d-flex justify-content-between px-3  py-4 text-blue-freedy fw-bold">
                                <span>CVV</span>
                                <span>xxxxxxxxxxx</span>
                            </div>
                            <div class="d-flex justify-content-between px-3  py-4 text-blue-freedy fw-bold">
                                <span>Expire date</span>
                                <span>12 March 2023</span>
                            </div>
                            <div class="text-start d-flex justify-content-center mt-5 mb-4">
                                <a href="<?= base_url(); ?>homepage/card"
                                    class="btn-card-confirm-nocard  d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span class="f-lexend">Confirm</span>
                                </a>
                            </div>
                        </div>            

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {?>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-sm-8 col-lg-5 col-xl-4">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5 ">
                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <div class="col-12 box-code-freedy px-4 py-3 text-center">
                                <div class="copy-uqcode mt-1 d-flex justify-content-center align-items-center text-center">
                                    <span class="me-auto">UNIQUE CODE : <?= $_SESSION["ucode"] ?></span>
                                    <a href="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>Thumbnail.png" download class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center">
                                        <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="50" height="50">
                                        <div class="">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </a>
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
                            </div>
                        </div>
                    </div>

                    <?php if($requestcard == ''){?>
                        <div class="row my-5">
                            <div class="col-12">
                                <div class="text-topup-card ">
                                    <h1 class="text-blue-freedy fw-bolder f-poppins text-center ">
                                        Request Card
                                    </h1>
                                    <ul class="text-start fw-semibold f-lexend col-10 mx-auto mt-4">
                                        <li>The card will be linked and rechargable only in Euro from your own wallet</li>
                                        <li class="mt-3">Every wallet is allowed to have a maximum of 1  card, the card is a rechargeable VISA in Euro currency</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-req-card p-5 mt-4">
                                    <form action="POST" >
                                        <div class="mt-4">
                                            <span class="text-req-card">Unique code</span>
                                            <div class="row d-flex align-items-center w-100">
                                                <div class="form-req-card d-flex flex-row align-items-center my-2 col-12 ms-2" style="height: 70px;">
                                                    <!-- <label for="amount"><?= $_SESSION["symbol"] ?></label> -->
                                                    <input type="text" class="form-control text-start fw-semibold" autocomplete="off" name="amount"
                                                        id="amount" placeholder="xxxxxxxx">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="mt-4">
                                            <span class="text-req-card">Price</span>
                                            <div class="row d-flex align-items-center w-100">
                                                <div class="form-req-card d-flex align-items-center my-2 col-12 col-md-6 col-lg-12 ms-2" style="height: 70px;">
                                                    <!-- <label for="confirmamount"><?= $_SESSION["symbol"] ?></label> -->
                                                    <input type="text" class="form-control money-input text-start fw-bold" autocomplete="off" name="amount"
                                                        id="confirmamount" placeholder="15 <?= $_SESSION["currency"]?>">
                                                </div>
                                                <span class="col-md-4 col-lg-12 mx-0 mt-3 mt-md-0 mx-md-5 mx-lg-0 text-req-card">Annual cost</span>
                                            </div>
                                        </div>
            
                                        <div class="text-start d-flex justify-content-center mt-5 mb-4">
                                            <a href="<?= base_url(); ?>homepage/requestcard/virtual"
                                                class="btn-card-confirm d-inline-flex align-items-center justify-content-center align-self-center">
                                                <span class="f-lexend">Next</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }?>
    
                    <?php if($requestcard == 'virtual'){?>
                        <div class="row my-4">
                            <div class="col-12">
                                <div class="text-topup-card mt-5 mb-3">
                                    <h1 class="text-blue-freedy fw-bolder f-poppins text-center">
                                        Card
                                    </h1>
                                </div>
                                <a href="<?= base_url(); ?>homepage/requestcard/activenow" class="col-12 mx-auto card-topup d-flex align-items-center justify-content-center">
                                    <span class="text-blue-freed fw-bold text-center f-lexend fw-bold">
                                    Request Virtual Card
                                    </span>
                                </a>
                                <a href="" class="col-12 mx-auto card-topup d-flex align-items-center justify-content-center mt-4">
                                    <span class="text-blue-freed fw-bold text-center f-lexend fw-bold">
                                    Request Physical Card 
                                    <br>
                                    (COMING SOON)
                                    </span>
                                </a>
                            </div>
                        </div>
                    <?php }?>
    
                    <?php if($requestcard == 'activenow'){?>
                        <div class="row my-4 card-req-activation">
                            <div class="col-12">
                                <form action="POST">
                                    <div class=" row d-flex mt-5 mx-0 mx-md-2">
                                        <h3 class="col-12  mx-auto text-start f-ubuntu">
                                            THE MOBILE NUMBER YOU WILL ENTER WILL BE USED JUST FOR OTP NUMBER AUTHENTICATION
                                        </h3>
                                    </div>
                                    <div class="row my-4 mx-auto d-flex justify-content-center mx-md-2">
                                        <div class="col-4">        
                                            <select class="custom-select nohp-select">
                                                <option selected>
                                                    +62
                                                </option>
                                                <option>+ 63</option>
                                                <option>+ 11</option>
                                                <option>+ 9</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input class="nohp-select nohp-input" type="number" placeholder="*Mobile number">
                                        </div>
                                    </div>
                                    <div class="row d-flex  mx-0 mx-md-2">
                                        <h4 class="text-start col-12 mx-auto f-ubuntu">
                                            The number will be kept encrypted and it will not be linked to a card or to a person and neither the company won’t be able to provide it to anyone, either under request.
                                        </h4>  
                                    </div> 
                                    <div class="row my-5 mx-auto d-flex justify-content-center">
                                        <div class="col-12 my-2">
                                            <input class="nohp-select nohp-input" type="text" placeholder="*Create a password 3D Secure">
                                        </div>
                                        <div class="col-12 my-2 mt-4">
                                            <input class="nohp-select nohp-input" type="text" placeholder="*Confirm 3D Secure password ">
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-center mt-5 mb-4">
                                        <a href="<?= base_url(); ?>homepage/requestcard/detailcard"
                                            class="btn-card-confirm d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span class="f-lexend">Active Now</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
