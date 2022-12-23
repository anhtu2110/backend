<?php
get_header();
?>
<?php
//Xuất dữ liệu
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
$list_user = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_user[] = $row;
    }
}
show_array($list_user);
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
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
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
<?php
get_footer();
?>