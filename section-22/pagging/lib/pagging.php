<?php
function page_next($page)
{
    global $num_page;
    if ($page == $num_page) {
        return "?mod=users&act=main&page=$num_page";
    }
    if ($page >= 1) {
        $page = $page + 1;
        return "?mod=users&act=main&page=$page";
    }
}
function page_pre($page)
{
    if ($page == 1) {
        return "?mod=users&act=main&page=1";
    }
    if ($page > 1) {
        $page = $page - 1;
        return "?mod=users&act=main&page=$page";
    }
}
