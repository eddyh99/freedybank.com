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
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.75 6.66666H16.25C10.9467 6.66666 8.29505 6.66666 6.64752 8.34033C5 10.014 5 12.7077 5 18.0952V21.9048C5 27.2922 5 29.986 6.64752 31.6596C8.29505 33.3333 10.9467 33.3333 16.25 33.3333H23.75C29.0533 33.3333 31.705 33.3333 33.3525 31.6596C35 29.986 35 27.2922 35 21.9048V18.0952C35 12.7077 35 10.014 33.3525 8.34033C31.705 6.66666 29.0533 6.66666 23.75 6.66666Z"
                                    stroke="#0078F0" stroke-width="3" />
                                <path d="M11.6666 13.3333H16.6666" stroke="#0078F0" stroke-width="3"
                                    stroke-linecap="round" />
                                <path
                                    d="M25 24.6667V22C25 21.0572 25 20.5858 25.2929 20.2929C25.5858 20 26.0572 20 27 20H33C33.9428 20 34.4142 20 34.7071 20.2929C35 20.5858 35 21.0572 35 22V24.6667C35 25.6095 35 26.0809 34.7071 26.3738C34.4142 26.6667 33.9428 26.6667 33 26.6667H27C26.0572 26.6667 25.5858 26.6667 25.2929 26.3738C25 26.0809 25 25.6095 25 24.6667Z"
                                    stroke="#0078F0" stroke-width="3" />
                            </svg>

                            <span class="ms-2">Wallet to wallet</span>
                        </div>
                        <div class="col-12 recive-bank  d-flex align-items-center flex-column text-center">
                            <a href="<?= base_url() ?>wallet/send" class="col-8 py-3 my-2">Send</a>
                            <a href="<?= base_url() ?>wallet/receive" class="col-8 py-3 my-2">Receive</a>
                            <a href="<?= base_url() ?>wallet/request" class="col-8 py-3 my-2">Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>