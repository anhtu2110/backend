<?php
get_header();
?>
<style>
    a.add_user {
        display: inline-block;
        padding: 10px;
        background-color: #b2bec3;
        text-decoration: none;
        border: 1px solid black;
    }

    a.add_user:hover {
        color: yellow;
    }
</style>
<div id="content">
    <h1>Danh sách thành viên</h1>
    <a href="?mod=users&act=add" class="add_user">Thêm thành viên</a>
</div>
<?php
get_footer();
?>