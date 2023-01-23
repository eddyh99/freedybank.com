<div class="mb-3">
    <input class="form-control" type="text" name="accountNumber" placeholder="accountNumber">
</div>
<div class="mb-3">
    <select name="bankCode" class="form-select" id="bankCode">
        <?php foreach ($codecur as $dt) { ?>
        <option value="<?= $dt->code ?>"><?= $dt->title ?></option>
        <?php } ?>
    </select>
</div>
<div class="mb-3">
    <select name="branchCode" class="form-select" id="branchCode">
    </select>
</div>