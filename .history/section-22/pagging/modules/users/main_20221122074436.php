<?php
get_header();
?>
<?php
//Xuất dữ liệu
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
$total = $num_row;
$num_per_page = 5;
$num_page = ceil($total / $num_per_page);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $num_per_page;
$end = $page * $num_per_page - 1;

$list_user = db_fetch_array("SELECT * FROM `tbl_users` LIMIT {$start}, {$num_per_page}");
?>
<div id="content">
    <h1>Danh sách thành viên</h1>
    <a href="?mod=users&act=add" class="add_user">Thêm thành viên</a>
    <style>
        table.table_data {
            text-align: center;
        }

        table.table_data thead tr {
            border-bottom: 2px solid black;
        }

        table.table_data th,
        table.table_data td {
            padding: 8px 15px;
            border-bottom: 1px solid black;
        }
    </style>
    <?php
    if (!empty($list_user)) {
    ?>
        <table class="table_data">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Id</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $t = 0;
                foreach ($list_user as $key => $user) {
                    ++$t;
                ?>
                    <tr>
                        <td><?php echo $t ?></td>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo gender($user['gender']) ?></td>
                        <td><a class="user_update" href="?mod=users&act=update&id=<?php echo $user['user_id'] ?>">Sửa</a>|<a class="user_delete" href="?mod=users&act=delete&id=<?php echo $user['user_id'] ?>">Xóa</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p>Không có dữ liệu người dùng</p>
    <?php
    }
    ?>
</div>
<div class="num_user_pagging">
    <p class="num_row">Có : <?php echo $num_row ?> thành viên trong hệ thống</p>
    <ul class="pagging">
        <li><a href="<?php echo page_pre($_GET['page']) ?>">
                << </a>
        </li>
        <li><a href="?mod=users&act=main&page=1">1</a></li>
        <li><a href="?mod=users&act=main&page=2">2</a></li>
        <li><a href="?mod=users&act=main&page=3">3</a></li>
        <li><a href="?mod=users&act=main&page=4">4</a></li>
        <li><a href="?mod=users&act=main&page=<?php echo $_GET['page'] + 1 ?>">>></a></li>
    </ul>
</div>
<?php
get_footer();
?>