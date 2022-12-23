<?php
get_header();
?>

<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Fullname không được để trống.";
    } else {
        if (strlen($_POST['fullname']) < 6 or strlen($_POST['fullname']) > 32) {
            $error['fullname'] = "Fullname có độ dài từ 6-32 ký tự.";
        } else {
            $fullname = $_POST['fullname'];
        }
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Username không được để trống.";
    } else {
        if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
            $error['username'] = "Username có độ dài từ 6-32 ký tự.";
        } else {
            if (is_username($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                $error['username'] = "Username không đúng định dạng.";
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Password không được để trống.";
    } else {
        if (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 32) {
            $error['password'] = "Password có độ dài từ 6-32 ký tự.";
        } else {
            if (is_password($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                $error['password'] = "Password không đúng định dạng";
            }
        }
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Email không được để trống.";
    } else {
        if (is_email($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $error['email'] = "Email không đúng định dạng.";
        }
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = "Giới tính không được để trống.";
    } else {
        $gender = $_POST['gender'];
    }
    $success = array();
    //Kết luận
    if (empty($error)) {
        $sql = "INSERT INTO `tbl_users` (`fullname`, `username`, `password`, `email`, `gender`) VALUES ('$fullname','$username','$password','$email','$gender')";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công.";
        } else {
            echo "Thêm dữ liệu không thành công.";
        }
    }
}
?>
<div id="content">
    <h1>Đăng ký</h1>
    <form action="" method="post" id="reg">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
        <?php echo form_error('fullname') ?>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
        <?php echo form_error('username') ?>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo set_value('email') ?>">
        <?php echo form_error('email') ?>
        <select name="gender" id="gender">
            <option value="">---Chọn giới tính---</option>
            <option value="male" <?php if (!empty($gender) && $gender == 'male') echo "selected" ?>>Nam</option>
            <option value="female" <?php if (!empty($gender) && $gender == 'female') echo "selected" ?>>Nữ</option>
        </select>
        <?php echo form_error('gender') ?>
        <input type="submit" name="btn_reg" value="ĐĂNG KÝ">
    </form>
</div>
<?php
get_footer();
?>