<div class="mb-3">
    <input class="form-control" type="text" name="accountNumber" placeholder="Account Number">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number">
</div>
<div class="mb-3">
    <select name="countryCode" class="form-select me-2" id="countryCode">
        <option value="">--Country Initial--</option>
        <?php foreach ($countries_list as $cur) { ?>
        <option value="<?= $cur['code'] ?>"><?= $cur['code'] . ' - ' . $cur['name'] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="form-control" type="text" name="countryCode" placeholder="Country initial" maxlength="2"> -->
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="city" placeholder="City">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="firstLine" placeholder="FirstLine">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="postCode" placeholder="Post Code">
</div>