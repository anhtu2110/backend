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
                $t = $start;
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
    <?php
    if ($num_page > 1) {
    ?>
        <ul class="pagging">
            <?php
            if ($page > 1) {
            ?>
                <li><a href="<?php echo page_pre($page) ?>">
                        << </a>
                </li>
            <?php
            }
            ?>
            <?php
            for ($i = 1; $i <= $num_page; $i++) {
                if ($page == $i) {
            ?>
                    <li><a href="?mod=users&act=main&page=<?php echo $i ?>" class="active"><?php echo $i ?></a></li>
                <?php
                } else {
                ?>
                    <li><a href="?mod=users&act=main&page=<?php echo $i ?>" class="<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php
                }

                ?>

            <?php
            }
            ?>
            <?php
            if ($page < $num_page) {
            ?>
                <li><a href="<?php echo page_next($page) ?>">>></a></li>
            <?php
            }
            ?>
        </ul>
    <?php
    }
    ?>
</div>
<?php
?>
<script>
    $(document).ready(function() {
        $("ul.pagging a.<?php echo $page ?>").addClass("active");
    });
</script>
<?php
?>
<?php
get_footer();
?>