<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <div class="row">
            <div class="col-12 col-lg-2 text-center mb-3 mb-lg-0">
                <img src="<?= base_url(); ?>assets/img/freedy/logo-app.png" alt="" class="app-logo">
            </div>
            <div class="col-12 col-lg-8 d-flex justify-content-center">
                &nbsp;
            </div>
            <div class="d-none d-lg-grid col-lg-2">&nbsp;</div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-12 settings-currency col-sm-8 col-lg-8 d-flex pt-2 pt-md-4 pb-5 py-lg-5">
                <div class="col-12 back-btn-transaction my-4 text-start">
                    <a href="<?= base_url() ?>homepage">
                        <img src="<?= base_url() ?>assets/img/freedy/back.png" alt="">
                    </a>
                    <div class="col-12 px-0 px-lg-5 check-currency">
                            <div class="d-flex flex-row align-items-center form-check form-switch my-2">
                                <label class="form-check-label w-50 me-2" for="usdollar">US DOLLAR</label>
                                <input class="form-check-input pill-currency" type="checkbox" id="usdollar" checked
                                    disabled>
                            </div>
                            <div class="d-flex flex-row align-items-center form-check form-switch my-2">
                                <label class="form-check-label w-50 me-2" for="euro">EURO</label>
                                <input class="form-check-input pill-currency" type="checkbox" id="euro" checked disabled>
                            </div>
                            <?php 
                            foreach($currency as $dt){
                                if ($dt->currency!="USD" && $dt->currency!="EUR"){
                            ?>
                            <div class="d-flex flex-row align-items-center form-check form-switch my-2">
                                <label class="form-check-label w-50 me-2" for="aeddirham"><?=$dt->name?></label>
                                <input class="form-check-input pill-currency" type="checkbox" id="<?=$dt->currency?>" <?php echo ($dt->status=='active') ? "checked":"" ?> onclick="enablecurrency('<?=$dt->currency?>','<?php echo ($dt->status=='active')?"disabled":"active"?>')">
                            </div>
                            <?php  
                                  }}
                            ?>
                            <div class="col-12 mt-5 text-end">
                                <a href="<?=base_url()."homepage"?>" class="btn btn-currency">Confirm</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>