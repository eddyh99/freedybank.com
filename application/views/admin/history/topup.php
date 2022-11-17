<input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
    value="<?php echo $this->security->get_csrf_hash(); ?>">

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-12 box-dashboard-freedy-top px-3 py-5 mt-3 mb-4 d-flex flex-row align-items-center">
                <div class="d-flex flex-column me-auto">
                    <h3 class="fw-bold text-blue-freedy mb-4">MASTER WALLET <?= $_SESSION["mwallet"] ?></h3>
                    <h6 class="fw-bold">Balance</h6>
                    <h4 class="fw-bold"><?= $_SESSION["symbol"] ?> <?= $_SESSION["balance"] ?></h4>
                </div>
                <img src="assets/img/logo.png" alt="" style="height: 75px;" class="me-5">
            </div>
            <div class="col-12 card mb-5">
                <div class="card-header fw-bold">
                    <i class="fas fa-list me-1"></i>
                    Transactions
                </div>
                <div class="card-body">
                    <input class="datepicker-af" type="text" name="tgl" id="tgl" readonly>
                    <table id="tbl_history" class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Cost</th>
                                <th>Comission</th>
                                <th>Fee (Net)</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody style="border-top: 0;">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>