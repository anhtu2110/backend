<?php
$conn = mysqli_connect('localhost', 'root', '', 'unitop') or die ("Can't connect to MySql");

$sql = "SELECT * FROM `tbl_users`";

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
        $result[] = array(
            'username' => $row['username'].
        )
    }
}
