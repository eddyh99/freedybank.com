<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <?php $this->load->view("member/header"); ?>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-lg-10 d-flex pt-2 pt-md-4 pb-5 py-lg-5">
                <div class="currency-selection me-auto">
                    <select name="activecurrency" id="activecurrency">
                        <option value="USD" <?php echo ($_SESSION["currency"]=="USD") ? "selected":""?>>USD</option>
                        <option value="EUR" <?php echo ($_SESSION["currency"]=="EUR") ? "selected":""?>>EUR</option>
                        <?php foreach ($currency as $dt){
                                if ($dt->status=='active'){ 
                                    if (($dt->currency!="USD") && ($dt->currency!="EUR")){
                        ?>
                            <option value="<?=$dt->currency?>" <?php echo ($_SESSION["currency"]==$dt->currency) ? "selected":""?>><?=$dt->currency?></option>
                        <?php       }
                                }
                              }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <div class="text-end">
                        <a href="<?= base_url() ?>homepage/setting_currency"
                            class="text-center setting-currency mb-1 d-inline-block">
                            <span>Select other curruncies</span>
                            <svg width="29" height="32" viewBox="0 0 29 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.87083 23.9166C1.25435 22.7592 0.775133 21.5218 0.44458 20.2338C1.16399 19.8365 1.76816 19.231 2.19025 18.484C2.61234 17.7371 2.8359 16.878 2.83621 16.0017C2.83651 15.1254 2.61354 14.2661 2.19196 13.5189C1.77038 12.7716 1.16663 12.1656 0.447497 11.7677C1.10672 9.17974 2.36189 6.81656 4.09479 4.9008C4.77159 5.37853 5.55694 5.64364 6.36392 5.66678C7.17091 5.68993 7.96805 5.47021 8.66714 5.03195C9.36624 4.59368 9.94001 3.95396 10.325 3.18358C10.7099 2.41319 10.8911 1.54219 10.8483 0.666964C13.2431 -0.0049679 15.756 -0.00387797 18.1502 0.670131C18.1078 1.54534 18.2893 2.41621 18.6746 3.18638C19.0598 3.95654 19.6339 4.59596 20.3331 5.03389C21.0323 5.47182 21.8295 5.69118 22.6364 5.66769C23.4434 5.6442 24.2286 5.37878 24.9052 4.9008C25.7496 5.83496 26.4992 6.89738 27.1292 8.0833C27.7606 9.26921 28.2331 10.5058 28.5554 11.7661C27.836 12.1634 27.2318 12.769 26.8097 13.5159C26.3877 14.2628 26.1641 15.1219 26.1638 15.9982C26.1635 16.8745 26.3865 17.7338 26.808 18.481C27.2296 19.2283 27.8334 19.8344 28.5525 20.2322C27.8933 22.8202 26.6381 25.1834 24.9052 27.0991C24.2284 26.6214 23.4431 26.3563 22.6361 26.3331C21.8291 26.31 21.0319 26.5297 20.3328 26.968C19.6338 27.4062 19.06 28.046 18.675 28.8164C18.2901 29.5867 18.1089 30.4577 18.1517 31.333C15.7569 32.0049 13.244 32.0038 10.8498 31.3298C10.8921 30.4546 10.7107 29.5837 10.3254 28.8136C9.94014 28.0434 9.36614 27.404 8.66691 26.966C7.96768 26.5281 7.17049 26.3088 6.36356 26.3322C5.55662 26.3557 4.7714 26.6212 4.09479 27.0991C3.2329 26.1443 2.48566 25.075 1.87083 23.9166ZM10.125 24.227C11.679 25.2001 12.8475 26.7619 13.4062 28.6128C14.134 28.6872 14.8646 28.6888 15.5923 28.6144C16.1514 26.7632 17.3204 25.2014 18.875 24.2285C20.4284 23.2527 22.2591 22.9341 24.0156 23.334C24.4385 22.688 24.8031 21.9992 25.1065 21.2788C23.9098 19.8276 23.2487 17.9478 23.25 16C23.25 14.005 23.9354 12.1414 25.1065 10.7211C24.801 10.0009 24.4348 9.31297 24.0127 8.66597C22.2573 9.06545 20.4278 8.74747 18.875 7.77296C17.321 6.7998 16.1525 5.23802 15.5937 3.38713C14.866 3.31271 14.1354 3.31113 13.4077 3.38555C12.8486 5.2367 11.6796 6.79852 10.125 7.77138C8.57155 8.74721 6.7409 9.06579 4.98437 8.66597C4.56228 9.31242 4.19706 10.0005 3.89354 10.7211C5.0902 12.1724 5.75129 14.0521 5.75 16C5.75 17.995 5.06458 19.8585 3.89354 21.2788C4.19902 21.999 4.56516 22.687 4.98729 23.334C6.74271 22.9345 8.57217 23.2525 10.125 24.227ZM14.5 20.75C13.3397 20.75 12.2269 20.2495 11.4064 19.3587C10.5859 18.4679 10.125 17.2597 10.125 16C10.125 14.7402 10.5859 13.532 11.4064 12.6412C12.2269 11.7504 13.3397 11.25 14.5 11.25C15.6603 11.25 16.7731 11.7504 17.5936 12.6412C18.4141 13.532 18.875 14.7402 18.875 16C18.875 17.2597 18.4141 18.4679 17.5936 19.3587C16.7731 20.2495 15.6603 20.75 14.5 20.75ZM14.5 17.5833C14.8868 17.5833 15.2577 17.4165 15.5312 17.1196C15.8047 16.8226 15.9583 16.4199 15.9583 16C15.9583 15.58 15.8047 15.1773 15.5312 14.8804C15.2577 14.5834 14.8868 14.4166 14.5 14.4166C14.1132 14.4166 13.7423 14.5834 13.4688 14.8804C13.1953 15.1773 13.0417 15.58 13.0417 16C13.0417 16.4199 13.1953 16.8226 13.4688 17.1196C13.7423 17.4165 14.1132 17.5833 14.5 17.5833Z"
                                    fill="#0078F0" />
                            </svg>
                        </a>
                    </div>
                    <div class="mt-3 saldo-freedy d-flex flex-row">
                        <label class="ms-auto me-2"><?=$_SESSION["symbol"]?>
                            <input type="text" value="999,87" id="saldo" readonly>
                        </label>
                        <i class="fa fa-eye" toggle="#saldo" id="togglesaldo" style="cursor: pointer"></i>
                    </div>
                    <div class="text-end">
                        <span class="balance-text">Balance available</span>
                    </div>
                </div>
            </div>
            <div class="col-11 col-lg-10 transaction pt-3 pt-lg-5">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="col-8 search d-flex flex-row me-lg-5">
                        <input type="search" class="w-100 me-auto" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <div class="app-calendar">
                        <a href="">
                            <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="7.125" y="14.25" width="42.75" height="35.625" rx="2" stroke="#33363F"
                                    stroke-width="2" />
                                <path
                                    d="M7.125 18.25C7.125 16.3644 7.125 15.4216 7.71079 14.8358C8.29657 14.25 9.23938 14.25 11.125 14.25H45.875C47.7606 14.25 48.7034 14.25 49.2892 14.8358C49.875 15.4216 49.875 16.3644 49.875 18.25V23.75H7.125V18.25Z"
                                    fill="#33363F" />
                                <path d="M16.625 7.125L16.625 14.25" stroke="#33363F" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M40.375 7.125L40.375 14.25" stroke="#33363F" stroke-width="2"
                                    stroke-linecap="round" />
                                <rect x="16.625" y="28.5" width="9.5" height="4.75" rx="0.5" fill="#33363F" />
                                <rect x="16.625" y="38" width="9.5" height="4.75" rx="0.5" fill="#33363F" />
                                <rect x="30.875" y="28.5" width="9.5" height="4.75" rx="0.5" fill="#33363F" />
                                <rect x="30.875" y="38" width="9.5" height="4.75" rx="0.5" fill="#33363F" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-10 mt-5">
                <div class="col-12 mb-2">
                    <span class="text-wt">Today</span>
                </div>
                <div class="col-12 box-transaction overflow-auto">
                    <div class="list-transaction d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/img/freedy/withdraw.png" alt="tc">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Withdraw</h4>
                            <span>08:58 PM</span>
                        </div>
                    </div>
                    <div class="list-transaction d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/img/freedy/topup.png" alt="tc">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Topup</h4>
                            <span>08:58 PM</span>
                        </div>
                    </div>
                    <div class="list-transaction d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/img/freedy/withdraw.png" alt="tc">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Withdraw</h4>
                            <span>08:58 PM</span>
                        </div>
                    </div>
                    <div class="list-transaction d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/img/freedy/withdraw.png" alt="tc">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Withdraw</h4>
                            <span>08:58 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>