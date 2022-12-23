<?php
function get_page_by_id($id)
{
    $result = db_fetch_row("SELECT * FROM `tbl_page` WHERE `id` = {$id}");
    return $result;
}
