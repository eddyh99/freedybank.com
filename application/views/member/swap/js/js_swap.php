<script>
    $(function(){
        $("#tocurrency").html($('option:selected', this).attr("data-currency"))
    })

    $("#toswap").on("change",function(){
        $("#tocurrency").html($('option:selected', this).attr("data-currency"))
    });
</script>