<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách trang</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <?php
        $sql = "SELECT * FROM `tbl_page`";
        if (db_num_rows($sql) > 0) {
            $list_page = db_query($sql);
        ?>
            <div class="card-body">
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Người tạo</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
            foreach ($list_page as $key => $value) {
            ?>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td scope="row">1</td>
                    <td><a href="">Giá xăng sẽ tiếp tục tăng ở mức cao, lần thứ 4 liên tiếp vào ngày mai?</a></td>
                    <td>Tên người tạo</td>
                    <td>26/06/2020 14:00</td>
                    <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>

                </tr>
            <?php
            }
        }
        ?>
        </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Trước</span>
                                <span class="sr-only">Sau</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php
         else {
            ?>
            <p>Không có trang để hiển thị</p>
        <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
