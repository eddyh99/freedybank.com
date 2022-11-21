<script>
    readfee();
    function readfee(){
        var readcurrency=$("#currency").val();
        $.ajax({
            url: "<?=base_url()?>admin/cost/getcost?currency="+readcurrency,
            success: function (response) {
                console.log(response);
                var data = JSON.parse(response);
                $("#topup").val(data.topup)
                $("#walletbank_local").val(data.walletbank_local)
                $("#walletbank_inter").val(data.walletbank_inter)
                $("#w2w_send").val(data.wallet_send)
                $("#w2w_receive").val(data.wallet_receive)
                $("#swap").val(data.swap)
            },
            error: function(response){
                alert(response);
            }
        })        
    }

    $("#currency").on("change",function(){
        readfee();
    })
</script>