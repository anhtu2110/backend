<?php
require './lib/database.php';

$conn = mysqli_connect('localhost', 'root', '', 'unitop');
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);

//Kiểm tra xem có dữ liệu không
if (mysqli_num_rows($result) > 0) {
    echo '<table border="1" cellspacing="0" cellpadding="10">';
    echo '<tr>';
    echo '<td>';
    echo 'Username';
    echo '</td>';
    echo '<td>';
    echo 'Email';
    echo '</td>';
    echo '<tr>';

    // Lặp danh sách và hiển thị dạng table
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        echo '<tr>';
        echo '<td>';
        echo $row['username'];
        echo '</td>';
        echo '<td>';
        echo $row['email'];
        echo '</td>';
        echo '<tr>';
    }
    echo '</table>';
}
