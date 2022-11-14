        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="col-12 box-dashboard-freedy-top px-3 py-5 mt-3 mb-4 d-flex flex-row align-items-center">
                        <div class="d-flex flex-column me-auto">
                            <h3 class="fw-bold text-blue-freedy mb-4">MASTER WALLET <?=$_SESSION["mwallet"]?></h3>
                            <h6 class="fw-bold">Balance</h6>
                            <h4 class="fw-bold"><?=$_SESSION["symbol"]?> 1500</h4>
                        </div>
                        <img src="assets/img/logo.png" alt="" style="height: 75px;" class="me-5">
                    </div>
                    <div class="col-12 my-5">
                        <a href="<?=base_url()?>admin/mwallet/withdraw" class="btn btn-freedy-blue fw-bold px-5 py-3">Withdraw</a>
                    </div>
                    <div class="col-12 card mb-5">
                        <div class="card-header fw-bold">
                            <i class="fas fa-list me-1"></i>
                            Transactions
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
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
                                    <tr>
                                        <td>...</td>
                                        <td>10,000.00</td>
                                        <td>10.00</td>
                                        <td>5.00</td>
                                        <td>1.00</td>
                                        <td>2021-08-16 00:00:00</td>
                                    </tr>
                                    <tr>
                                        <td>...</td>
                                        <td>10,000.00</td>
                                        <td>10.00</td>
                                        <td>5.00</td>
                                        <td>1.00</td>
                                        <td>2021-08-16 00:00:00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Cost</th>
                                        <th>Comission</th>
                                        <th>Fee (Net)</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>