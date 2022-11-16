<?php 
foreach($history as $dt){?>
    <div class="list-transaction d-flex align-items-center">
        <div class="flex-shrink-0">
            <img src="assets/img/freedy/withdraw.png" alt="tc">
        </div>
        <div class="flex-grow-1 ms-3">
            <h4><?=ucfirst($dt->ket)?></h4>
            <span><?php echo date_format(date_create($dt->date_created),"m-d-Y h:i A")?></span>
        </div>
        <div class="flex-shrink-0">
            <?php if (($dt->ket=="Topup")||($dt->ket=="Receive")||($dt->ket=="Swap Receive") || ($dt->ket=="Referral")){?>
                <font color="green"><?=$_SESSION["symbol"]?> <?=number_format($dt->amount,2)?></font>
            <?php }else{?>
                <font color="red"><?=$_SESSION["symbol"]?> <?=number_format($dt->amount,2)?></font>
            <?php }?>
        </div>
    </div>
<?php }?>