<?php
$list_cat_product = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại',
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Máy tính',
    ),
);
?>
<?php
$id = $_GET['id'];
?>
<div id="content">
    <h1>Danh mục sản phẩm <?php echo $list_cat_product[$id]['cat_title'] ?></h1>
</div>