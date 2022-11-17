<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <?php $this->load->view("member/header"); ?>

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-11 col-lg-10 transaction pt-3 pt-lg-5">
                <span class="info-tc">Transfer wallet to wallet</span>
                <div class="col-12 info-saldo-wallet d-flex justify-content-center mt-3">
                    <span class="me-3">Your Balance</span>
                    <span class="me-3 text-blue-freedy">:</span>
                    <span class="text-blue-freedy"><?=$_SESSION["symbol"]?> <?=number_format($_SESSION["balance"],2)?></span>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 select-transaction d-flex flex-column text-center mt-5">
                        <a href="<?= base_url() ?>wallet/send" class="my-2">Send</a>
                        <a href="<?= base_url() ?>wallet/receive" class="my-2">Receive</a>
                        <a href="<?= base_url() ?>wallet/request" class="my-2">Request</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>