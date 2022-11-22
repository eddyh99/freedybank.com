<script>
$(function() {
    $('#member').DataTable({
        "scrollX": true,
        "responsive": true,
        "ajax": {
            "url": "<?= base_url() ?>admin/member/get_all",
            "type": "POST",
            "data": {
                csrf_freedy: $("#token").val()
            },
            "dataSrc": function(data) {
                $("#token").val(data["token"]);
                console.log(data["member"]);
                return data["member"];
            },
        },
        "columns": [{
                "data": "email"
            },
            {
                "data": "ucode"
            },
            {
                "data": "referral"
            },
            {
                "data": "status"
            },
            {
                "data": "last_login"
            },
        ]
    });
})
</script>