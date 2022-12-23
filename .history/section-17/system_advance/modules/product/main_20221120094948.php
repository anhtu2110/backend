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
$cat_id = $_GET['cat_id'];
?>
<div id="content">
    <h1>Danh mục sản phẩm - <?php echo $list_cat_product[$cat_id]['cat_title'] ?></h1>
</div>