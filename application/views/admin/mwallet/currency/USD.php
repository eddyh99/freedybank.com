<div class="mb-3">
    <input class="form-control" type="text" name="accountNumber" placeholder="Account Number">
</div>
<?php if ($type == "local") { ?>
<div class="mb-3">
    <input class="form-control" type="text" name="abartn" placeholder="Abartn">
</div>
<?php } ?>

<?php if ($type == "inter") { ?>
<div class="mb-3">
    <input class="form-control" type="text" name="swiftCode" placeholder="Swift Code">
</div>

<input type="hidden" name="abartn" value="">
<input type="hidden" name="accountType" value="">
<?php } ?>

<?php if ($type == "local") { ?>
<div class="mb-3">
    <select name="accountType" class="form-select" id="accountType">
        <option value="saving">Saving</option>
        <option value="checking">Checking</option>
    </select>
</div>
<?php } ?>

<div class="mb-3">
    <input class="form-control" type="text" name="city" placeholder="City">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="postCode" placeholder="Postcode">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="firstLine" placeholder="FirstLine">
</div>
<?php if ($type == "local") { ?>
<div class="mb-3">
    <input class="form-control" type="text" name="state" placeholder="State initial" maxlength="2">
</div>
<?php } ?>

<?php if ($type == "inter") { ?>
<div class="mb-3">
    <input class="form-control" type="text" name="state" placeholder="State">
</div>
<?php } ?>

<div class="mb-3">
    <select name="countryCode" class="form-select me-2" id="countryCode">
        <option value="">--Country Initial--</option>
        <?php foreach ($countries_list as $cur) { ?>
        <option value="<?= $cur['code'] ?>"><?= $cur['code'] . ' - ' . $cur['name'] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="form-control" type="text" name="countryCode" placeholder="Country initial" maxlength="2"> -->
</div>