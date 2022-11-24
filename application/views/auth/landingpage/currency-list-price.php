<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>link/lern_transparency">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-10 my-5 mx-auto">
                <div class="px-0 px-md-3">
                    <h4 class="f-lexend text-start my-3 text-blue-freedy">
                        Account Service Fees:
                    </h4>
                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Account with IBAN</span>
                            <span class="w-50 text-end text-blue-freedy">Free of charge</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Monthly fee</span>
                            <span class="w-50 text-end text-blue-freedy">Free of charge</span>
                        </li>
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Annual fee</span>
                            <span class="w-50 text-end text-blue-freedy">Free of charge</span>
                        </li>
                    </ul>

                    <h4 class="f-lexend text-start my-3 text-blue-freedy">
                        Bank transfers
                    </h4>
                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Receiving SEPA</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->topup ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Receiving International</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->topup ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Send Wallet to Wallet</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->wallet_sender ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Receiving Wallet to Wallet</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->wallet_receiver ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">National Transfer</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->walletbank_circuit ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">International Transfer</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->walletbank_outside ?>
                                <?= $currency->symbol ?></span>
                        </li>
                        <li
                            class="list-group-item list-group-item-grey-freedy text-dark d-flex justify-content-between align-items-center">
                            <span class="w-50 me-auto text-start">Swap Currencies</span>
                            <span class="w-50 text-end text-blue-freedy"><?= $price->swap ?>
                                <?= $currency->symbol ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->