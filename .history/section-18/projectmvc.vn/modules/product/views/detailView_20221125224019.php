<?php
// global $product_item;
get_header();
?>
<?php
show_array($product_item);
?>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?php echo $product_item['product_thumb'] ?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?php echo $product_item['product_title'] ?></h3>
                        <p class="price"><?php echo currency_format($product_item['price']) ?></p>
                        <p class="product-code">Mã sản phẩm: <span><?php echo $product_item['code'] ?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <?php echo $product_item['product_desc'] ?>
                        </div>
                        <div class="num-order-wp">
                            <span>Số lượng:</span>
                            <div id="buy-amount">
                                <button class="minus-btn" onclick="handleMinus()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>
                                </button>
                                <input type="text" name="amount" id="amount" value="1" />
                                <button class="plus-btn" onclick="handlePlus()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </div>
                            <a href="?mod=product&act=add&id=1" title="" class="add-to-cart">Thêm giỏ hàng</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <?php echo $product_item['product_content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
<script>
    let amountElement = document.getElementById("amount");
    let amount = amountElement.value;
    let render = (amount) => {
        amountElement.value = amount;
    };
    //Xử lý handlePlus
    let handlePlus = () => {
        amount++;
        render(amount);
    };

    //Handle Minus
    let handleMinus = () => {
        if (amount > 1) {
            amount--;
        }
        render(amount);
    };

    amountElement.addEventListener("input", () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = isNaN(amount) || amount == 0 ? 1 : amount;
        render(amount);
    });
</script>