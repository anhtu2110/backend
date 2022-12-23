<?php
get_header();
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
                <td>Tên</td>
                <td>Email</td>
                <td>Tuổi</td>
                <td>Thu nhập</td>
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