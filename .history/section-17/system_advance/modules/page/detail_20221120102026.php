<?php
$list_page = array(
    1 => array(
        'id' => 1,
        'page_title' => 'Giới thiệu',
    ),
    2 => array(
        'id' => 2,
        'page_title' => 'Liên hệ',
    ),
);
?>
<?php
$id = (int)$_GET['id'];
?>
<?php
get_header();
?>
<div id="content">
    <h1><?php echo $list_page[$id]['page_title'] ?></h1>
</div>
<?php
get_footer();
?>