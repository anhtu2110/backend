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
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
get_footer();
?>