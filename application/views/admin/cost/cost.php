<input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

        <div id="layoutSidenav_content">
            <main>
                <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <?php if (@isset($_SESSION["success"])) { ?>
                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <div class="container-fluid px-4">
                    <div class="col-12 card mb-5">
                        <div class="card-header fw-bold">
                            FREEDY BANK Cost
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-4">Currency</label>
                                <div class="col-4">
                                    <select name="currency" id="currency" class="form-select">
                                        <?php foreach ($currency as $dt){?>
                                            <option value="<?=$dt->currency?>"><?=$dt->name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <label class="col-12">Topup</label>
                                <div class="col-12">
                                    <input type="text" id="topup" name="topup" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12">Wallet to Bank Local</label>
                                <div class="col-12">
                                    <input type="text" id="walletbank_local" name="walletbank_local" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12">Wallet to International</label>
                                <div class="col-12">
                                    <input type="text" id="walletbank_inter" name="walletbank_inter" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12">Wallet to Wallet</label>
                                <div class="col-12">
                                    <input type="text" id="wallet2wallet" name="wallet2wallet" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12">Swap</label>
                                <div class="col-12">
                                    <input type="text" id="swap" name="swap" class="form-control" readonly>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>