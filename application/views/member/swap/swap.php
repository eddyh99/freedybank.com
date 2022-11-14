<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <?php $this->load->view("member/header"); ?>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-11 col-lg-10 transaction pt-3 pt-lg-5">
                <span class="info-tc">Swap</span>
                <div class="col-12 info-saldo-wallet d-flex justify-content-center mt-3">
                    <span class="me-3">Your Balance</span>
                    <span class="me-3 text-blue-freedy">:</span>
                    <span class="text-blue-freedy"><?=$_SESSION["symbol"]?> <?=number_format($_SESSION["balance"],2)?></span>
                </div>
                <div class="col-12 d-flex justify-content-center mt-5">
                    <form method="POST" id="swapconfirm" action="<?=base_url()?>swap/confirm" class="swap text-center">
                        <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" id="amountget" name="amountget">
                        <input type="hidden" id="quoteid" name="quoteid">
                        <div class="swap-form-icon d-flex flex-row align-items-center my-4">
                            <label for=""><?=$_SESSION["symbol"]?></label>
                            <input type="text" class="form-control text-end" name="amount" id="amount"
                                placeholder="0.00"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>

                        <div class="swap-selection d-flex flex-row align-items-center justify-content-center">
                            <div class="me-3">
                                <svg width="68" height="68" viewBox="0 0 68 68" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M51.6508 35.3681C50.9734 34.704 50.9602 33.6017 51.6375 32.9243L57.9062 26.5626H28.0234C27.0672 26.5626 26.2969 25.7923 26.2969 24.836C26.2969 23.8798 27.0672 23.1095 28.0234 23.1095H57.893L51.6242 16.7478C50.9602 16.0704 50.9602 14.9814 51.6375 14.304C52.3148 13.64 53.4039 13.64 54.0813 14.3173L63.2453 23.6142C63.3914 23.7735 63.5242 23.9462 63.6039 24.1587C63.6969 24.3712 63.7367 24.597 63.7367 24.8228C63.7367 25.2743 63.5641 25.6993 63.2453 26.0314L54.0813 35.3282C53.4172 36.0189 52.3281 36.0321 51.6508 35.3681Z"
                                        fill="#0078F0" />
                                    <path
                                        d="M16.3491 53.6962C17.0265 53.0321 17.0397 51.9298 16.3624 51.2525L10.1069 44.8907H39.9765C40.9327 44.8907 41.703 44.1204 41.703 43.1642C41.703 42.2079 40.9327 41.4376 39.9765 41.4376H10.1069L16.3757 35.0759C17.0397 34.3985 17.0397 33.3095 16.3624 32.6321C15.6851 31.9681 14.596 31.9681 13.9187 32.6454L4.75459 41.9423C4.6085 42.1017 4.47568 42.2743 4.396 42.4868C4.30303 42.6993 4.26318 42.9251 4.26318 43.1509C4.26318 43.6025 4.43584 44.0275 4.75459 44.3595L13.9187 53.6564C14.5827 54.347 15.6718 54.3603 16.3491 53.6962Z"
                                        fill="#0078F0" />
                                </svg>
                            </div>
                            <div class="col-4">
                                <select name="toswap" id="toswap" class="form-select">
                                    <?php if ($_SESSION["currency"]!="USD"){?>
                                        <option data-currency="&dollar;" value="USD">USD</option>
                                    <?php }?>
                                    <?php if ($_SESSION["currency"]!="EUR"){?>
                                        <option data-currency="&euro;" value="EUR">EUR</option>
                                    <?php }?>
                                    <?php foreach ($currency as $dt){
                                            if ($dt->status=='active'){ 
                                                if (($dt->currency!="USD") && ($dt->currency!="EUR") && ($_SESSION["currency"]!=$dt->currency)){
                                    ?>
                                                <option data-currency="<?=$dt->symbol?>" value="<?=$dt->currency?>" <?php echo ($_SESSION["currency"]==$dt->currency) ? "selected":""?>><?=$dt->currency?></option>
                                    <?php       }
                                            }
                                          }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="swap-form-icon d-flex flex-row align-items-center my-4">
                            <label for=""><span id="tocurrency"></span></label>
                            <input type="text" class="form-control text-end" name="receive" id="receive"
                                placeholder="0.00"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly>
                        </div>
                        <button class="btn btn-next">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>