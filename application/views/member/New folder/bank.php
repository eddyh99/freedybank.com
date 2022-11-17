<div class="container" style="margin-bottom: 8rem;">
    <div class="app-container py-5">
        <?php $this->load->view("member/header"); ?>

        <div class="row d-flex justify-content-center">
            <div class="col-10 col-lg-8 mt-5">
                <div class="d-flex flex-row justify-content-center flex-wrap" id="myTab" role="tablist">
                    <label class="my-2" for="us-tab" style="cursor: pointer;">
                        <div class="btn-selected-receive d-flex align-items-center">
                            <input class="form-check-input" name="bank" id="us-tab" data-bs-toggle="tab"
                                data-bs-target="#us" type="radio" role="tab" aria-controls="us" aria-selected="true"
                                autocomplete="off">
                            <label for="us-tab">Local bank US</label>
                        </div>
                    </label>
                    <label class="my-2" for="inter-tab" style="cursor: pointer;">
                        <div class="btn-selected-receive d-flex align-items-center">
                            <input class="form-check-input" name="bank" id="inter-tab" data-bs-toggle="tab"
                                data-bs-target="#inter" type="radio" role="tab" aria-controls="inter"
                                aria-selected="true" autocomplete="off">
                            <label for="inter-tab">International</label>
                        </div>
                    </label>
                </div>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade box-tab-bank" id="us" role="tabpanel" aria-labelledby="us-tab">
                        <div class="d-flex flex-row align-items-center my-3">
                            <input class="form-control me-2" type="text" name="" id="us1" value="link/code US" readonly>
                        </div>
                        <div class="d-flex flex-row align-items-center my-3">
                            <input class="form-control me-2" type="text" name="" id="us2" value="link/code US" readonly>
                        </div>
                    </div>
                    <div class="tab-pane fade box-tab-bank" id="inter" role="tabpanel" aria-labelledby="inter-tab">
                        <div class="d-flex flex-row align-items-center my-3">
                            <input class="form-control me-2" type="text" name="" id="inter1"
                                value="link/code International" readonly>
                        </div>
                        <div class="d-flex flex-row align-items-center my-3">
                            <input class="form-control me-2" type="text" name="" id="inter2"
                                value="link/code International" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>