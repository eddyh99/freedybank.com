<div class="mb-3">
    <input class="form-control" type="text" name="IBAN" placeholder="IBAN">
</div>
<div class="mb-3">
    <select name="bankCode" class="form-select" id="bankCode">
        <option value="">--Bank Code--</option>
        <?php foreach ($codecur as $dt) { ?>
        <option value="<?= $dt->code ?>"><?= $dt->title ?></option>
        <?php } ?>
    </select>
</div>