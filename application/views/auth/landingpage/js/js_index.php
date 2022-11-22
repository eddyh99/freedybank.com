<script>
$("#btnaccorionOne").on("click", function() {
    var element = document.getElementById("seemoreOne");
    var btnacc = document.getElementById("btnaccorionOne");
    var testClass = element.className;

    switch (testClass) {
        case "small":
            element.classList.add("collapse");
            break;
        case "small collapse":
            element.classList.remove("collapse");
            break;
        default:
            element.classList.remove("collapse");
    }
})

$("#btnaccorionTwo").on("click", function() {
    var element = document.getElementById("seemoreTwo");
    var testClass = element.className;

    switch (testClass) {
        case "small":
            element.classList.add("collapse");
            break;
        case "small collapse":
            element.classList.remove("collapse");
            break;
        default:
            element.classList.remove("collapse");
    }
})
$("#btnaccorionThree").on("click", function() {
    var element = document.getElementById("seemoreThree");
    var testClass = element.className;

    switch (testClass) {
        case "small":
            element.classList.add("collapse");
            break;
        case "small collapse":
            element.classList.remove("collapse");
            break;
        default:
            element.classList.remove("collapse");
    }
})
</script>