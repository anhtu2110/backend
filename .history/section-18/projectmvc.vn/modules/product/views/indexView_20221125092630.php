<?php
global $product_cat, $list_product $num_prouduct;
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
                    <p class="section-desc">Có <?php echo $num_prouduct ?> sản phẩm trong mục này</p>
                </div>
                <?php
                if (!empty($list_product)) {
                ?>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php
                            $num_prouduct = 0;
                            foreach ($list_product as $key => $product) {
                                ++$num_prouduct;
                                $product['url_detail'] = "?mod=product&action=detail&id=" . $product['id'];
                            ?>
                                <li>
                                    <a href="<?php echo $product['url_detail'] ?>" title="" class="thumb">
                                        <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title"><?php echo $product['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($product['price']) ?></p>
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