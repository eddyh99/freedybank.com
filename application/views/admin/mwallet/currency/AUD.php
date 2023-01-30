<div class="mb-3">
    <input class="form-control" type="text" name="accountNumber" placeholder="accountNumber">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="city" placeholder="City">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="postCode" placeholder="Post Code">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="firstLine" placeholder="FirstLine">
</div>
<div class="mb-3">
    <select name="countryCode" class="form-select me-2" id="countryCode">
        <option value="">--Country Initial--</option>
        <?php foreach ($countries_list as $cur) { ?>
        <option value="<?= $cur['code'] ?>"><?= $cur['code'] . ' - ' . $cur['name'] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="form-control" type="text" name="countryCode" placeholder="Country initial"> -->
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="state" placeholder="State">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="bsbCode" placeholder="BSB Code">
</div>