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
                        foreach ($list_product as $key => $product) {
                            # code...
                        }
                    ?>
                        <div class="section-detail">
                            <ul class="list-item clearfix">
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
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