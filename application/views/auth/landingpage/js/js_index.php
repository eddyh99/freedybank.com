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
</script>