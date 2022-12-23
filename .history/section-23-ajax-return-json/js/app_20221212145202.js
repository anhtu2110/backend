$(document).ready(function () {
    $("#result-json").click(function () {
        $.ajax({
            type: "post",
            url: "json.php",
            // data: "json",
            dataType: "json",
            success: function (result) {
                var html = '';
                html += '<table border="1" cellspacing="0" cellpadding="10">';
                html += '<tr>';
                html += '<th>';
                html += 'Username';
                html += '<th>';
            }
        });
    })
})