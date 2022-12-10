<input type="hidden" name="url" value="<?= $type ?>">
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="amount" placeholder="Amount">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountHolderName" placeholder="Recipient Name">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountNumber" placeholder="Account Number">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <select name="bankCode" class="form-control me-2" id="bankCode">
        <?php foreach ($codecur as $dt) { ?>
            <option value="<?= $dt->code ?>"><?= $dt->title ?></option>
        <?php } ?>
    </select>
</div>
<div class="d-flex flex-row align-items-center my-3">
    <select name="branchCode" class="form-control me-2" id="branchCode">
    </select>
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="causal" placeholder="Causal">
</div>