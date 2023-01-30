<div class="mb-3">
    <input class="form-control" type="text" name="accountNumber" placeholder="Account Number">
</div>
<div class="mb-3">
    <select name="legalType" class="form-select" id="accountType">
        <option value="PRIVATE">Personal</option>
        <option value="BUSINESS">Business</option>
    </select>
</div>
<div class="mb-3">
    <select name="type" class="form-select" id="accountType">
        <option value="chinese_alipay">Alipay</option>
        <option value="chinese_wechatpay">Wechat</option>
    </select>
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="swiftCode" placeholder="Swift Code">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="city" placeholder="City">
</div>
<div class="mb-3">
    <select name="country" class="form-select me-2" id="country">
        <option value="">--Country Initial--</option>
        <?php foreach ($countries_list as $cur) { ?>
        <option value="<?= $cur['code'] ?>"><?= $cur['code'] . ' - ' . $cur['name'] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="form-control" type="text" name="country" placeholder="country initial" maxlength="2"> -->
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="firstLine" placeholder="FirstLine">
</div>
<div class="mb-3">
    <input class="form-control" type="text" name="postCode" placeholder="Post Code">
</div>