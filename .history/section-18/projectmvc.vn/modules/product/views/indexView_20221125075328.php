<?php
global $product_cat, $list_product;
?>
<?php
get_header();
// show_array($list_product);
// show_array($product_cat);
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $product_cat['cat_title'] ?></h3>
                    <p class="section-desc">Có 20 sản phẩm trong mục này</p>
                </div>
                <?php
                if (!empty($list_product)) {
                ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_proudct as $key => $product) {
                            ?>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="public/images/img-product.png" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        <?php
                } else {
                    echo "<p>Không có sản phẩm để hiển thị<p>";
                }

        ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>