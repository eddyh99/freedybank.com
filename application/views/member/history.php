<?php
foreach ($history as $dt) { ?>
<div class="list-transaction d-flex align-items-center">
    <div class="flex-shrink-0">
        <?php if (($dt->ket == "Topup") || ($dt->ket == "topup") || ($dt->ket == "Receive") || ($dt->ket == "Swap Receive") || ($dt->ket == "Referral")) { ?>
        <img src="assets/img/topup.png" alt="tc">
        <?php } else { ?>
        <img src="assets/img/withdraw.png" alt="tc">
        <?php } ?>
    </div>
    <div class="flex-grow-1 ms-3">
        <h4><?= ucfirst($dt->ket) ?></h4>
        <span><?php echo date_format(date_create($dt->date_created), "m-d-Y h:i A") ?></span>
    </div>
    <div class="d-flex flex-column justify-content-end text-end">
        <?php if (($dt->ket == "Topup") || ($dt->ket == "topup") || ($dt->ket == "Receive") || ($dt->ket == "Referral")) { ?>
        <font color="green"><?= $_SESSION["symbol"] ?> <?= number_format($dt->amount, 2) ?></font>
        <?php }elseif (($dt->ket == "Swap Receive")) { ?>
        <font color="green"><?= $_SESSION["symbol"] ?> <?= number_format($dt->amount, 2) ?></font>
        <?php } else { ?>
        <font color="red"><?= $_SESSION["symbol"] ?> <?= number_format($dt->amount, 2) ?></font>
        <?php } ?>

        <?php if (($dt->ket != "Swap Receive") && ($dt->ket != "Swap")) { ?>
        <small style="color:red;">Fee <?= number_format($dt->fee, 2) ?></small>
        <?php } ?>
    </div>
</div>
<?php } ?>

<?php
if (empty($history)) {
?>
<div class="list-transaction d-flex align-items-center text-center justify-content-center">
    <span class="fst-italic">No history</span>
</div>
<?php
}
?>