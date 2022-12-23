<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm trang
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="page_title">Tiêu đề trang</label>
                    <input class="form-control" type="text" name="page_title" id="page_title">
                </div>
                <div class="form-group">
                    <label for="page_content">Nội dung trang</label>
                    <form>
                        <textarea class="ckeditor" name="page_content" id="page_content" rows="10" cols="80">
            </textarea>
                    </form>
                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="pending" value="pending" checked>
                        <label class="form-check-label" for="pending">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="public" value="public">
                        <label class="form-check-label" for="public">
                            Công khai
                        </label>
                    </div>
                </div>



                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<!-- <script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    });
</script> -->
<?php
get_footer();
?>