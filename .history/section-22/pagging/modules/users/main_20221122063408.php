<?php
get_header();
?>
<?php
//Xuất dữ liệu
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$list_user = array();
$num_row = mysqli_num_rows($result);
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_user[] = $row;
    }
}
// show_array($list_user);
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
        <li><a href="">
                << </a>
        </li>
        <li><a href="?mod=users&act=main&page=1">1</a></li>
        <li><a href="?mod=users&act=main&page=2">2</a></li>
        <li><a href="?mod=users&act=main&page=3">3</a></li>
        <li><a href="?mod=users&act=main&page=4">4</a></li>
        <li><a href="?mod=users&act=main&page=<?php $_GET['page'] - 1 ?>">>></a></li>
    </ul>
</div>
<?php
get_footer();
?>