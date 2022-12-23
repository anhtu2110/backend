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
                for ($i = 1; $i <= 3; $i++) {
                    $name = 'cat_' . $i;
                    $cat = $$name;
                    $product_cat = $cat['product_cat'];
                    $list_product = $cat['list_product'];
                    $num_product = $cat['num_product'];
                    // show_array($list_product);
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
                                    $product['url_detail'] = "?mod=product&action=detail&id=" . $product['id'];
                                ?>
                                    <li>
                                        <a href="<?php echo $product['url_detail'] ?>" title="" class="thumb">
                                            <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                        </a>
                                        <a href="<?php echo $product['url_detail'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
                                        <p class="price"><?php echo currency_format($product['price']) ?></p>
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