<?php
function get_page_title($id)
{
    return db_query("SELECT `page_title` FROM `tbl_page`");
}
