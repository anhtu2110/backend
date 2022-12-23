<?php
get_header();
?>
<?php
//Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'unitop');
if (!$conn) {
    echo "Kết nối không thành công." . mysqli_connect_error();
} else {
    echo "Kết nối thành công";
}

?>
<div id="content">
    <h1>Đăng ký</h1>
    <form action="" method="post">
        <label for="fullname">Họ và tên: </label>
        <input type="text" name="fullname" id="fullname">
    </form>
</div>
<?php
get_footer();
?>