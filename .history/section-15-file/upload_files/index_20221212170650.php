<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng quan upload file lên server</title>
</head>

<body>
    <style>
        label,
        input {
            margin-bottom: 15px;
        }
    </style>
    <form action="upload.php" enctype="multipart/form-data" method="POST">
        <label for="file">Send this file</label> <br>
        <input type="file" name="file" id="file"> <br>
        <input type="submit" value="Send File">
    </form>
</body>

</html>