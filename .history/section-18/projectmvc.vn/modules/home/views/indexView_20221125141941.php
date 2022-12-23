<?php
get_header();
?>
<?php
// show_array($cat_2);
// show_array($cat_2);
// show_array($cat_1['product_cat']);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <?php
                for ($i = 1; $i <= 2; $i++) {
                    $name = 'cat_' . $i;
                    $cat = $$name;
                    $product_cat = $cat['product_cat'];
                    $list_product = $cat['list_product'];
                    $num_product = $cat['num_product'];
                    show_array($list_product);
                ?>
                    <div class="section-head">
                        <h3 class="section-title"><?php echo $product_cat['cat_title'] ?></h3>
                    </div>
                    <?php
                    if (!empty($list_product)) {
                    ?>
                        <div class="section-detail">
                            <ul class="list-item clearfix">
                                <?php
                                foreach ($list_product as $product) {
                                ?>
                                    <li>
                                        <a href="<?php echo $product['url_detail'] ?>" title="" class="thumb">
                                            <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                        </a>
                                        <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                        <p class="price">5.000.000đ</p>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    <?php
                    } else {
                    ?>
                        <p>Sản phẩm này hiện tại <strong>Hết hàng</strong></p>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>