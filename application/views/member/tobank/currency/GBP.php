<input type="hidden" name="url" value="<?= $type ?>">
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="amount" placeholder="Amount">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountHolderName" placeholder="Recipient Name">
</div>

<?php if ($type == 'local') { ?>
    <div class="d-flex flex-row align-items-center my-3">
        <input class="form-control me-2" type="text" name="accountNumber" placeholder="Account Number">
    </div>
    <div class="d-flex flex-row align-items-center my-3">
        <input class="form-control me-2" type="text" name="sortCode" placeholder="Sort Code">
    </div>
<?php } ?>

<?php if ($type == 'inter') { ?>
    <div class="d-flex flex-row align-items-center my-3">
        <input class="form-control me-2" type="text" name="IBAN" placeholder="IBAN">
    </div>
<?php } ?>

<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="causal" placeholder="Causal">
</div>