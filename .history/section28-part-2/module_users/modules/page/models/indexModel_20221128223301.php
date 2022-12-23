<?php
function get_page_title($id)
{
    $result = db_query("SELECT `page_title` FROM `tbl_page` WHERE `id` = $id");
    return $result;
}
