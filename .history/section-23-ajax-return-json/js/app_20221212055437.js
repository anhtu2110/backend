$(document).ready(function () {
    $("#result-json").click(function () {
        $.ajax({
            type: "post",
            url: "json.php",
            // data: "json",
            dataType: "json",
            success: function (result) {

            }
        });
    })
})