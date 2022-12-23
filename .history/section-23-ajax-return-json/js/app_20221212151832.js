$(document).ready(function () {
    $("#json-click").click(function () {
        $.ajax({
            type: "get",
            url: "json.php",
            // data: "json",
            dataType: "json",
            success: function (result) {
                var html = '';
                html += '<table border="1" cellspacing="0" cellpadding="10">';
                html += '<tr>';
                html += '<th>';
                html += 'Username';
                html += '</th>';
                html += '<th>';
                html += 'Email';
                html += '</th>';
                html += '</tr>';
                $.each(result, function (key, item) {
                    html += '<tr>';
                    html += '<td>';
                    html += item['username'];
                    html += '</td>';
                    html += '<td>';
                    html += item['email'];
                    html += '</td>';
                    html += '</tr>';
                });
                html += '</table>';
                $(this).html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    })
})