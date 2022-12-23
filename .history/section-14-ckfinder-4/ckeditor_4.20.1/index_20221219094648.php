<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <title>Document</title>
</head>

<body>
    <form>
        <textarea name="ad" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor 4.
            </textarea>
    </form>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('ad1', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        });
    </script>
</body>

</html>