<?php
get_header();
?>
<div id="content">
    <h1>Danh sách thành viên</h1>
    <a href="?mod=users&act=add" class="add_user">Thêm thành viên</a>
    <table>
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
    </table>
</div>
<?php
get_footer();
?>