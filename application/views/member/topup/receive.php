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
                        <div class="receive-title d-flex flex-row justify-content-center align-items-center">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.0313 23.6979H16.2897C14.3501 23.6979 12.7605 22.0646 12.7605 20.0521C12.7605 19.4541 13.2563 18.9583 13.8542 18.9583C14.4522 18.9583 14.948 19.4541 14.948 20.0521C14.948 20.8541 15.5459 21.5104 16.2897 21.5104H19.0313C19.6001 21.5104 20.0522 21 20.0522 20.3729C20.0522 19.5854 19.8334 19.4687 19.3376 19.2937L14.948 17.7625C14.0147 17.4416 12.7605 16.7562 12.7605 14.6125C12.7605 12.7896 14.2043 11.2875 15.9688 11.2875H18.7105C20.6501 11.2875 22.2397 12.9208 22.2397 14.9333C22.2397 15.5312 21.7438 16.0271 21.1459 16.0271C20.548 16.0271 20.0522 15.5312 20.0522 14.9333C20.0522 14.1312 19.4542 13.475 18.7105 13.475H15.9688C15.4001 13.475 14.948 13.9854 14.948 14.6125C14.948 15.4 15.1667 15.5166 15.6626 15.6916L20.0522 17.2229C20.9855 17.5437 22.2397 18.2291 22.2397 20.3729C22.2397 22.2104 20.7959 23.6979 19.0313 23.6979Z"
                                    fill="#0078F0" />
                                <path
                                    d="M17.5 25.1562C16.9021 25.1562 16.4062 24.6604 16.4062 24.0625V10.9375C16.4062 10.3396 16.9021 9.84375 17.5 9.84375C18.0979 9.84375 18.5938 10.3396 18.5938 10.9375V24.0625C18.5938 24.6604 18.0979 25.1562 17.5 25.1562Z"
                                    fill="#0078F0" />
                                <path
                                    d="M17.5001 33.1771C8.85216 33.1771 1.823 26.1479 1.823 17.5C1.823 8.85209 8.85216 1.82292 17.5001 1.82292C18.098 1.82292 18.5938 2.31876 18.5938 2.91667C18.5938 3.51459 18.098 4.01042 17.5001 4.01042C10.0626 4.01042 4.0105 10.0625 4.0105 17.5C4.0105 24.9375 10.0626 30.9896 17.5001 30.9896C24.9376 30.9896 30.9897 24.9375 30.9897 17.5C30.9897 16.9021 31.4855 16.4063 32.0834 16.4063C32.6813 16.4063 33.1772 16.9021 33.1772 17.5C33.1772 26.1479 26.148 33.1771 17.5001 33.1771Z"
                                    fill="#0078F0" />
                                <path
                                    d="M30.6251 11.3021H24.7917C24.1938 11.3021 23.698 10.8062 23.698 10.2083V4.375C23.698 3.77708 24.1938 3.28125 24.7917 3.28125C25.3897 3.28125 25.8855 3.77708 25.8855 4.375V9.11458H30.6251C31.223 9.11458 31.7188 9.61042 31.7188 10.2083C31.7188 10.8062 31.223 11.3021 30.6251 11.3021Z"
                                    fill="#0078F0" />
                                <path
                                    d="M24.7915 11.3021C24.5144 11.3021 24.2374 11.2 24.0186 10.9813C23.5957 10.5583 23.5957 9.85834 24.0186 9.43542L31.3103 2.14376C31.7332 1.72084 32.4332 1.72084 32.8561 2.14376C33.279 2.56667 33.279 3.26667 32.8561 3.68959L25.5644 10.9813C25.3457 11.2 25.0686 11.3021 24.7915 11.3021Z"
                                    fill="#0078F0" />
                            </svg>
                            <span class="ms-2">Add/receive funds</span>
                        </div>
                        <div class="col-12 receive-note d-flex justify-content-center text-start my-4">
                            <?php
                            if (
                                ($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "AUD") ||
                                ($_SESSION["currency"] == "NZD") ||
                                ($_SESSION["currency"] == "CAD") ||
                                ($_SESSION["currency"] == "HUF") ||
                                ($_SESSION["currency"] == "SGD") ||
                                ($_SESSION["currency"] == "TRY") ||
                                ($_SESSION["currency"] == "GBP") ||
                                ($_SESSION["currency"] == "RON")
                            ) { ?>
                            <button type="button" class="receive-attention d-flex flex-column text-center col-12 p-3"
                                data-bs-toggle="modal" data-bs-target="#attention">
                                <span class="mb-2 fw-bold title">ATTENTION!</span>
                                <span class="mb-2 middle">Before make any topup</span>
                                <span class="bottom">read carefully how does it work</span>
                            </button>
                            <?php } ?>
                        </div>
                        <div class="col-12 recive-bank  d-flex align-items-center flex-column text-center">
                            <?php
                            if (
                                ($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "AUD") ||
                                ($_SESSION["currency"] == "NZD") ||
                                ($_SESSION["currency"] == "CAD") ||
                                ($_SESSION["currency"] == "HUF") ||
                                ($_SESSION["currency"] == "SGD") ||
                                ($_SESSION["currency"] == "TRY") ||
                                ($_SESSION["currency"] == "GBP") ||
                                ($_SESSION["currency"] == "RON")
                            ) {
                                if ($_SESSION["currency"] == "EUR") { ?>
                            <a href="<?= base_url() ?>receive/localbank" class="col-8 py-3 my-2">National SEPA
                                Circuit</a>
                            <?php } elseif ($_SESSION["currency"] == "USD") { ?>
                            <a href="<?= base_url() ?>receive/localbank" class="col-8 py-3 my-2">USA bank circuit</a>
                            <?php } else { ?>
                            <a href="<?= base_url() ?>receive/localbank" class="col-8 py-3 my-2">Local bank</a>
                            <?php }
                            } else { ?>
                            <div class="receive-note">
                                <span class="fw-bold title">To top up this currency you have to covert from another
                                    currency
                                    in <b>SWAP</b>
                                    section</span><br>
                                <hr>
                                <span>Or make an international bank transfer toward EURO or
                                    DOLLAR</span>
                                <hr>
                            </div>

                            <a href="<?= base_url() ?>receive/interbank?currency=USD" class="col-8 py-3 my-2">USD
                                International</a>
                            <a href="<?= base_url() ?>receive/interbank?currency=EUR" class="col-8 py-3 my-2">EUR
                                International</a>
                            <div class="receive-note">
                                <span>
                                    <b>ATTENTION:<br>
                                        UPON THE ARRIVAL OF THE BANK TRANSFER, THE SENT CURRENCY WILL BE CONVERTED INTO
                                        THE
                                        CHOSEN DESTINATION CURRENCY</b>
                                </span>
                            </div>

                            <?php } ?>
                            <?php
                            if (($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "GBP")
                            ) {
                                if ($_SESSION["currency"] == "EUR") { ?>
                            <a href="<?= base_url() ?>receive/interbank" class="col-8 py-3 my-2">International
                                BIC/Swift</a>
                            <?php } else { ?>
                            <a href="<?= base_url() ?>receive/interbank" class="col-8 py-3 my-2">International Swift</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal attantion -->
<div class="modal fade" id="attention" tabindex="-1" aria-labelledby="attention" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content attention-modal p-2">
            <div class="modal-header border-0">
                <h1 class="modal-title fw-bold">How to topup</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        In order to topup your own wallet or receive money through bank transfer, <br>
                        copy or share the bank details written in ''add/receive funds'' in National or International and
                        as a <b>Causal</b> is <b>Mandatory</b> copy as example bellow :<br>
                        <img src="<?= base_url() ?>assets/img/attantion-1.png" alt="">
                    </li>

                    <li>
                        To increase and improve the privacy level, receiving and sending money<br>
                        will be handled by TracklessMoney payment gateway<br>
                        The receiving banking data of each currency will be the same for all users, <b
                            class="text-lowercase">THE ONLY DATA THAT
                            WILL CHANGE WILL BE THE</b> "CAUSAL" <b class="text-lowercase">WHICH WILL IDENTIFY THE
                            RECEIVER USER</b>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>