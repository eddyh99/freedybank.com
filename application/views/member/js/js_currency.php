<script>
    function enablecurrency(cur,status){
        $.get("<?=base_url()?>homepage/setCurrency?currency="+cur+"&status="+status,function(data){
            console.log(data);
        });
    }
</script>