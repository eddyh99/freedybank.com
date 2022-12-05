<script>
$("#btnaccorionOne").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element1.style.display == "none") {
        element1.style.display = "grid";
    } else {
        element1.style.display = "none";
        element2.style.display = "grid";
        element3.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionTwo").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element2.style.display == "none") {
        element2.style.display = "grid";
    } else {
        element2.style.display = "none";
        element1.style.display = "grid";
        element3.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionThree").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element3.style.display == "none") {
        element3.style.display = "grid";
    } else {
        element3.style.display = "none";
        element2.style.display = "grid";
        element1.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionFour").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element4.style.display == "none") {
        element4.style.display = "grid";
    } else {
        element4.style.display = "none";
        element2.style.display = "grid";
        element3.style.display = "grid";
        element1.style.display = "grid";
    }
});


$("#ucode").on("change", function() {
    var ucode = $("#ucode").val();
    $.ajax({
        url: "<?= base_url() ?>link/check_ucode?ucode=" + ucode,
        success: function(response) {
            console.log(response);
            var data = JSON.parse(response);
            if (data.type == 'show') {
                $('#email_div').removeClass("bg-disable");
                $('#question_div').removeClass("bg-disable");
                $("#email").removeAttr("disabled");
                $("#question").removeAttr("disabled");
            }
            if (data.type == 'hide') {
                $('#email_div').addClass("bg-disable");
                $('#question_div').addClass("bg-disable");
                $("#email").attr("disabled", "disabled");
                $("#question").attr("disabled", "disabled");
            }
        },
        error: function(response) {
            alert(response);
        }
    })
});
</script>