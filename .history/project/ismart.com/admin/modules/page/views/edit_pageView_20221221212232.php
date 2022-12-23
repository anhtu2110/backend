<?php
get_header();
global $error, $page_title, $page_content, $status;
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa trang
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="page_title">Tiêu đề trang</label>
                    <input class="form-control" type="text" name="page_title" id="page_title" value="<?php echo $page_item['page_title'] ?>">
                </div>
                <?php echo form_error('page_title') ?>
                <div class="form-group">
                    <label for="page_content">Nội dung trang</label>
                    <!-- <form method="POST"> -->
                    <textarea class="ckeditor" name="page_content" id="page_content" rows="10" cols="80">
                        <?php echo set_value('page_content') ?>
                        <!-- </textarea> -->
            </form>
        </div>
        <?php echo form_error('page_content') ?>

        <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="pending" value="pending" checked>
                <label class="form-check-label" for="pending">
                    Chờ duyệt
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="public" value="public" <?php if (isset($status) && $status == 'public') echo 'checked' ?>>
                <label class="form-check-label" for="public">
                    Công khai
                </label>
            </div>
        </div>
        <?php echo form_error('status') ?>

        <button type="submit" name="btn_edit_page" class="btn btn-primary">Chỉnh sửa trang</button>
        <?php echo form_success('add_page') ?>
        </form>
    </div>
</div>
</div>
<?php
get_footer();
?>