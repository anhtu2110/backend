<?php get_header() ?>
<?php
global $page;
?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <?php get_sidebar() ?>
        </div>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $page['page_tile'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $page['created_at'] ?></p>
                    <div class="content-news">
                        <?php echo $page['page_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>