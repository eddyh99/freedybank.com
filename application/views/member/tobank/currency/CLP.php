<input type="hidden" name="url" value="<?= $type ?>">
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="amount" placeholder="Amount">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountHolderName" placeholder="Recipient Name">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountNumber" placeholder="Account Number" maxlength="18"
        minlength="18">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <select name="accountType" class="form-control me-2" id="accountType">
        <option value="SAVING">Saving</option>
        <option value="CHECKING">Checking</option>
    </select>
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="bankCode" placeholder="Bank Code">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="rut" placeholder="Rut">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="phoneNumber" placeholder="Phone Number">
</div>
<div class="d-flex flex-row align-items-center my-3">
    <input class="form-control me-2" type="text" name="causal" placeholder="Causal">
</div>