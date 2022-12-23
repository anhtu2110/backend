<?php
$list_users = array(
    1 => array(
        'user_id' => 1,
        'fullname' => 'Đào Anh Tú',
        'username' => 'daoanhtu',
    ),
    2 => array(
        'user_id' => 2,
        'fullname' => 'Phan Văn Cương',
        'username' => 'phanvancuong',
    ),
    3 => array(
        'user_id' => 3,
        'fullname' => 'Trần Thu Hằng',
        'username' => 'tranthuhang',
    ),
);
echo $list_users[2]['fullname'];
?>
<script>
    alert("<?php echo $list_users[2]['fullname'] ?>");
</script>