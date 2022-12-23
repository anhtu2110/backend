<?php
get_header();
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <?php
    if (!empty($list_buy)) {
        // show_array($list_buy);
    ?>
        <div id="wrapper" class="wp-inner clearfix">
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_buy as $key => $product_buy) {
                            ?>
                                <tr>
                                    <td><?php echo $product_buy['code'] ?></td>
                                    <td>
                                        <a href="<?php echo $product_buy['url_product'] ?>" title="" class="thumb">
                                            <img src="<?php echo $product_buy['product_thumb'] ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $product_buy['url_product'] ?>" title="" class="name-product"><?php echo $product_buy['product_title'] ?></a>
                                    </td>
                                    <td><?php echo currency_format($product_buy['price']) ?></td>
                                    <td>
                                        <input type="number" data-id='<?php echo $product_buy['id'] ?>' min=1 max=50 name="num-order" value="<?php echo $product_buy['qty'] ?>" class="num-order num_order_<?php echo $product_buy['id'] ?>">
                                    </td>
                                    <td class="sub_total_<?php echo $product_buy['id'] ?>"><?php echo currency_format($product_buy['sub_total']) ?></td>
                                    <td>
                                        <a href="<?php echo $product_buy['url_del'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span class="total"><?php echo currency_format($total_cart['total']) ?></span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                            <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                    <a href="?mod=cart&action=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <p class="no_product">Giỏ hàng hiện tại không có sản phẩm</p>
    <?php
    }
    ?>
</div>
<?php
get_footer();
?>