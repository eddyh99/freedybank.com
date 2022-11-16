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
                            <a class="d-flex flex-row justify-content-center align-items-center py-2 my-3 border-0">
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
                            <a href="<?= base_url() ?>receive"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0313 23.6979H16.2897C14.3501 23.6979 12.7605 22.0646 12.7605 20.0521C12.7605 19.4542 13.2563 18.9583 13.8542 18.9583C14.4522 18.9583 14.948 19.4542 14.948 20.0521C14.948 20.8541 15.5459 21.5104 16.2897 21.5104H19.0313C19.6001 21.5104 20.0522 21 20.0522 20.3729C20.0522 19.5854 19.8334 19.4687 19.3376 19.2937L14.948 17.7625C14.0147 17.4416 12.7605 16.7562 12.7605 14.6125C12.7605 12.7896 14.2043 11.2875 15.9688 11.2875H18.7105C20.6501 11.2875 22.2397 12.9208 22.2397 14.9333C22.2397 15.5312 21.7438 16.0271 21.1459 16.0271C20.548 16.0271 20.0522 15.5312 20.0522 14.9333C20.0522 14.1312 19.4542 13.475 18.7105 13.475H15.9688C15.4001 13.475 14.948 13.9854 14.948 14.6125C14.948 15.4 15.1667 15.5166 15.6626 15.6916L20.0522 17.2229C20.9855 17.5437 22.2397 18.2292 22.2397 20.3729C22.2397 22.2104 20.7959 23.6979 19.0313 23.6979Z"
                                        fill="" />
                                    <path
                                        d="M17.5 25.1562C16.9021 25.1562 16.4062 24.6604 16.4062 24.0625V10.9375C16.4062 10.3396 16.9021 9.84375 17.5 9.84375C18.0979 9.84375 18.5938 10.3396 18.5938 10.9375V24.0625C18.5938 24.6604 18.0979 25.1562 17.5 25.1562Z"
                                        fill="" />
                                    <path
                                        d="M17.5001 33.1771C8.85216 33.1771 1.823 26.1479 1.823 17.5C1.823 8.85209 8.85216 1.82292 17.5001 1.82292C18.098 1.82292 18.5938 2.31876 18.5938 2.91667C18.5938 3.51459 18.098 4.01042 17.5001 4.01042C10.0626 4.01042 4.0105 10.0625 4.0105 17.5C4.0105 24.9375 10.0626 30.9896 17.5001 30.9896C24.9376 30.9896 30.9897 24.9375 30.9897 17.5C30.9897 16.9021 31.4855 16.4063 32.0834 16.4063C32.6813 16.4063 33.1772 16.9021 33.1772 17.5C33.1772 26.1479 26.148 33.1771 17.5001 33.1771Z"
                                        fill="" />
                                    <path
                                        d="M30.6251 11.3021H24.7917C24.1938 11.3021 23.698 10.8062 23.698 10.2083V4.375C23.698 3.77708 24.1938 3.28125 24.7917 3.28125C25.3897 3.28125 25.8855 3.77708 25.8855 4.375V9.11458H30.6251C31.223 9.11458 31.7188 9.61042 31.7188 10.2083C31.7188 10.8062 31.223 11.3021 30.6251 11.3021Z"
                                        fill="" />
                                    <path
                                        d="M24.7915 11.3021C24.5144 11.3021 24.2374 11.2 24.0186 10.9813C23.5957 10.5583 23.5957 9.85834 24.0186 9.43542L31.3103 2.14376C31.7332 1.72084 32.4332 1.72084 32.8561 2.14376C33.279 2.56667 33.279 3.26667 32.8561 3.68959L25.5644 10.9813C25.3457 11.2 25.0686 11.3021 24.7915 11.3021Z"
                                        fill="" />
                                </svg>

                                <span class="ms-2">Add/receive funds</span>
                            </a>
                            <a href="<?= base_url() ?>wallet"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue special">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.75 6.66666H16.25C10.9467 6.66666 8.29505 6.66666 6.64752 8.34033C5 10.014 5 12.7077 5 18.0952V21.9048C5 27.2922 5 29.986 6.64752 31.6596C8.29505 33.3333 10.9467 33.3333 16.25 33.3333H23.75C29.0533 33.3333 31.705 33.3333 33.3525 31.6596C35 29.986 35 27.2922 35 21.9048V18.0952C35 12.7077 35 10.014 33.3525 8.34033C31.705 6.66666 29.0533 6.66666 23.75 6.66666Z"
                                        stroke="" stroke-width="3" />
                                    <path d="M11.6667 13.3333H16.6667" stroke="" stroke-width="3"
                                        stroke-linecap="round" />
                                    <path
                                        d="M25 24.6667V22C25 21.0572 25 20.5858 25.2929 20.2929C25.5858 20 26.0572 20 27 20H33C33.9428 20 34.4142 20 34.7071 20.2929C35 20.5858 35 21.0572 35 22V24.6667C35 25.6095 35 26.0809 34.7071 26.3738C34.4142 26.6667 33.9428 26.6667 33 26.6667H27C26.0572 26.6667 25.5858 26.6667 25.2929 26.3738C25 26.0809 25 25.6095 25 24.6667Z"
                                        stroke="" stroke-width="3" />
                                </svg>

                                <span class="ms-2">Wallet to wallet</span>
                            </a>
                            <a href="<?= base_url() ?>swap"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16675 14.3333L6.10609 13.2727L5.04543 14.3333L6.10609 15.394L7.16675 14.3333ZM34.3334 17.9167C34.3334 18.7451 35.005 19.4167 35.8334 19.4167C36.6618 19.4167 37.3334 18.7451 37.3334 17.9167L34.3334 17.9167ZM13.2728 6.106L6.10609 13.2727L8.22741 15.394L15.3941 8.22732L13.2728 6.106ZM6.10609 15.394L13.2728 22.5607L15.3941 20.4393L8.22741 13.2727L6.10609 15.394ZM7.16675 15.8333L33.8334 15.8333L33.8334 12.8333L7.16675 12.8333L7.16675 15.8333ZM34.3334 16.3333L34.3334 17.9167L37.3334 17.9167L37.3334 16.3333L34.3334 16.3333ZM33.8334 15.8333C34.1096 15.8333 34.3334 16.0572 34.3334 16.3333L37.3334 16.3333C37.3334 14.4003 35.7664 12.8333 33.8334 12.8333L33.8334 15.8333Z"
                                        fill="" />
                                    <path
                                        d="M35.8333 28.6667L36.8939 27.606L37.9546 28.6667L36.8939 29.7273L35.8333 28.6667ZM7.37492 28.6667L7.37492 27.1667L7.37492 28.6667ZM3.87492 25.0833C3.87492 24.2549 4.54649 23.5833 5.37492 23.5833C6.20334 23.5833 6.87492 24.2549 6.87492 25.0833L3.87492 25.0833ZM29.7272 20.4393L36.8939 27.606L34.7726 29.7273L27.6059 22.5607L29.7272 20.4393ZM36.8939 29.7273L29.7272 36.894L27.6059 34.7727L34.7726 27.606L36.8939 29.7273ZM35.8333 30.1667L7.37492 30.1667L7.37492 27.1667L35.8333 27.1667L35.8333 30.1667ZM3.87492 26.6667L3.87492 25.0833L6.87492 25.0833L6.87492 26.6667L3.87492 26.6667ZM7.37492 30.1667C5.44192 30.1667 3.87492 28.5997 3.87492 26.6667L6.87492 26.6667C6.87492 26.9428 7.09878 27.1667 7.37492 27.1667L7.37492 30.1667Z"
                                        fill="" />
                                </svg>

                                <span class="ms-2">Swap</span>
                            </a>
                            <a href="<?= base_url() ?>bank"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue">
                                <svg width="39" height="36" viewBox="0 0 39 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.875 31.5H34.125M9.75 27V15M16.25 27V15M22.75 27V15M29.25 27V15M32.5 10.5L20.189 3.39749C19.939 3.25329 19.8141 3.18119 19.68 3.15307C19.5615 3.12822 19.4385 3.12822 19.32 3.15307C19.1859 3.18119 19.061 3.25329 18.811 3.39749L6.5 10.5H32.5Z"
                                        stroke="" stroke-width="2.7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="ms-2">Wallet to bank</span>
                            </a>
                            <a href="<?= base_url() ?>soon"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue special">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5.5" y="11" width="33" height="23.8333" rx="2" stroke=""
                                        stroke-width="3" />
                                    <path d="M12.8333 27.5H12.8511" stroke="" stroke-width="3" stroke-linecap="round" />
                                    <path d="M7.33325 20.1667H38.4999" stroke="" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>

                                <span class="ms-2">Wallet to card</span>
                            </a>
                            <a href="<?= base_url() ?>search"
                                class="d-flex flex-row justify-content-center align-items-center py-2 my-3 menus-blue">
                                <span class="">History</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>