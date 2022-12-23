<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/app.js"></script>
    <title>Ajax dữ liệu trả về kiểu json</title>
</head>

<body>
    <div id="result1">TEXT</div>
    <div id="result2">JSON</div>
    <div id="result3">XML</div>
    <br />
    <input type="button" name="clickme" id="text-click" value="Get List By Text" />
    <input type="button" name="clickme" id="json-click" value="Get List By Json" />
    <input type="button" name="clickme" id="xml-click" value="Get List By XML" />
    <script language="javascript">
        $('#json-click').click(function() {
            $.ajax({
                url: 'json.php',
                type: 'get',
                dataType: 'json',
                success: function(result) {

                    var html = '';
                    html += '<table border="1" cellspacing="0" cellpadding="10">';
                    html += '<tr>';
                    html += '<td>';
                    html += 'Username';
                    html += '</td>';
                    html += '<td>';
                    html += 'Email';
                    html += '</td>';
                    html += '<tr>';

                    // Kết quả là một object json
                    // Nên ta sẽ loop result
                    $.each(result, function(key, item) {
                        html += '<tr>';
                        html += '<td>';
                        html += item['username'];
                        html += '</td>';
                        html += '<td>';
                        html += item['email'];
                        html += '</td>';
                        html += '<tr>';
                    });

                    html += '</table>';

                    $('#result2').html(html);
                }
            });
        });
    </script>
</body>

</html>