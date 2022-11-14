        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="col-6 card my-5">
                        <div class="card-header fw-bold">
                            <i class="fas fa-money-bill-transfer me-1"></i>
                            Withdraw Master Wallet
                        </div>
                        <div class="card-body">
                            <form action="">
                                <input type="text" class="form-control my-4" name="amount" id="amount"
                                    placeholder="Amount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                <input type="text" class="form-control my-4" name="amount" id="amount"
                                    placeholder="Confirm Amount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                <button class="btn btn-freedy-white px-4 py-2 mx-2 shadow-none">Cancel</button>
                                <button class="btn btn-freedy-blue px-4 py-2 mx-2 shadow-none">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>