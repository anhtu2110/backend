<?php
get_header();
?>
<div id="content">
    <h1>xin chào tất cả mọi người</h1>
</div>
<?php
get_footer();
?>
<html>

<head>
    <title>Danh sách thành viên</title>
    <meta charset="utf8" />
</head>

<body>
    <h1>Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Họ và tên</td>
                <td>Tên đăng nhập</td>
                <td>Email</td>
                <td>Giới tính</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($list_users)) {
                $t = 0;
                foreach ($list_users as $user) {
                    $t++;
            ?>
                    <tr>
                        <td><?php echo $t; ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo show_gender($user['gender']) ?></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</body>

</html>