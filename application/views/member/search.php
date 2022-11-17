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
                            <span class="ms-2">History</span>
                        </div>
                        <div class="col-12 recive-bank  d-flex align-items-center flex-column">
                            <div class="col-12 transaction border-0">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <div class="col-12 search d-flex flex-row">
                                        <input type="search" class="w-100 me-auto" placeholder="Search"
                                            aria-label="Search" aria-describedby="search-addon" />
                                        <span class="" id="search-addon">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="app-calendar mb-2">
                                    <form id="frmhistory">
                                        <input type="hidden" id="token"
                                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <input type="text" name="tgl" id="tgl" readonly class="border-0"
                                            style="cursor: pointer;">
                                    </form>
                                </div>
                                <div class="col-12 box-transaction overflow-auto">
                                    <div id="history"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>